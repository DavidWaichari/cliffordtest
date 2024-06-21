<template>
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">Booking</h2>
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
                                <li>Booking</li>
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
                            <div class="form-title-wrap">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3 class="title">Booking Results</h3>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-select p-2" aria-label="Select status" v-model="selectedFilter" @change="filterBookings">
                                                <option value="">Any status</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Cancelled">Cancelled</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-content pb-2">
                                <div v-for="booking in bookings" class="card-item flight-card card-item-list card-item--list">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h3 class="card-title">Nairobi to {{ booking.flight.destination.name }}</h3>
                                            <span class="badge text-bg-success ms-2" v-if="booking.status === 'Approved'">{{ booking.status }}</span>
                                            <span class="badge text-bg-warning ms-2" v-if="booking.status === 'Pending'">{{ booking.status }}</span>
                                            <span class="badge text-bg-danger ms-2" v-if="booking.status === 'Cancelled'">{{ booking.status }}</span>
                                        </div>
                                        <ul class="list-items list-items-2 pt-2 pb-3">
                                            <li><span>Departure:</span>{{ booking.flight.formatted_dates['departure'] }}</li>
                                            <li><span>Arrival:</span>{{ booking.flight.formatted_dates['arrival'] }}</li>
                                            <li><span>Booking details:</span>{{booking.no_of_tickets }} People</li>
                                            <li><span>Client:</span> {{ booking.user.name }}</li>
                                        </ul>
                                    </div>
                                    <div class="action-btns">
                                        <a href="#" class="theme-btn theme-btn-small me-2"><i class="la la-check-circle me-1"></i>Approve</a>
                                        <a href="#" class="theme-btn theme-btn-small"><i class="la la-times me-1"></i>Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end form-box -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <Footer></Footer>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end dashboard-main-content -->
    </div>
</template>
<script setup>
import Footer from "../shared/Footer.vue";
import {onMounted, ref} from "vue";
import axios from "axios";

const bookings = ref([]);
const selectedFilter = ref('')

onMounted(async()=> {
    const response  = await axios.get('/api/admin/bookings');
    bookings.value = response.data.bookings;
})

const filterBookings = async()  =>{
    const response  = await axios.get('/api/admin/bookings?filter='+selectedFilter.value);
    bookings.value = response.data.bookings;
}
</script>
