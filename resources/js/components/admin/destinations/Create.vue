<template>
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    Destinations
                                </h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>Add Destination</li>
                            </ul>
                        </div>
                        <!-- end breadcrumb-list -->
                    </div>
                    <!-- end col-lg-6 -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <form @submit.prevent="submitForm">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <div class="form-title-wrap">
                                    <h3 class="title">
                                        <i class="la la-gear me-2 text-gray"></i>Add destination information
                                        for your flights
                                    </h3>
                                </div>
                                <!-- form-title-wrap -->
                                <div class="form-content contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Place Name Input -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Place Name
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="Destination name" v-model="form.name" required name="name">
                                                    <div class="invalid-feedback">Please provide a destination name.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Description Textarea -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Description
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <textarea class="form-control" name="description" placeholder="Destination description" v-model="form.description" required></textarea>
                                                    <div class="invalid-feedback">Please provide a destination description.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Landmark Name Input -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Landmark Name
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" name="landmark" type="text" placeholder="Landmark name" v-model="form.landmark" required>
                                                    <div class="invalid-feedback">Please provide a landmark name.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <!-- Status Select -->
                                            <div class="input-box">
                                                <label class="label-text">Status</label>
                                                <div class="form-group w-100">
                                                    <select class="form-select" v-model="form.status" required name="status">
                                                        <option value="Active">Active</option>
                                                        <option value="Inactive">Inactive</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a status.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end form-content -->
                            </div>
                            <!-- end form-box -->
                        </div>
                        <!-- end col-lg-12 -->
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="btn-box pt-3">
                            <button type="submit" class="theme-btn">
                                Submit Listing <i class="la la-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </div>
                    <!-- end row -->
                </form>
                <div class="border-top mt-5"></div>
                <!-- end container-fluid -->
            </div>
            <!-- end dashboard-main-content -->
        </div>
    </div>
</template>

<script setup>
import axios from 'axios';
import { useRouter } from 'vue-router';

const router = useRouter();

const form = {
    name: '',
    description: '',
    landmark: '',
    status: 'Active'
};

let errorMessage = ''; // Initialize error message variable

const submitForm = async () => {
    try {
        const response = await axios.post('/api/admin/destinations', form);

        if (response.data.success) {
            // Redirect to /admin/destinations upon successful submission
            router.push({ path: '/admin/destinations' });
        }

        resetForm();
    } catch (error) {
        if (error.response && error.response.status === 422) {
            // Handle validation errors
            const errors = error.response.data.errors;
            console.error('Validation errors:', errors);

            // Construct the error message
            errorMessage = Object.values(errors).flat().join('<br>');

        } else {
            console.error('Error creating destination:', error);
            // Handle other types of errors (network, server, etc.)
        }
    }
};

const resetForm = () => {
    form.name = '';
    form.description = '';
    form.landmark = '';
    form.status = 'Active'; // Reset status to default
    errorMessage = ''; // Clear error message
};
</script>

<style scoped>
/* Add your custom styles here */
</style>
