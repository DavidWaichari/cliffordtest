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
                                        <a href="#"
                                        ><i class="la la-phone me-1"></i>+254708473015</a
                                        >
                                    </li>
                                    <li>
                                        <a href="#"
                                        ><i class="la la-envelope me-1"></i
                                        >info@davetravels.com</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-top-content">
                            <div
                                class="header-right d-flex align-items-center justify-content-end"
                            >
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select">
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-id me-1"></span> Bahasa Indonesia'-->
<!--                                            >-->
<!--                                                Bahasa Indonesia-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-de me-1"></span> Deutsch'-->
<!--                                            >-->
<!--                                                Deutsch-->
<!--                                            </option>-->
                                            <option
                                                data-content='<span class="flag-icon flag-icon-us me-1"></span> English(US)'
                                                selected
                                            >
                                                English US
                                            </option>
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-gb-eng me-1"></span> English(UK)'-->
<!--                                            >-->
<!--                                                English UK-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-ro me-1"></span> Romanian'-->
<!--                                            >-->
<!--                                                Romanian-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-es me-1"></span> Español'-->
<!--                                            >-->
<!--                                                Español-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-fr me-1"></span> Francais'-->
<!--                                            >-->
<!--                                                Francais-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-it me-1"></span> Italiano'-->
<!--                                            >-->
<!--                                                Italiano-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-pl me-1"></span> Polski'-->
<!--                                            >-->
<!--                                                Polski-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-pt me-1"></span> Portuguese'-->
<!--                                            >-->
<!--                                                Portuguese-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-tr me-1"></span> Turkish'-->
<!--                                            >-->
<!--                                                Turkish-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-ru me-1"></span> Russian'-->
<!--                                            >-->
<!--                                                Russian-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-jp me-1"></span> Japanese'-->
<!--                                            >-->
<!--                                                Japanese-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-cn me-1"></span> Mandarin'-->
<!--                                            >-->
<!--                                                Mandarin-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-tw me-1"></span> Mandarin Chinese'-->
<!--                                            >-->
<!--                                                Mandarin Chinese-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-kr me-1"></span> Korean'-->
<!--                                            >-->
<!--                                                Korean-->
<!--                                            </option>-->
<!--                                            <option-->
<!--                                                data-content='<span class="flag-icon flag-icon-in me-1"></span> Hindi'-->
<!--                                            >-->
<!--                                                Hindi-->
<!--                                            </option>-->
                                        </select>
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <div class="select-contain select--contain w-auto">
                                        <select class="select-contain-select">
<!--                                            <option value="1">AED</option>-->
<!--                                            <option value="2">AUD</option>-->
<!--                                            <option value="3">BRL</option>-->
<!--                                            <option value="4">CAD</option>-->
<!--                                            <option value="5">CHF</option>-->
<!--                                            <option value="6">CNY</option>-->
<!--                                            <option value="7">EUR</option>-->
<!--                                            <option value="8">GBP</option>-->
<!--                                            <option value="9">HKD</option>-->
<!--                                            <option value="10">IDR</option>-->
<!--                                            <option value="11">INR</option>-->
<!--                                            <option value="12">JPY</option>-->
<!--                                            <option value="13">KRW</option>-->
<!--                                            <option value="14">MYR</option>-->
<!--                                            <option value="15">NZD</option>-->
<!--                                            <option value="16">PHP</option>-->
<!--                                            <option value="17">PLN</option>-->
<!--                                            <option value="18">RUB</option>-->
<!--                                            <option value="19">SAR</option>-->
<!--                                            <option value="20">SGD</option>-->
<!--                                            <option value="21">THB</option>-->
<!--                                            <option value="22">TRY</option>-->
<!--                                            <option value="23">TWD</option>-->
                                            <option value="24" >USD</option>
<!--                                            <option value="25">VND</option>-->
<!--                                            <option value="26">MXN</option>-->
<!--                                            <option value="27">ARS</option>-->
<!--                                            <option value="28">INR</option>-->
                                            <option value="28" selected>KES</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="header-right-action">
                                    <a
                                        v-if="user_is_authenticated"
                                        href="#"
                                        class="theme-btn theme-btn-small"
                                        @click.prevent="logout"
                                    >Logout</a
                                    >
                                    <div v-else>
                                        <router-link
                                            to="/register"
                                            class="theme-btn theme-btn-small  me-1"
                                        >Sign Up</router-link
                                        >

                                        <router-link
                                            to="/login"
                                            class="theme-btn theme-btn-small"
                                        >Login</router-link
                                        >
                                    </div>

                                    <!--                                    <div class="select-contain select&#45;&#45;contain w-auto">-->
                                    <!--                                        <select class="select-contain-select" onchange="this.value === '24' && document.getElementById('logout-form').submit();">-->
                                    <!--                                            <option value="28" selected>David</option>-->
                                    <!--                                            <option value="24">Log out</option>-->
                                    <!--                                        </select>-->
                                    <!--                                    </div>-->
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
                            <a href="#" class="down-button"
                            ><i class="la la-angle-down"></i
                            ></a>
                            <div class="logo" >
                                <a href="/" style="font-weight:bolder; font-size:30px;color:#e20177; font-family:'Red Serif', serif;">
