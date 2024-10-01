<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div>
            <img src="/images/logo.png" alt="Logo" class="h-20 lg:h-40" />
        </div>

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>

<script setup>
</script>

<style scoped>
.bg-gray-100 {
    background-color: #f7fafc;
}
</style>
