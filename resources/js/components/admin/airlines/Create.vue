<template>
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    Airlines
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
                                <li>Add Airline</li>
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
                                        <i class="la la-gear me-2 text-gray"></i>Add airline information for your flights
                                    </h3>
                                </div>
                                <!-- form-title-wrap -->
                                <div class="form-content contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Place Name Input -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Airline Name
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" placeholder="Airline name" v-model="form.name" required name="name">
                                                    <div class="invalid-feedback">Please provide a an airline name.</div>
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
                                                    <textarea class="form-control" name="description" placeholder="Airline description" v-model="form.description" required></textarea>
                                                    <div class="invalid-feedback">Please provide the airline description.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Capacity
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-money form-icon"></span>
                                                    <input class="form-control" name="capacity" type="number" min="0" step="1" placeholder="capacity" v-model="form.capacity" required>
                                                    <div class="invalid-feedback">Please provide the capacity.</div>
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
import { useRouter } from 'vue-router';
import { ref } from 'vue';

const router = useRouter();

const form = ref({
    name: '',
    description: '',
    capacity:'',
    status: 'Active'
});



const submitForm = async () => {
    try {
        const response = await axios.post('/api/admin/airlines', form.value);

        if (response.data.success) {
            router.push({ path: '/admin/airlines' });
        }

        resetForm();
    } catch (error) {
        console.error('Error creating destination:', error);
    }
};

const resetForm = () => {
    form.value.name = '';
    form.value.description = '';
    form.value.capacity = '';
    form.value.status = 'Active';
};
</script>


<style scoped>
.form-select{
    height:50px;
    line-height: inherit;
    padding: 10px 20px 10px 40px;
    font-size: 16px;
    color: #0d233e;
}
</style>