<!--                                    <img src="/trizen-demo/html/images/logo.png" alt="logo"/>-->
                                    DaveTravels
                                </a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div>
                                <!-- end menu-toggler -->
                            </div>
                            <!-- end logo -->
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
                                            <a href="#" style="background-color: white">My Bookings</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end main-menu-content -->
                            <div class="nav-btn">
                                <a href="become-local-expert.html" class="theme-btn"
                                >Flight Deals</a
                                >
                            </div>
                            <!-- end nav-btn -->
                        </div>
                        <!-- end menu-wrapper -->
                    </div>
                    <!-- end col-lg-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end header-menu-wrapper -->
    </header>
    <!-- ================================
         END HEADER AREA
    ================================= -->
    <router-view></router-view>
    <div class="section-block"></div>

    <!-- ================================
       START FOOTER AREA
    ================================= -->
    <section
        class="footer-area section-bg padding-top-100px padding-bottom-30px"
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <div class="footer-logo padding-bottom-30px">
                            <a href="index.html" class="foot__logo"
                            ><img src="/trizen-demo/html/images/logo.png" alt="logo"
                            /></a>
                        </div>
                        <!-- end logo -->
                        <p class="footer__desc">
                            Morbi convallis bibendum urna ut viverra. Maecenas consequat
                        </p>
                        <ul class="list-items pt-3">
                            <li>
                                3015 Grand Ave, Coconut Grove,<br />
                                Cerrick Way, FL 12345
                            </li>
                            <li>+123-456-789</li>
                            <li><a href="#">trizen@yourwebsite.com</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4
                            class="title curve-shape pb-3 margin-bottom-20px"
                            data-text="curvs"
                        >
                            Company
                        </h4>
                        <ul class="list-items list--items">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="#">Jobs</a></li>
                            <li><a href="blog-grid.html">News</a></li>
                            <li><a href="contact.html">Support</a></li>
                            <li><a href="#">Advertising</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4
                            class="title curve-shape pb-3 margin-bottom-20px"
                            data-text="curvs"
                        >
                            Other Services
                        </h4>
                        <ul class="list-items list--items">
                            <li><a href="#">Investor Relations</a></li>
                            <li><a href="#">Trizen.com Rewards</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">List My Hotel</a></li>
                            <li><a href="#">All Hotels</a></li>
                            <li><a href="#">TV Ads</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
                <div class="col-lg-3 responsive-column">
                    <div class="footer-item">
                        <h4
                            class="title curve-shape pb-3 margin-bottom-20px"
                            data-text="curvs"
                        >
                            Other Links
                        </h4>
                        <ul class="list-items list--items">
                            <li><a href="#">USA Vacation Packages</a></li>
                            <li><a href="#">USA Flights</a></li>
                            <li><a href="#">USA Hotels</a></li>
                            <li><a href="#">USA Car Hire</a></li>
                            <li><a href="#">Create an Account</a></li>
                            <li><a href="#">Trizen Reviews</a></li>
                        </ul>
                    </div>
                    <!-- end footer-item -->
                </div>
                <!-- end col-lg-3 -->
            </div>
            <!-- end row -->
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
                <!-- end col-lg-8 -->
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
                <!-- end col-lg-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="section-block mt-4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="copy-right padding-top-30px">
                        <p class="copy__desc">
                            &copy; Copyright Trizen <span id="get-year"></span> . Made with
                            <span class="la la-heart"></span> by
                            <a href="https://themeforest.net/user/techydevs/portfolio"
                            >TechyDevs</a
                            >
                        </p>
                    </div>
                    <!-- end copy-right -->
                </div>
                <!-- end col-lg-7 -->
                <div class="col-lg-5">
                    <div
                        class="copy-right-content d-flex align-items-center justify-content-end padding-top-30px"
                    >
                        <h3 class="title font-size-15 pe-2">We Accept</h3>
                        <img src="/trizen-demo/html/images/payment-img.png" alt="" />
                    </div>
                    <!-- end copy-right-content -->
                </div>
                <!-- end col-lg-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end footer-area -->
    <!-- ================================
       START FOOTER AREA
    ================================= -->

    <!-- start back-to-top -->
    <div id="back-to-top">
        <i class="la la-angle-up" title="Go top"></i>
    </div>
    <!-- end back-to-top -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <Register></Register>
        </div>
    </div>

    <!-- end modal-popup -->

    <!-- end modal-shared -->
    <div class="modal-popup">
        <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog" aria-hidden="true">
            <Login></Login>
            <!-- end modal-dialog -->
        </div>
        <!-- end modal fade -->
    </div>
    <!-- end modal-popup -->

    <!-- end modal-popup -->

</template>
<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';
import Login from '../auth/Login.vue';
import Register from '../auth/Register.vue';

const user_is_authenticated = ref(false);

onMounted(async () => {
    checkIfAuthenticated();
});

const checkIfAuthenticated = async () => {
    // Check if there is a token in localStorage and update user_is_authenticated accordingly
    const token = localStorage.getItem('auth_token');

    if (token) {
        try {
            // Validate the token by making a request to a protected endpoint
            const response = await axios.get('/api/user', {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });

            // If the request succeeds, set user_is_authenticated to true
            user_is_authenticated.value = true;
        } catch (error) {
            // If there's an error (token is not valid or request fails), handle it
            console.error('Token validation error:', error);
            // Optionally, clear the invalid token from localStorage
            localStorage.removeItem('auth_token');
            user_is_authenticated.value = false; // Ensure user is marked as not authenticated
        }
    }
};

const logout = async () => {
    const token = localStorage.getItem('auth_token');

    if (token) {
        try {
            // Call the logout endpoint to revoke the token
            const response = await axios.post('/api/auth/logout', null, {
                headers: {
                    Authorization: `Bearer ${token}`,
                },
            });

            // Clear the token from localStorage
            localStorage.removeItem('auth_token');

            // Update the authenticated status
            user_is_authenticated.value = false;
        } catch (error) {
            console.error('Logout error:', error);
        }
    }
};
</script>


