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
                                <li>Destinations</li>
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
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="form-title-wrap d-flex justify-content-between align-items-center">
                                <div>
                                    <h3 class="title">Destinations List</h3>
                                </div>
                                <router-link to="/admin/destinations/create" type="submit" class="theme-btn">
                                    Add Destination <i class="la la-arrow-right ms-1"></i>
                                </router-link>
                            </div>
                            <div class="form-content">
                                <div class="col-lg-4 responsive-column">
                                    <div class="input-box">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="text" placeholder="Search..." v-model="searchValue">
                                        </div>
                                    </div>
                                </div>

                                <EasyDataTable
                                    :headers="headers"
                                    :items="items"
                                    :search-field="searchField"
                                    :search-value="searchValue"
                                >
                                    <template #item-details="item">
                                        <a @click.prevent="viewDetails(item)" href="#" class="theme-btn theme-btn-small me-2" data-bs-toggle="tooltip" data-placement="top" aria-label="View details" data-bs-original-title="View details"><i class="la la-eye"></i></a>
                                    </template>
                                </EasyDataTable>
                            </div>
                        </div>
                        <!-- end form-box -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <div class="border-top mt-5"></div>
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="copy-right padding-top-30px">
                            <p class="copy__desc">
                                © Copyright Trizen <span id="get-year">2024</span>. Made
                                with <span class="la la-heart"></span> by
                                <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                            </p>
                        </div>
                        <!-- end copy-right -->
                    </div>
                    <!-- end col-lg-7 -->
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
                        <!-- end copy-right-content -->
                    </div>
                    <!-- end col-lg-5 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end dashboard-main-content -->
    </div>
</template>

<script lang="ts" setup>
import { ref } from "vue";
import type { Header, Item } from "vue3-easy-data-table";

const searchField = ["name", "description", "landmark"];
const searchValue = ref('');

const headers: Header[] = [
    { text: "NAME", value: "name" },
    { text: "DESCRIPTION", value: "description"},
    { text: "LANDMARK", value: "landmark"},
    { text: "STATUS", value: "status", sortable: true},
    { text: "DETAILS", value: "details"},
];

const items: Item[] = [
    { "name": "Eiffel Tower", "description": "Famous landmark in Paris", "landmark": "Eiffel Tower", "status": "Open"},
    { "name": "Statue of Liberty", "description": "Iconic statue in New York", "landmark": "Statue of Liberty", "status": "Open"},
    { "name": "Great Wall of China", "description": "Ancient wall in China", "landmark": "Great Wall", "status": "Open"},
    { "name": "Sydney Opera House", "description": "Famous opera house in Sydney", "landmark": "Opera House", "status": "Open"},
];

const viewDetails = (item: Item) => {
    alert(`Viewing details for: ${item.name}`);
};
</script>

<style scoped>
button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
}
button:hover {
    background-color: #0056b3;
}
</style>
