<script setup>
import { ref, defineProps, onMounted, watch, computed } from 'vue';
import { Head, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

const props = defineProps({
    context: {
        type: String,
        required: true,
    },
    otpSent: {
        type: Boolean,
        default: false,
    }
});

const otpDigits = ref(['', '', '', '', '', '']);
const error = ref(null);
const status = ref(null);
const passwordChanged = ref(false);
const otpExpired = ref(false);
const formProcessing = ref(false);
const savedContext = ref(props.context);

const timer = ref(300); // Timer for OTP expiration (300 seconds = 5 minutes)
const interval = ref(null);

const form = useForm({
    otp: '',
    context: savedContext.value  // Use the preserved context
});

const resetFormState = () => {
    form.otp = '';
    otpDigits.value = ['', '', '', '', '', ''];
    formProcessing.value = false;
    error.value = null; // Ensure error is cleared on reset
};

const startTimer = () => {
    interval.value = setInterval(() => {
        if (timer.value > 0) {
            timer.value--;
        } else {
            clearInterval(interval.value);
            otpExpired.value = true;
        }
    }, 1000);
};

const handleSubmit = () => {
    if (formProcessing.value) return;  // Prevent multiple submissions

    error.value = null;  // Clear any previous errors
    formProcessing.value = true;  // Disable the button while processing

    if (savedContext.value === 'forgot-password') {
        // Show the Password Changed modal immediately for forgot-password context
        passwordChanged.value = true;

        // Delay the OTP verification by 5 seconds
        setTimeout(() => {
            verifyOtp();
        }, 5000);
    } else if (savedContext.value === 'login') {
        verifyOtp();
    }
};

const verifyOtp = () => {
    form.otp = otpDigits.value.join('');
    form.context = savedContext.value;  // Ensure the context is passed during OTP verification

    form.post(route('otp.verify'), {
        onError: (errors) => {
            error.value = 'Invalid OTP. Please try again.';  // Show error message
            passwordChanged.value = false;  // Hide the modal if OTP is invalid
            formProcessing.value = false;  // Re-enable the button to allow resubmission
        },
        onSuccess: (response) => {
            if (response.props.success) {
                if (savedContext.value === 'forgot-password' && response.props.passwordReset) {
                    passwordChanged.value = true;  // Show the success modal
                } else if (savedContext.value === 'login') {
                    window.location.href = route('dashboard').url();  // Redirect to dashboard
                }
            } else {
                error.value = 'Invalid OTP. Please try again.';  // Keep the error message visible
                passwordChanged.value = false;  // Hide the modal if OTP is invalid
                formProcessing.value = false;  // Re-enable the button to allow resubmission
            }
        }
    });
};

const resendOtp = () => {
    form.post(route('otp.resend'), {
        onSuccess: (response) => {
            otpExpired.value = false;  // Reset OTP expiration state
            passwordChanged.value = false;  // Ensure modal state is reset
            timer.value = 5; // Reset the timer to 5 minutes
            startTimer();  // Start the timer again
        },
        onError: (errors) => {
            error.value = 'Failed to resend OTP. Please try again.';
        }
    });
};

const onInput = (event, index) => {
    const value = event.target.value;
    if (!/^\d$/.test(value)) {
        otpDigits.value[index] = '';
    } else {
        otpDigits.value[index] = value;
        if (index < otpDigits.value.length - 1) {
            document.getElementById('otp' + (index + 1)).focus();
        }
    }
};

const handlePaste = (event) => {
    const paste = (event.clipboardData || window.clipboardData).getData('text');
    if (/^\d{6}$/.test(paste)) {
        otpDigits.value = paste.split('');
        event.preventDefault();
    }
};

watch(savedContext, (newContext) => {
    form.context = newContext;
});

onMounted(() => {
    startTimer();  // Start the timer when the component is mounted
});

// Computed property to display the timer in minutes and seconds
const formattedTimer = computed(() => {
    const minutes = Math.floor(timer.value / 60);
    const seconds = timer.value % 60;
    return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
});

</script>

<template>
    <Head title="OTP Verification" />
    <div class="flex items-center justify-center min-h-screen bg-center bg-cover" style="background-image: url('/images/backgrounddswd.png');">
        <div v-if="!otpExpired && !passwordChanged" class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md sm:p-8 lg:p-10 sm:max-w-xl lg:max-w-2xl border border-gray-300">
            <div class="mb-6 text-2xl font-semibold text-center lg:text-3xl text-red-600">AUTHENTICATION REQUIRED</div>
            <p class="mb-8 text-center text-gray-500 text-md">Your OTP code was sent to your email <span class="text-black text-2xl">&#9993;</span> </p>

            <hr class="mb-16 border-gray-300">

            <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
                {{ status }}
            </div>

            <div v-if="error" class="mb-4 text-sm font-medium text-red-600">
                {{ error }}
            </div>

            <form @submit.prevent="handleSubmit">
                <div class="mt-6 text-center">
                    <div class="flex justify-center mt-2 space-x-3">
                        <TextInput
                            v-for="(digit, index) in otpDigits"
                            :key="index"
                            :id="'otp' + index"
                            type="text"
                            class="text-2xl text-center border border-gray-300 rounded-lg w-14 h-14 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            v-model="otpDigits[index]"
                            maxlength="1"
                            @input="(e) => onInput(e, index)"
                            @paste="handlePaste"
                            required
                        />
                    </div>
                    <InputError class="mt-2" :message="form.errors.otp" />
                </div>

                <!-- Timer Display -->
                <div class="mb-4 mt-5 text-center text-red-500">
                OTP WILL EXPIRE: <strong>{{ formattedTimer }}</strong>
            </div>

                <div class="flex justify-center mt-8">
                    <PrimaryButton :class="{ 'opacity-50': form.processing }" :disabled="form.processing" class="py-3 px-8 text-center text-white bg-gradient-to-r from-blue-900 to-blue-900 rounded-full hover:from-blue-800 hover:to-blue-800">
                        <span class="w-full text-center">VERIFY OTP</span>
                    </PrimaryButton>
                </div>
            </form>
        </div>

        <!-- Password Changed Success Message -->
        <div v-else-if="passwordChanged" class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md sm:p-8 lg:p-10 sm:max-w-xl lg:max-w-2xl">
            <div class="mb-6 text-2xl font-semibold text-center lg:text-3xl">Password Reset Verification</div>
            <p class="mb-8 text-center text-gray-500">Please wait... </p>
        </div>

        <!-- OTP Expired Modal -->
        <div v-else class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md sm:p-8 lg:p-10 sm:max-w-xl lg:max-w-2xl">
            <div class="mb-6 text-2xl font-semibold text-center lg:text-3xl">OTP Expired</div>
            <p class="mb-8 text-center font-semibold text-gray-500">Your OTP has expired. Please click the button below to resend a new OTP.</p>
            <div class="flex justify-center">
                <PrimaryButton @click="resendOtp" class="py-3 px-8 text-center text-white bg-gradient-to-r from-blue-900 to-blue-900 rounded-full hover:from-blue-800 hover:to-blue-800">
                    RESEND OTP
                </PrimaryButton>
            </div>
        </div>
    </div>
</template>