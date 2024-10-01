<template>
    <Head title="Log in" />

    <div class="flex items-center justify-center min-h-screen bg-center bg-cover" style="background-image: url('/images/backgrounddswd.png');">
        <div class="w-full max-w-xs p-4 bg-white rounded-lg shadow-md sm:p-6 lg:p-8 sm:max-w-md lg:max-w-lg border border-grey-400">
            <div class="flex justify-center mb-6 lg:mb-8">
                <img src="/images/dswd-logo1.png" alt="DSWD Logo" class="h-20 lg:h-40" />
            </div>

            <hr class="my-4 border-gray-300">

            <div class="mb-4 text-xl font-semibold text-center lg:text-2xl">Human Resource Management System</div>

            <div v-if="status" class="mb-4 text-sm font-medium text-blue-600">
                {{ status }}
            </div>

            <form @submit.prevent="submit">
                <div class="relative">
                    <InputLabel for="empuser" value="Username" />
                    <div class="relative mt-1">
                        <TextInput id="empuser" type="text" class="block w-full pl-4 pr-10 border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" v-model="form.empuser" required autofocus autocomplete="username" />
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <i class="fas fa-user text-gray-400"></i>
                        </span>
                    </div>
                    <InputError class="mt-2" :message="form.errors.empuser" />
                </div>

                <div class="relative mt-4">
                    <InputLabel for="emppass" value="Password" />
                    <div class="relative mt-1">
                        <TextInput :type="showPassword ? 'text' : 'password'" id="emppass" class="block w-full pl-4 pr-10 border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" v-model="form.emppass" required autocomplete="current-password" />
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" @click="togglePassword">
                            <i :class="showPassword ? 'fas fa-eye-slash' : 'fas fa-eye'" class="text-gray-400"></i>
                        </span>
                    </div>
                    <InputError class="mt-2" :message="form.errors.emppass" />
                </div>

                <div class="flex items-center justify-between mt-8">
                    <Link v-if="canResetPassword" :href="route('password.request')" class="text- text-blue-700 underline hover:no-underline">
                        Forgot password?
                    </Link>
                    <PrimaryButton class="py-2 px-12 text-lg font-semibold text-white bg-gradient-to-r from-blue-900 to-blue-900 rounded-full hover:from-blue-800 hover:to-blue-800" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        SIGN IN
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import TextInput from '@/Components/TextInput.vue';

defineProps({
    canResetPassword: {
        type: Boolean,
        default: true, // Default value if not provided
    },
    status: {
        type: String,
        default: '', // Default empty string if not provided
    },
});

const form = useForm({
    empuser: '',
    emppass: '',
});

const showPassword = ref(false);

const togglePassword = () => {
    showPassword.value = !showPassword.value;
};

const submit = () => {
    form.post(route('login'), {
        onSuccess: (page) => {
            console.log('Server response:', page); // Log the server response
            if (page.props.otp_required) {
                console.log('OTP is required'); // Log OTP requirement
                Inertia.visit(route('otp.form'), {
                    method: 'get',
                    data: {
                        context: 'login'
                    }
                });
            } else {
                console.log('Redirecting to dashboard'); // Log redirection to dashboard
                Inertia.visit(route('dashboard'));
            }
        },
        onError: (errors) => {
            console.error('Login error:', errors); // Log any errors
        }
    });
};
</script>
