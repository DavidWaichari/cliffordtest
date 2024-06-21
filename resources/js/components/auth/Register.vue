<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Register</h5>
                        <p class="card-subtitle mb-2 text-muted text-center">Hello! Welcome Create a New Account</p>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="register">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input id="name" class="form-control" type="text" v-model="form.name" placeholder="Type your username" required autocomplete="name" autofocus>
                                <div v-if="errors.name" class="text-danger">{{ errors.name[0] }}</div>
                            </div>
                            <!-- end input-box -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" class="form-control" type="email" v-model="form.email" placeholder="Type your email" required autocomplete="email">
                                <div v-if="errors.email" class="text-danger">{{ errors.email[0] }}</div>
                            </div>
                            <!-- end input-box -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" class="form-control" type="password" v-model="form.password" placeholder="Type password" required autocomplete="new-password">
                                <div v-if="errors.password" class="text-danger">{{ errors.password[0] }}</div>
                            </div>
                            <!-- end input-box -->
                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">Repeat Password</label>
                                <input id="password-confirm" class="form-control" type="password" v-model="form.password_confirmation" placeholder="Type again password" required autocomplete="new-password">
                                <div v-if="errors.password_confirmation" class="text-danger">{{ errors.password_confirmation[0] }}</div>
                            </div>
                            <!-- end input-box -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Register Account</button>
                            </div>
                        </form>
                    </div>
                    <!-- end modal-body -->
                </div>
                <!-- end modal-content -->
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import axios from 'axios';
import {useRouter} from "vue-router";

const router = useRouter();
const form = ref({
    name: '',
    email: '',
    password: '',
    password_confirmation: ''
});

const errors = ref({
    name: null,
    email: null,
    password: null,
    password_confirmation: null
});

const register = async () => {
    try {
        const response = await axios.post('/api/auth/register', form.value);
        if (response.data.success) {
            router.push('/login');
        }
    } catch (error) {
        if (error.response && error.response.data.errors) {
            errors.value = error.response.data.errors;
        } else {
            console.error('Error during registration:', error);
        }
    }
};
</script>

<style scoped>
.card {
    margin-top: 50px;
}
.card-header {
    background-color: #f0f0f0;
    padding: 20px;
}
.card-body {
    padding: 20px;
}
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}
.btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}
</style>
