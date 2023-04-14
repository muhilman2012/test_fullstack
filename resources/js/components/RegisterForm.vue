<template>
    <form @submit.prevent="register">
        <h2>Register</h2>
        <input v-model="name" type="text" placeholder="Name" required>
        <input v-model="email" type="email" placeholder="Email" required>
        <input v-model="password" type="password" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>
</template>

<script>
    export default {
    data() {
        return {
        name: '',
        email: '',
        password: ''
        };
    },
    methods: {
        register() {
        // Kirim data register ke server menggunakan axios atau metode lainnya
        // Implementasi logika register di sini
        }
    }
    }
</script>