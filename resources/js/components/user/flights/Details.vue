<template>
    <!-- ================================
      START BREADCRUMB TOP BAR
  ================================= -->
    <section class="breadcrumb-top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-list breadcrumb-top-list">
                        <ul class="list-items bg-transparent radius-none p-0">
                            <li><a href="index.html">Home</a></li>
                            <li>Fligt</li>
                            <li>Details</li>
                        </ul>
                    </div>
                    <!-- end breadcrumb-list -->
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end breadcrumb-top-bar -->
    <!-- ================================
    END BREADCRUMB TOP BAR
================================= -->

    <!-- ================================
    START BREADCRUMB AREA
================================= -->
    <section class="breadcrumb-area bread-bg-6 py-0">
        <div class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-btn">

                            <a
                                class="d-none"
                                data-fancybox="gallery"
                                data-src="images/destination-img2.jpg"
                                data-caption="Showing image - 02"
                                data-speed="700"
                            ></a>
                            <a
                                class="d-none"
                                data-fancybox="gallery"
                                data-src="images/destination-img3.jpg"
                                data-caption="Showing image - 03"
                                data-speed="700"
                            ></a>
                            <a
                                class="d-none"
                                data-fancybox="gallery"
                                data-src="images/destination-img4.jpg"
                                data-caption="Showing image - 04"
                                data-speed="700"
                            ></a>
                        </div>
                        <!-- end breadcrumb-btn -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end breadcrumb-wrap -->
    </section>
    <!-- end breadcrumb-area -->
    <!-- ================================
    END BREADCRUMB AREA
================================= -->

    <!-- ================================
    START TOUR DETAIL AREA
================================= -->
    <section class="tour-detail-area padding-bottom-90px">
        <!-- end single-content-navbar-wrap -->
        <div class="single-content-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="single-content-wrap padding-top-60px">
                            <div id="description" class="page-scroll">
                                <div class="single-content-item pb-4">
                                    <h3 class="title font-size-26">Nairobi to {{ flight.destination.name }}</h3>
                                    <div class="d-flex align-items-center pt-2">
                                        <p class="me-2">{{ flight.flight_type }}</p>
                                    </div>
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="single-content-item py-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="single-feature-titles text-center mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">
                                                    Flight Take off
                                                </h3>
                                                <span class="font-size-13">{{ flight.formatted_dates['departure'] }}</span>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="single-feature-titles text-center mb-3">
                                                <i class="la la-clock-o text-color font-size-22"></i>
                                                <span class="font-size-13 mt-n2">{{ flight.formatted_dates['duration'] }}</span>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 col-sm-4">
                                            <div class="single-feature-titles text-center mb-3">
                                                <h3 class="title font-size-15 font-weight-medium">
                                                    Flight Landing
                                                </h3>
                                                <span class="font-size-13">{{ flight.formatted_dates['arrival'] }}</span>
                                            </div>
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div
                                                class="single-feature-titles text-center border-top border-bottom py-3 mb-4"
                                            >
                                                <h3 class="title font-size-15 font-weight-medium">
                                                    Total flight time:<span
                                                    class="font-size-13 d-inline-block ms-1 text-gray"
                                                >{{ flight.formatted_dates['duration'] }}</span
                                                >
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- end col-lg-12 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div
                                                class="single-tour-feature d-flex align-items-center mb-3"
                                            >
                                                <div
                                                    class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3"
                                                >
                                                    <i class="la la-plane"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Airline
                                                    </h3>
                                                    <span class="font-size-13">{{ flight.airline.name }}</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                        <div class="col-lg-4 responsive-column">
                                            <div
                                                class="single-tour-feature d-flex align-items-center mb-3"
                                            >
                                                <div
                                                    class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3"
                                                >
                                                    <i class="la la-user"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Flight Class
                                                    </h3>
                                                    <span class="font-size-13">{{ flight.destination_class.name }}</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <div class="col-lg-4 responsive-column">
                                            <div
                                                class="single-tour-feature d-flex align-items-center mb-3"
                                            >
                                                <div
                                                    class="single-feature-icon icon-element ms-0 flex-shrink-0 me-3"
                                                >
                                                    <i class="la la-building"></i>
                                                </div>
                                                <div class="single-feature-titles">
                                                    <h3 class="title font-size-15 font-weight-medium">
                                                        Base Fare
                                                    </h3>
                                                    <span class="font-size-13">KES {{ flight.current_price }}</span>
                                                </div>
                                            </div>
                                            <!-- end single-tour-feature -->
                                        </div>
                                        <!-- end col-lg-4 -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end single-content-item -->
                                <div class="section-block"></div>
                                <div class="section-block"></div>
                            </div>
                        </div>
                        <!-- end single-content-wrap -->
                    </div>
                    <!-- end col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar single-content-sidebar mb-0">
                            <div class="sidebar-widget single-content-widget">
                                <div class="sidebar-widget-item">
                                    <div class="sidebar-book-title-wrap mb-3">
                                        <h3>Book Now</h3>
                                        <p>
                        <span class="text-form">Total Due</span
                        ><span class="text-value ms-2 me-1">KES {{ no_of_tickets * flight.current_price }}</span>
                                        </p>
                                    </div>
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="sidebar-widget-item">
                                    <div class="contact-form-action">
                                        <form action="#">
                                            <div class="input-box">
                                                <label class="label-text">Date</label>
                                                <div class="form-group">
                                                    <span class="la la-user form-icon"></span>
                                                    <input
                                                        class="form-control"
                                                        type="number"
                                                        min="1"
                                                        placeholder="Enter the number of tickets"
                                                        v-model="no_of_tickets"
                                                    />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- end sidebar-widget-item -->
                                <div class="btn-box pt-2">
                                    <button @click.prevent="bookNow"
                                        class="theme-btn text-center w-100 mb-2"
                                    ><i class="la la-shopping-cart me-2 font-size-18"></i>Book
                                        Now</button
                                    >
                                    <div
                                        class="d-flex align-items-center justify-content-between pt-2"
                                    >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end sidebar -->
                    </div>
                    <!-- end col-lg-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end single-content-box -->
    </section>
    <!-- end tour-detail-area -->
    <!-- ================================
    END TOUR DETAIL AREA
