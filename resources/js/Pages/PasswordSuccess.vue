<template>
    <div class="flex items-center justify-center min-h-screen bg-center bg-cover" style="background-image: url('/images/backgrounddswd.png');">
        <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-md sm:p-8 lg:p-10 sm:max-w-xl lg:max-w-2xl">
            <div class="mb-6 text-center">
                <i class="fas fa-check-circle text-green-500 text-5xl mb-4"></i>
                <div class="text-2xl font-semibold lg:text-3xl">
                    Success
                </div>
            </div>
            <hr class="my-4 border-gray-300">
            <p class="mb-8 text-center text-gray-500">{{ message }}</p>
            <div class="flex justify-center">
                <button @click="redirectToLogin" class="px-8 py-2 mt-4  text-white text-xs bg-gradient-to-r rounded-md from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700">BACK TO LOGIN</button>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';
import { usePage } from '@inertiajs/vue3';
import { Inertia } from '@inertiajs/inertia';

const props = defineProps({
    message: {
        type: String,
        default: 'Your password has been reset back to default successfully.'
    }
});

const redirectToLogin = () => {
    Inertia.visit(route('login'));
};
</script>
