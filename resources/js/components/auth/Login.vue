<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-center">Login</h5>
                        <p class="card-subtitle mb-2 text-muted text-center">Hello! Welcome to your account</p>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="login" method="post">
                            <!-- Display error message -->
                            <div v-if="error" class="alert alert-danger">
                                {{ error }}
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input id="email" type="email" class="form-control" v-model="form.email" required autocomplete="email" autofocus placeholder="Type your email">
                            </div>
                            <!-- end input-box -->

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input id="password" type="password" class="form-control" v-model="form.password" required autocomplete="current-password" placeholder="Type your password">
                            </div>
                            <!-- end input-box -->

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" v-model="form.remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                                <a href="#" class="forgot-password float-end">Forgot Password?</a>
                            </div>
                            <!-- end d-flex -->

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary w-100">Login Account</button>
                            </div>

                            <p class="text-center">Or Login Using</p>
                            <ul class="social-profile py-3 text-center">
                                <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                            <!-- end action-box -->
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
import { useRouter } from 'vue-router';
import { useStore } from 'vuex';

const router = useRouter();
const store = useStore();

const form = ref({
    email: '',
    password: '',
    remember: false
});

const error = ref('');

const login = async () => {
    error.value = '';  // Clear any previous errors
    try {
        await store.dispatch('login', {
            email: form.value.email,
            password: form.value.password,
        });
        router.push('/');
    } catch (err) {
        console.error('Error during login:', err);
        error.value = err.response && err.response.data.message
            ? err.response.data.message
            : 'Invalid credentials or user not found';
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
