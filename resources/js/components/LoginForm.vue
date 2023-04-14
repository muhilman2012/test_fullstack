<template>
    <form @submit.prevent="login">
        <h2>Login</h2>
        <input v-model="email" type="email" placeholder="Email" required>
        <input v-model="password" type="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</template>

<script>
    export default {
    data() {
        return {
        email: '',
        password: ''
        };
    },
    methods: {
        login() {
        // Kirim data login ke server menggunakan axios atau metode lainnya
        // Implementasi logika login di sini
        }
    }
    }
</script>