<template>
    <!-- ================================
    START HERO-WRAPPER AREA
    ================================= -->
    <section class="hero-wrapper hero-wrapper6">
        <div class="hero-box hero-bg-6">
            <div class="container">
                <div class="row" style="height:300px">
                    <div class="col-lg-12">
                        <div class="hero-content">
                            <div class="section-heading">
                                <h2
                                    class="sec__title cd-headline slide d-flex align-items-center"
                                >
                                    It's the Time to
                                    <span class="cd-words-wrapper ps-2">
                      <b class="is-visible">discover</b>
                      <b>fly far</b>
                      <b>explore</b>
                      <b>travel</b>
                      <b>meet</b>
                      <b>have fun</b>
                      <b>run away</b>
                      <b>rejuvenate</b>
                      <b>live</b>
                      <b>relax</b>
                      <b>enjoy life</b>
                    </span>
                                </h2>
                            </div>
                        </div>
                        <!-- end hero-content -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content text-center">
                            <div class="section-heading">
                                <h2 class="sec__title text-white">
                                    Find your dream flight with the world's <br />
                                    largest travel company
                                </h2>
                            </div>
                        </div>
                        <!-- end breadcrumb-content -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
            </div>
            <!-- end container -->
            <!--                    <svg-->
            <!--                        class="hero-svg"-->
            <!--                        xmlns="http://www.w3.org/2000/svg"-->
            <!--                        viewBox="0 0 1000 100"-->
            <!--                        preserveAspectRatio="none"-->
            <!--                    >-->
            <!--                        <path d="M761.9,40.6L643.1,24L333.9,93.8L0.1,1H0v99h1000V1"></path>-->
            <!--                    </svg>-->
        </div>
    </section>
    <!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
    ================================= -->

    <!-- ================================
    START INFO AREA
    ================================= -->
    <section class="info-area info-bg padding-top-90px padding-bottom-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Search for flight now</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-fields-container">
                        <div class="tab-content" id="myTabContent3">
                            <div class="tab-pane fade show active" id="one-way" role="tabpanel" aria-labelledby="one-way-tab">
                                <div class="contact-form-action">
                                    <form @submit.prevent="searchFlights" class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Flight Type</label>
                                                <div class="form-group">
                                                    <select v-model="searchParams.flightType" class="form-select" style="height: 50px;">
                                                        <option value="">Select</option>
                                                        <option value="One Way">One Way</option>
                                                        <option value="Round Trip">Round Trip</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please provide a flight type name.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-box">
                                                <label class="label-text">Destination</label>
                                                <div class="form-group">
                                                    <select v-model="searchParams.destination" class="form-select" style="height: 50px;">
                                                        <option value="">Select</option>
                                                        <option v-for="destination in destinations" :key="destination.id" :value="destination.name">{{ destination.name }}</option>
                                                    </select>
                                                    <div class="invalid-feedback">Please provide a flight type name.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 pe-0">
                                            <div class="input-box">
                                                <label class="label-text">Departure</label>
                                                <div class="form-group">
                                                    <span class="la la-clock form-icon"></span>
                                                    <input v-model="searchParams.departure" class="form-control" name="departure" type="datetime-local" placeholder="departure time">
                                                    <div class="invalid-feedback">Please provide the departure time.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 pe-0">
                                            <div class="input-box">
                                                <label class="label-text">Expected Arrival</label>
                                                <div class="form-group">
                                                    <span class="la la-clock form-icon"></span>
                                                    <input v-model="searchParams.arrival" class="form-control" name="arrival" type="datetime-local" placeholder="arrival time">
                                                    <div class="invalid-feedback">Please provide the expected arrival time.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 pe-0">
                                            <div class="input-box">
                                                <label class="label-text">Travel Class</label>
                                                <div class="form-group select2-container-wrapper select-contain select-contain-shadow w-auto">
                                                    <select v-model="searchParams.travelClass" class="form-select"  name="name" style="height: 50px">
                                                        <option value="">Select</option>
                                                        <option value="First Class">First Class</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Economy">Economy</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <button type="submit" class="theme-btn w-100 text-center margin-top-20px" v-if="!is_searching">Search Now</button>
                                            <button type="button" @click.prevent="stopSearching" class="theme-btn w-100 text-center margin-top-20px" v-if="is_searching">Stop Searching</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info-area -->
    <!-- ================================
    END INFO AREA
    ================================= -->

    <div class="section-block"></div>

    <!-- ================================
    START DESTINATION AREA
    ================================= -->
    <section class="destination-area padding-top-100px padding-bottom-80px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title" v-if="!is_searching">Featured Flight Deals</h2>
                        <h2 class="sec__title" v-if="is_searching">{{ flights.length }} Flight results</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-4 responsive-column" v-for="flight in flights" :key="flight.id">
                    <div class="card-item flight-card">
                        <div class="card-img">
                            <a href="flight-single.html" class="d-block">
                                <img src="/trizen-demo/html/images/img16.jpg" alt="destination-img" v-if="!flight.destination.media_url">
                                <img :src="flight.destination.media_url" alt="destination-img" v-if="flight.destination.media_url">
                                <span class="badge">{{flight.destination.name}}</span>

                                <span class="badge badge-ribbon" v-if="flight.discount > 0">Save {{flight.discount}}%</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">
                                <a href="#">Nairobi to {{flight.destination.name}}</a>
                            </h3>
                            <p class="card-meta">{{ flight.flight_type }} Flight</p>
                            <div
                                class="card-price d-flex align-items-center justify-content-between"
                            >
                                <p>
                                    <span class="price__from">From</span>
                                    <span class="price__num">KES {{ flight.current_price }}</span>
                                    <span class="price__num before-price color-text-3"
                                          v-if="flight.discount > 0">KES {{ flight.destination_class.price }}</span
                                    >
                                </p>
                                <router-link :to="`/flights/${flight.id}/details`" class="btn-text"
                                >Read details<i class="la la-angle-right"></i
                                ></router-link>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
    ================================= -->

    <!-- ================================
    START DESTINATION AREA
    ================================= -->
    <section
        class="destination-area position-relative section-bg padding-top-100px padding-bottom-140px"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="sec__title">Top Destinations</h2>
                    </div>
                    <!-- end section-heading -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row padding-top-60px">
                <div class="col-lg-4 responsive-column" v-for="destination in destinations">
                    <div class="card-item flight-card">
                        <div class="card-img">
                            <a href="#" class="d-block">
                                <img src="/trizen-demo/html/images/img18.jpg" alt="destination-img" v-if="!destination.media_url">
                                <img :src="destination.media_url" alt="destination-img" v-if="destination.media_url">
                                <span class="badge">{{destination.name}}</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="#">{{ destination.landmark }}</a></h3>
                            <div class="card-price d-flex align-items-center justify-content-between">
                                <p>
                                    <span class="price__num">{{ destination.flights.length }} Trips</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end card-item -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
            <path
                d="M-103.55,167.27 C150.39,-132.72 134.59,237.33 517.77,30.09 L500.00,150.00 L0.00,150.00 Z"
            ></path>
        </svg>
    </section>
    <!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
    ================================= -->
