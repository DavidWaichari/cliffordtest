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
                    </div>
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-end">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white">Home</a></li>
                                <li>Dashboard</li>
                                <li>Destinations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dashboard-main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="title">Destinations List</h3>
                                    <p class="font-size-14">Showing 1 to 10 of 20 entries</p>
                                </div>
                                <router-link to="/admin/destinations/create" type="submit" class="theme-btn">
                                    Add Destination <i class="la la-arrow-right ms-1"></i>
                                </router-link>
                            </div>
                            <div class="form-content">
                                <div class="table-form table-responsive">
                                    <vue3-datatable
                                        :rows="rows"
                                        :columns="cols"
                                        :loading="loading"
                                        :totalRows="total_rows"
                                        :isServerMode="true"
                                        :pageSize="params.pagesize"
                                        rowClass="cursor-pointer"
                                        @change="changeServer"
                                        @rowClick="rowClick"
                                    >
                                        <template #id="data">
                                            <strong>#{{ data.value.id }}</strong>
                                        </template>
                                    </vue3-datatable>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                        <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link page-link-nav" href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="border-top mt-5"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="copy-right padding-top-30px">
                            <p class="copy__desc">
                                © Copyright Trizen <span id="get-year">2024</span> . Made
                                with <span class="la la-heart"></span> by
                                <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="copy-right-content text-end padding-top-30px">
                            <ul class="social-profile">
                                <li>
                                    <a href="#"><i class="lab la-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="lab la-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref, onMounted, reactive } from 'vue';
import Vue3Datatable from '@bhplugin/vue3-datatable';
import '@bhplugin/vue3-datatable/dist/style.css';

const loading = ref(true);
const total_rows = ref(0);

const params = reactive({ current_page: 1, pagesize: 10 });

const rows = ref([
    {
        id: 1,
        name: 'Central Park',
        description: 'A large public park in New York City.',
        landmark: 'Statue of Liberty',
        status: 'Open'
    },
    {
        id: 2,
        name: 'Eiffel Tower',
        description: 'An iconic iron lattice tower in Paris.',
        landmark: 'Louvre Museum',
        status: 'Open'
    },
    {
        id: 3,
        name: 'Great Wall of China',
        description: 'A series of fortifications made of stone.',
        landmark: 'Beijing',
        status: 'Open'
    },
    {
        id: 4,
        name: 'Pyramids of Giza',
        description: 'Ancient pyramid structures in Egypt.',
        landmark: 'Cairo',
        status: 'Open'
    },
    {
        id: 5,
        name: 'Sydney Opera House',
        description: 'A multi-venue performing arts centre in Sydney.',
        landmark: 'Sydney Harbour Bridge',
        status: 'Open'
    }
]);

const cols = ref([
    { field: 'id', title: 'ID', isUnique: true, type: 'number' },
    { field: 'name', title: 'Name' },
    { field: 'description', title: 'Description' },
    { field: 'landmark', title: 'Landmark' },
    { field: 'status', title: 'Status' }
]) || [];

onMounted(() => {
    total_rows.value = rows.value.length;
    loading.value = false;
});

const changeServer = (data: any) => {
    params.current_page = data.current_page;
    params.pagesize = data.pagesize;

    // No actual data fetching, but you can simulate pagination or other server-side logic here if needed
};

const rowClick = (place: any) => {
    alert('Place Details \n' + place.id + ', ' + place.name + ', ' + place.description + ', ' + place.landmark + ', ' + place.status);
};
</script>
