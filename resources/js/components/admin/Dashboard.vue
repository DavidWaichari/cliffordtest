   <template>
       <div class="dashboard-content-wrap">
           <div class="dashboard-bread dashboard-bread-2">
               <div class="container-fluid">
                   <div class="row align-items-center">
                       <div class="col-lg-6">
                           <div class="breadcrumb-content">
                               <div class="section-heading">
                                   <h2 class="sec__title font-size-30 text-white">
                                       Dashboard
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
                                   <li>Pages</li>
                                   <li>Dashboard</li>
                               </ul>
                           </div>
                           <!-- end breadcrumb-list -->
                       </div>
                       <!-- end col-lg-6 -->
                   </div>
                   <!-- end row -->
                   <div class="row mt-4">
                       <div class="col-lg-3 responsive-column-l">
                           <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                               <div class="d-flex pb-3 justify-content-between">
                                   <div class="info-content">
                                       <p class="info__desc">Bookings</p>
                                       <h4 class="info__title">{{ data.bookings }}</h4>
                                   </div>
                                   <!-- end info-content -->
                                   <div class="info-icon icon-element bg-4">
                                       <i class="la la-shopping-cart"></i>
                                   </div>
                                   <!-- end info-icon-->
                               </div>
                               <div class="section-block"></div>
                               <router-link
                                   to="/admin/bookings"
                                   class="d-flex align-items-center justify-content-between view-all"
                               >View All <i class="la la-angle-right"></i
                               ></router-link>
                           </div>
                       </div>
                       <!-- end col-lg-3 -->
                       <div class="col-lg-3 responsive-column-l">
                           <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                               <div class="d-flex pb-3 justify-content-between">
                                   <div class="info-content">
                                       <p class="info__desc">Flights</p>
                                       <h4 class="info__title">{{ data.flights }}</h4>
                                   </div>
                                   <!-- end info-content -->
                                   <div class="info-icon icon-element bg-3">
                                       <i class="la la-star"></i>
                                   </div>
                                   <!-- end info-icon-->
                               </div>
                               <div class="section-block"></div>
                               <router-link
                                   to="/admin/flights"
                                   class="d-flex align-items-center justify-content-between view-all"
                               >View All <i class="la la-angle-right"></i
                               ></router-link>
                           </div>
                       </div>
                       <!-- end col-lg-3 -->
                       <div class="col-lg-3 responsive-column-l">
                           <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                               <div class="d-flex pb-3 justify-content-between">
                                   <div class="info-content">
                                       <p class="info__desc">Destinations</p>
                                       <h4 class="info__title">{{ data.destinations }}</h4>
                                   </div>
                                   <!-- end info-content -->
                                   <div class="info-icon icon-element bg-2">
                                       <i class="la la-envelope"></i>
                                   </div>
                                   <!-- end info-icon-->
                               </div>
                               <div class="section-block"></div>
                               <router-link
                                   to="/admin/destinations"
                                   class="d-flex align-items-center justify-content-between view-all"
                               >View All <i class="la la-angle-right"></i
                               ></router-link>
                           </div>
                       </div>
                       <!-- end col-lg-3 -->
                       <div class="col-lg-3 responsive-column-l">
                           <div class="icon-box icon-layout-2 dashboard-icon-box pb-0">
                               <div class="d-flex pb-3 justify-content-between">
                                   <div class="info-content">
                                       <p class="info__desc">Airlines</p>
                                       <h4 class="info__title">{{ data.airlines }}</h4>
                                   </div>
                                   <!-- end info-content -->
                                   <div class="info-icon icon-element bg-1">
                                       <i class="la la-bookmark-o"></i>
                                   </div>
                                   <!-- end info-icon-->
                               </div>
                               <div class="section-block"></div>
                               <router-link
                                   to="/admin/airlines"
                                   class="d-flex align-items-center justify-content-between view-all"
                               >View All <i class="la la-angle-right"></i
                               ></router-link>
                           </div>
                       </div>
                       <!-- end col-lg-3 -->
                   </div>
                   <!-- end row -->
               </div>
           </div>
           <!-- end dashboard-bread -->
           <div class="dashboard-main-content">
               <div class="container-fluid">
                   <div class="border-top mt-4"></div>
                   <div class="row align-items-center mt-3">
                     <Footer></Footer>
                   </div>
                   <!-- end row -->
               </div>
               <!-- end container-fluid -->
           </div>
           <!-- end dashboard-main-content -->
       </div>
   </template>
   <script setup>
   import Footer from './shared/Footer.vue'
   import {onMounted, ref} from "vue";
   import axios from "axios";

   const data = ref([]);

   onMounted(async() => {
      const response  = await axios.get('/api/admin/dashboard');
       data.value = response.data.data
   });
   </script>
