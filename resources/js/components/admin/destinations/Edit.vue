<template>
    <div class="dashboard-content-wrap">
        <!-- Breadcrumb Section -->
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    Edit Destination
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>Edit Destination</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <form @submit.prevent="submitForm">
                    <!-- Existing Form Fields for Update -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <div class="form-title-wrap">
                                    <h3 class="title">
                                        <i class="la la-gear me-2 text-gray"></i>Edit destination information
                                    </h3>
                                </div>
                                <div class="form-content contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Place Name
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="Destination name" v-model="form.name" required>
                                                    <div v-if="formErrors.name" class="invalid-feedback">{{ formErrors.name }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Description
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <textarea class="form-control" placeholder="Destination description" v-model="form.description" required></textarea>
                                                    <div v-if="formErrors.description" class="invalid-feedback">{{ formErrors.description }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Landmark Name
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="Landmark name" v-model="form.landmark" required>
                                                    <div v-if="formErrors.landmark" class="invalid-feedback">{{ formErrors.landmark }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Landmark Name Input -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Price
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-money form-icon"></span>
                                                    <input class="form-control" name="price" type="number" min="0" step=".01" placeholder="price" v-model="form.price" required>
                                                    <div class="invalid-feedback">Please provide a the price.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Current Name Input -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Current Price
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-money form-icon"></span>
                                                    <input class="form-control" name="current_price" type="number" min="0" step=".01" placeholder="current price" v-model="form.current_price" required>
                                                    <div class="invalid-feedback">Please provide a the current price.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Status</label>
                                                <div class="form-group w-100">
                                                    <select class="form-select" v-model="form.status" required>
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                    </select>
                                                    <div v-if="formErrors.status" class="invalid-feedback">{{ formErrors.status }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Upload Image
                                                </label>
                                                <div class="form-group">
                                                    <input class="form-control" type="file" @change="handleFileUpload">
                                                    <div v-if="formErrors.image" class="invalid-feedback">{{ formErrors.image }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="row">
                        <div class="btn-box pt-3">
                            <button type="submit" class="theme-btn">
                                Update Destination <i class="la la-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import axios from 'axios';
import { useRouter, useRoute } from 'vue-router';
import { ref, onMounted } from 'vue';

const router = useRouter();
const route = useRoute();

const form = ref({
    name: '',
    description: '',
    landmark: '',
    price: '',
    current_price: '',
    status: 'Active'
});

let file: File | null = null;
let destinationId: string | null = null;

// Object to hold form validation errors
const formErrors = ref({
    name: '',
    description: '',
    landmark: '',
    price: '',
    current_price: '',
    status: '',
    image: ''
});

const handleFileUpload = (event: Event) => {
    const target = event.target as HTMLInputElement;
    if (target.files && target.files.length > 0) {
        file = target.files[0];
    }
};

const submitForm = async () => {
    try {
        const formData = new FormData();
        formData.append('name', form.value.name);
        formData.append('description', form.value.description);
        formData.append('landmark', form.value.landmark);
        formData.append('price', form.value.price);
        formData.append('current_price', form.value.current_price);
        formData.append('status', form.value.status);
        if (file) {
            formData.append('image', file);
        }

        // Log formData to verify its contents
        const response = await axios.put(`/api/admin/destinations/${destinationId}`, formData, {
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        });

        if (response.data.success) {
            router.push({ path: '/admin/destinations' });
        }

        // resetForm();
    } catch (error) {
        // Handle errors
        console.error('Error updating destination:', error);
    }
};


const resetForm = () => {
    form.value.name = '';
    form.value.description = '';
    form.value.landmark = '';
    form.value.status = 'Active';
    file = null;
    formErrors.value = {
        name: '',
        description: '',
        landmark: '',
        price: '',
        current_price: '',
        status: '',
        image: ''
    };
};

onMounted(async () => {
    try {
        const response = await axios.get(`/api/admin/destinations/${route.params.id}`);
        const destination = response.data.destination;

        form.value.name = destination.name;
        form.value.description = destination.description;
        form.value.landmark = destination.landmark;
        form.value.price = destination.price;
        form.value.current_price = destination.current_price;
        form.value.status = destination.status;
        // Optionally set other fields here

        destinationId = route.params.id;
    } catch (error) {
        console.error('Error fetching destination details:', error);
    }
});
</script>

<style scoped>
.form-select {
    height: 50px;
    line-height: inherit;
    padding: 10px 20px 10px 40px;
    font-size: 16px;
    color: #0d233e;
}
</style>
