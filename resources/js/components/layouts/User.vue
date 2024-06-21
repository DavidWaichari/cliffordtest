<template>
    <!-- ================================
           START HEADER AREA
   ================================= -->
    <header class="header-area">
        <div class="header-top-bar padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-left">
                                <ul class="list-items">
                                    <li>
                                        <a href="#"><i class="la la-phone me-1"></i>+254708473015</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="la la-envelope me-1"></i>info@davetravels.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div class="header-right d-flex align-items-center justify-content-end">
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select">
                                            <option data-content='<span class="flag-icon flag-icon-us me-1"></span> English(US)' selected>English US</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select">
                                            <option value="24">USD</option>
                                            <option value="28" selected>KES</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <a v-if="isAuthenticated" href="#" class="theme-btn theme-btn-small" @click.prevent="logout">Logout</a>
                                    <div v-else>
                                        <router-link to="/register" class="theme-btn theme-btn-small me-1">Sign Up</router-link>
                                        <router-link to="/login" class="theme-btn theme-btn-small">Login</router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-menu-wrapper padding-right-100px padding-left-100px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                            <div class="logo">
                                <a href="/" style="font-weight:bolder; font-size:30px;color:#e20177; font-family:'Red Serif', serif;">DaveTravels</a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div>
                            </div>
                            <div class="main-menu-content">
                                <nav>
                                    <ul>
                                        <li>
                                            <router-link to="/" style="background-color: white">Home</router-link>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: white">Destinations</a>
                                        </li>
                                        <li>
                                            <router-link to="/admin" style="background-color: white">Admin</router-link>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="nav-btn">
                                <a href="become-local-expert.html" class="theme-btn">Flight Deals</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <router-view></router-view>
    <div class="section-block"></div>
    <!-- ================================
         END HEADER AREA
    ================================= -->
    <!-- ================================
       START FOOTER AREA
    ================================= -->
    <section class="footer-area section-bg padding-top-100px padding-bottom-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="index.html" class="foot__logo"><img src="/trizen-demo/html/images/logo.png" alt="logo"/></a>
                        </div>
                        <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                        <ul class="list-items pt-3">
                            <li>3015 Grand Ave, Coconut Grove,<br />Cerrick Way, FL 12345</li>
                            <li>+123-456-789</li>
                            <li><a href="#">trizen@yourwebsite.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                        <ul class="list-items list--items">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="blog-grid.html">News</a></li>
                            <li><a href="contact.html">Support</a></li>
                            <li><a href="#">Advertising</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Services</h4>
                        <ul class="list-items list--items">
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Trizen.com Rewards</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">List My Hotel</a></li>
                            <li><a href="#">All Hotels</a></li>
                            <li><a href="#">TV Ads</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                        <ul class="list-items list--items">
                            <li><a href="#">USA Vacation Packages</a></li>
                            <li><a href="#">USA Flights</a></li>
                            <li><a href="#">USA Hotels</a></li>
                            <li><a href="#">USA Car Hire</a></li>
                            <li><a href="#">Create an Account</a></li>
                            <li><a href="#">Trizen Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="term-box footer-item">
                        <ul class="list-items list--items d-flex align-items-center">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Help Center</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-social-box text-end">
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
            <div class="section-block mt-4"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="copy-right padding-top-30px">
                            <p class="copy__desc">
                                &copy; Copyright Trizen <span id="get-year"></span>. Made with
                                <span class="la la-heart"></span> by
                                <a href="#">TechyDevs.</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px">
                            <img src="/trizen-demo/html/images/payment-img.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================================
        END FOOTER AREA
    ================================= -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
</template>

<script>
import { ref, onMounted, watch } from 'vue';
import { useStore } from 'vuex';
import { useRouter } from 'vue-router';

export default {
    setup() {
        const store = useStore();
        const router = useRouter();
        const isAuthenticated = ref(false); // Initialize with false

        // Fetch user authentication status from Vuex store
        const checkAuthStatus = () => {
            isAuthenticated.value = store.getters.isAuthenticated;
        };

        // Call the checkAuthStatus method on component mount
        onMounted(() => {
            checkAuthStatus();
        });

        // Watch for changes in isAuthenticated and update header accordingly
        watch(() => store.getters.isAuthenticated, () => {
            checkAuthStatus();
        });

        // Handle logout action
        const logout = async () => {
            await store.dispatch('logout');
            router.push('/login');
        };

        return {
            isAuthenticated,
            logout
        };
    }
};
</script>
