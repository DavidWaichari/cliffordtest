<template>
    <div class="dashboard-content-wrap">
        <div class="dashboard-bread dashboard--bread dashboard-bread-2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white">
                                    Flights
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
                                <li>Edit Flight</li>
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
                                        <i class="la la-gear me-2 text-gray"></i>Edit flight
                                    </h3>
                                </div>
                                <!-- form-title-wrap -->
                                <div class="form-content contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Status Select -->
                                            <div class="input-box">
                                                <label class="label-text">Destination</label>
                                                <div class="form-group w-100">
                                                    <select class="form-select" v-model="form.destination_id" required name="destination_id" @change="fetchClasses">
                                                        <option :value="destination.id" v-for="destination in destinations">
                                                            {{ destination.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a destination class.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Status Select -->
                                            <div class="input-box">
                                                <label class="label-text">Flight Class</label>
                                                <div class="form-group w-100">
                                                    <select class="form-select" v-model="form.destination_class_id" required name="destination_class_id" @change="fetchFlightClass">
                                                        <option :value="destclass.id" v-for="destclass in destination_classes">
                                                            {{ destclass.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select a flight class.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Status Select -->
                                            <div class="input-box">
                                                <label class="label-text">Airline</label>
                                                <div class="form-group w-100">
                                                    <select class="form-select" v-model="form.airline_id" required name="airline_id">
                                                        <option :value="airline.id" v-for="airline in airlines">
                                                            {{ airline.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please select airline.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Place Name Input -->
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Flight Type
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <select class="form-select" v-model="form.flight_type" required name="flight_type">
                                                        <option value="One Way">One Way</option>
                                                        <option value="Round Trip">Round Trip</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please provide a flight type name.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    No of passengers
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-money form-icon"></span>
                                                    <input class="form-control" name="no_of_passengers" type="number" min="0" step="1" placeholder="No of passengers" v-model="form.no_of_passengers" required>
                                                    <div class="invalid-feedback">Please provide a the number of passengers.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
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
                                                <label class="label-text">
                                                    Departure
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-clock form-icon"></span>
                                                    <input class="form-control" name="departure" type="datetime-local"  placeholder="departure time" v-model="form.departure" required>
                                                    <div class="invalid-feedback">Please provide the departure time.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">
                                                    Expected Arrival
                                                </label>
                                                <div class="form-group">
                                                    <span class="la la-clock form-icon"></span>
                                                    <input class="form-control" name="arrival" type="datetime-local"  placeholder="arrival time" v-model="form.arrival" required>
                                                    <div class="invalid-feedback">Please provide the expected arrival time.</div>
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
import {useRoute, useRouter} from 'vue-router';
import {onMounted, ref} from 'vue';
import Footer from '../shared/Footer.vue'

const router = useRouter();
const route = useRoute();

const form = ref({
    destination_id: '',
    destination_class_id: '',
    airline_id: '',
    flight_type: '',
    no_of_passengers:'',
    current_price:'',
    departure:'',
    arrival:'',
    status: 'Active'
});

const destinations = ref([]);
const destination_classes = ref([]);
const airlines = ref([]);
const selected_destination = ref({})

onMounted(async () => {
    try {
        const dest = await axios.get('/api/admin/destinations');
        const air = await axios.get('/api/admin/airlines');
        const flightres = await axios.get('/api/admin/flights/'+route.params.id)


        form.value = flightres.data.flight;
        destinations.value = dest.data.destinations;
        airlines.value = air.data.airlines;
    } catch (error) {
        console.error('Error fetching destinations:', error);
    }
});

const fetchClasses = async () =>{
    const response = await axios.get('/api/admin/destinations/'+ form.value.destination_id );
    selected_destination.value = response.data.destination;
    destination_classes.value = selected_destination.value.destclasses;
}

const fetchFlightClass = async() =>{
    const response = await axios.get('/api/admin/destination_classes/'+ form.value.destination_class_id );
    form.value.current_price = response.data.destination_class.price;
}

const submitForm = async () => {
    try {
        const response = await axios.put('/api/admin/flights/'+route.params.id, form.value, {
        });

        if (response.data.success) {
            router.push({ path: '/admin/flights' });
        }

        resetForm();
    } catch (error) {
        console.error('Error creating flight:', error);
    }
};

const resetForm = () => {
    form.value.name = '',
        form.value.destination_id= '',
        form.value.destination_class_id= '',
        form.value.airline_id= '',
        form.value.flight_type= '',
        form.value.no_of_passengers=''
    form.value.current_price='',
        form.value. status='Active'
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
