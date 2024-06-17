<template>
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    Destination Classes
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
                                <li>Edit Destination Class</li>
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
                                        <i class="la la-gear me-2 text-gray"></i>Edit destination class information for your flights
                                    </h3>
                                </div>
                                <!-- form-title-wrap -->
                                <div class="form-content contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Status Select -->
                                            <div class="input-box">
                                                <label class="label-text">Destination class name</label>
                                                <div class="form-group w-100">
                                                    <select class="form-select" v-model="form.destination_id" required name="destination_id">
                                                        <option :value="destination.id" v-for="destination in destinations" :key="destination.id">
                                                            {{ destination.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a destination class.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Place Name Input -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Name
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="Destination class name" v-model="form.name" required name="name">
                                                    <div class="invalid-feedback">Please provide a destination class name.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                <Footer></Footer>
                <!-- end row -->
            </div>
            <!-- end dashboard-main-content -->
        </div>
    </div>
</template>


<script setup lang="ts">
import axios from 'axios';
import { useRouter, useRoute } from 'vue-router';
import { onMounted, ref } from 'vue';

const route = useRoute();
const id = route.params.id;
const router = useRouter();

const form = ref({
    name: '',
    destination_id: '',
    price: '',
    status: 'Active'
});

const destinations = ref([]);

onMounted(async () => {
    try {
        const response = await axios.get('/api/admin/destinations');
        destinations.value = response.data.destinations; // Update reactive reference

        const destinationClassResponse = await axios.get(`/api/admin/destination_classes/${id}`);
        Object.assign(form.value, destinationClassResponse.data.destinationClass);
    } catch (error) {
        console.error('Error fetching data:', error);
    }
});

const submitForm = async () => {
    try {
        const response = await axios.put(`/api/admin/destination_classes/${id}`, form.value);

        if (response.data.success) {
            router.push({ path: '/admin/destination_classes' });
        }
    } catch (error) {
        console.error('Error updating destination class:', error);
    }
};
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