</template>
<script setup lang="ts">
import axios from 'axios';
import { ref, onMounted } from 'vue';

const destinations = ref([]);
const flights = ref([]);
const is_searching = ref(false);
const searchParams = ref({
    flightType: '',
    destination: '',
    departure: '',
    arrival: '',
    travelClass: ''
});
onMounted(async () => {
    try {
        const response = await axios.get('/api/guest/destinations');
        const response1 = await axios.get('/api/guest/active_flights');
        destinations.value = response.data.destinations;
        flights.value = response1.data.flights;
    } catch (error) {
        console.error('Error fetching destinations:', error);
    }
});

const searchFlights = async () => {
    is_searching.value = true;
    try {
        const response = await axios.get('/api/guest/search_flights', {
            params: searchParams.value
        });
        flights.value = response.data.flights;
    } catch (error) {
        console.error('Error searching flights:', error);
    }
};

const stopSearching = async() => {
    is_searching.value = false;
    searchParams.value.flightType = '';
    searchParams.value.destination = '';
    searchParams.value.departure = '';
    searchParams.value.arrival = '';
    searchParams.value.travelClass = '';

    try {
        const response = await axios.get('/api/guest/destinations');
        const response1 = await axios.get('/api/guest/active_flights');
        destinations.value = response.data.destinations;
        flights.value = response1.data.flights;
    } catch (error) {
        console.error('Error fetching destinations:', error);
    }

}
</script>
