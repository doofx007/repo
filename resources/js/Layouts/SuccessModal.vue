<template>
    <div v-if="show" class="fixed inset-0 z-50 flex items-center justify-center">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="z-10 p-6 bg-white rounded-lg shadow-lg">
            <h2 class="mb-4 text-xl font-semibold text-center">Success</h2>
            <p>{{ message }}</p>
            <div class="flex justify-center">
                <button @click="closeModal" class="px-4 py-2 mt-4 text-white bg-green-500 rounded-md">OK</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        show: {
            type: Boolean,
            required: true
        },
        message: {
            type: String,
            required: true
        }
    },
    methods: {
        closeModal() {
            this.$emit('close');
        }
    }
};
</script>
