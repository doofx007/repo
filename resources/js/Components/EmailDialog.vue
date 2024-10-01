<template>
    <transition name="dialog-fade">
      <div v-if="show" class="fixed inset-0 flex items-center justify-center bg-gray-500 bg-opacity-75">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:max-w-lg sm:w-full">
          <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">OTP Verification</h3>
            <div class="mt-2">
              <p class="text-sm text-gray-500">Please enter your email address to receive the OTP for verification.</p>
            </div>
            <div class="mt-5">
              <form @submit.prevent="submitEmail">
                <div>
                  <InputLabel for="email" value="Email" />
                  <TextInput id="email" type="email" v-model="form.email" class="block mt-1 w-full" required />
                  <InputError :message="form.errors.email" class="mt-2" />
                </div>
                <div class="mt-4">
                  <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Send OTP
                  </PrimaryButton>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </template>

  <script setup>
  import { ref } from 'vue';
  import { useForm } from '@inertiajs/vue3';
  import InputError from '@/Components/InputError.vue';
  import InputLabel from '@/Components/InputLabel.vue';
  import PrimaryButton from '@/Components/PrimaryButton.vue';
  import TextInput from '@/Components/TextInput.vue';

  const props = defineProps({
    show: Boolean,
    onClose: Function,
  });

  const form = useForm({
    email: '',
  });

  const submitEmail = () => {
    form.post(route('send.otp'), {
      onSuccess: () => {
        form.reset();
        props.onClose();
      },
      onError: (errors) => {
        form.errors = errors;
      }
    });
  };
  </script>

  <style scoped>
  .dialog-fade-enter-active, .dialog-fade-leave-active {
    transition: opacity 0.5s;
  }
  .dialog-fade-enter, .dialog-fade-leave-to {
    opacity: 0;
  }
  </style>