================================= -->

    <div class="section-block"></div>
</template>
<script setup>
import axios from 'axios';
import { ref, onMounted } from 'vue';
import {useRoute} from "vue-router";

const route = useRoute();

const flight = ref(
    {
        "id": 2,
        "name": null,
        "destination_id": 1,
        "destination_class_id": 1,
        "airline_id": 1,
        "flight_type": "One Way",
        "no_of_passengers": 1,
        "current_price": "400.00",
        "departure": "2024-06-17T19:14:00.000000Z",
        "arrival": "2024-06-18T05:15:00.000000Z",
        "status": "Active",
        "extras": null,
        "created_at": "2024-06-17T16:14:43.000000Z",
        "updated_at": "2024-06-17T16:14:43.000000Z",
        "deleted_at": null,
        "discount": 20,
        "formatted_dates": {
            "departure": "17 Jun 2024, 7:14 pm",
            "arrival": "18 Jun 2024, 5:15 am"
        },
        "destination": {
            "id": 1,
            "name": "Maasai Mara",
            "description": "Famous for the Great Migration",
            "landmark": "Maasai Mara National Reserve",
            "price": "0.00",
            "current_price": "0.00",
            "status": "Active",
            "extras": null,
            "created_at": "2024-06-17T14:38:31.000000Z",
            "updated_at": "2024-06-17T14:38:31.000000Z",
            "deleted_at": null,
            "media_url": null,
            "media": [

            ]
        },
        "destination_class": {
            "id": 1,
            "destination_id": 1,
            "name": "First Class",
            "price": "500.00",
            "status": "Active",
            "extras": null,
            "created_at": "2024-06-17T14:39:25.000000Z",
            "updated_at": "2024-06-17T14:39:25.000000Z",
            "deleted_at": null
        },
        "airline": {
            "id": 1,
            "name": "Airline",
            "description": "Description",
            "capacity": 500,
            "status": "Active",
            "extras": null,
            "created_at": "2024-06-17T14:39:01.000000Z",
            "updated_at": "2024-06-17T14:39:01.000000Z"
        }
    }
);

const no_of_tickets = ref(0);

const bookNow = () =>{
    alert('yes bana');
}
onMounted(async () => {
    try {
        const response = await axios.get('/api/guest/active_flights/'+route.params.id);
        flight.value = response.data.flight;
    } catch (error) {
        console.error('Error fetching flight:', error);
    }
});
</script>
