<template>
    <div class="section-bg">
        <!-- ================================
           START USER CANVAS MENU
        ================================= -->
        <div class="user-canvas-container">
            <div class="side-menu-close">
                <i class="la la-times"></i>
            </div>
            <!-- end menu-toggler -->
            <div class="user-canvas-nav">
                <div class="section-tab section-tab-2 text-center pt-4 pb-3 ps-4">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                id="notification-tab"
                                data-bs-toggle="tab"
                                href="#notification"
                                role="tab"
                                aria-controls="notification"
                                aria-selected="false"
                            >
                                Notifications
                            </a>
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                id="message-tab"
                                data-bs-toggle="tab"
                                href="#message"
                                role="tab"
                                aria-controls="message"
                                aria-selected="false"
                            >
                                Messages
                            </a>
                        </li>

                        <li class="nav-item">
                            <a
                                class="nav-link"
                                id="account-tab"
                                data-bs-toggle="tab"
                                href="#account"
                                role="tab"
                                aria-controls="account"
                                aria-selected="true"
                            >
                                Account
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end section-tab -->
            </div>
            <div class="user-canvas-nav-content">
                <div class="tab-content" id="myTabContent">
                    <div
                        class="tab-pane fade show active"
                        id="notification"
                        role="tabpanel"
                        aria-labelledby="notification-tab"
                    >
                        <div class="user-sidebar-item">
                            <div class="notification-item">
                                <div class="list-group drop-reveal-list">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element flex-shrink-0 me-3 ms-0">
                                                <i class="la la-bell"></i>
                                            </div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your request has been sent</h3>
                                                <p class="msg-text">2 min ago</p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-2 flex-shrink-0 me-3 ms-0">
                                                <i class="la la-check"></i>
                                            </div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">
                                                    Your account has been created
                                                </h3>
                                                <p class="msg-text">1 day ago</p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-3 flex-shrink-0 me-3 ms-0">
                                                <i class="la la-user"></i>
                                            </div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your account updated</h3>
                                                <p class="msg-text">2 hrs ago</p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-4 flex-shrink-0 me-3 ms-0">
                                                <i class="la la-lock"></i>
                                            </div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your password changed</h3>
                                                <p class="msg-text">Yesterday</p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-5 flex-shrink-0 me-3 ms-0">
                                                <i class="la la-envelope"></i>
                                            </div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your email sent</h3>
                                                <p class="msg-text">Yesterday</p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="icon-element bg-6 flex-shrink-0 me-3 ms-0">
                                                <i class="la la-envelope"></i>
                                            </div>
                                            <div class="msg-content w-100">
                                                <h3 class="title pb-1">Your email changed</h3>
                                                <p class="msg-text">Yesterday</p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                </div>
                            </div>
                            <!-- end notification-item -->
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="message"
                        role="tabpanel"
                        aria-labelledby="message-tab"
                    >
                        <div class="user-sidebar-item">
                            <div class="notification-item">
                                <div class="list-group drop-reveal-list">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="/trizen-demo/html/images/team8.jpg" alt="" />
                                            </div>
                                            <div class="msg-content w-100">
                                                <div
                                                    class="d-flex align-items-center justify-content-between"
                                                >
                                                    <h3 class="title pb-1">Steve Wornder</h3>
                                                    <span class="msg-text">3 min ago</span>
                                                </div>
                                                <p class="msg-text">
                                                    Ancillae delectus necessitatibus no eam
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="/trizen-demo/html/images/team9.jpg" alt="" />
                                            </div>
                                            <div class="msg-content w-100">
                                                <div
                                                    class="d-flex align-items-center justify-content-between"
                                                >
                                                    <h3 class="title pb-1">Marc Twain</h3>
                                                    <span class="msg-text">1 hrs ago</span>
                                                </div>
                                                <p class="msg-text">
                                                    Ancillae delectus necessitatibus no eam
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="/trizen-demo/html/images/team10.jpg" alt="" />
                                            </div>
                                            <div class="msg-content w-100">
                                                <div
                                                    class="d-flex align-items-center justify-content-between"
                                                >
                                                    <h3 class="title pb-1">Enzo Ferrari</h3>
                                                    <span class="msg-text">2 hrs ago</span>
                                                </div>
                                                <p class="msg-text">
                                                    Ancillae delectus necessitatibus no eam
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="msg-body d-flex align-items-center">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <img src="/trizen-demo/html/images/team11.jpg" alt="" />
                                            </div>
                                            <div class="msg-content w-100">
                                                <div
                                                    class="d-flex align-items-center justify-content-between"
                                                >
                                                    <h3 class="title pb-1">Lucas Swing</h3>
                                                    <span class="msg-text">3 hrs ago</span>
                                                </div>
                                                <p class="msg-text">
                                                    Ancillae delectus necessitatibus no eam
                                                </p>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                </div>
                            </div>
                            <!-- end notification-item -->
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="account"
                        role="tabpanel"
                        aria-labelledby="account-tab"
                    >
                        <div class="user-action-wrap user-sidebar-panel">
                            <div class="notification-item">
                                <a href="user-dashboard-profile.html" class="dropdown-item">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                            <img src="/trizen-demo/html/images/team8.jpg" alt="team-img" />
                                        </div>
                                        <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                                    </div>
                                </a>
                                <div class="list-group drop-reveal-list user-drop-reveal-list">
                                    <a
                                        href="user-dashboard-profile.html"
                                        class="list-group-item list-group-item-action"
                                    >
                                        <div class="msg-body">
                                            <div class="msg-content">
                                                <h3 class="title">
                                                    <i class="la la-user me-2"></i>My Profile
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a
                                        href="user-dashboard-booking.html"
                                        class="list-group-item list-group-item-action"
                                    >
                                        <div class="msg-body">
                                            <div class="msg-content">
                                                <h3 class="title">
                                                    <i class="la la-shopping-cart me-2"></i>My Booking
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a
                                        href="user-dashboard-reviews.html"
                                        class="list-group-item list-group-item-action"
                                    >
                                        <div class="msg-body">
                                            <div class="msg-content">
                                                <h3 class="title">
                                                    <i class="la la-heart me-2"></i>My Reviews
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <a
                                        href="user-dashboard-settings.html"
                                        class="list-group-item list-group-item-action"
                                    >
                                        <div class="msg-body">
                                            <div class="msg-content">
                                                <h3 class="title">
                                                    <i class="la la-gear me-2"></i>Settings
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                    <div class="section-block"></div>
                                    <a
                                        href="index.html"
                                        class="list-group-item list-group-item-action"
                                    >
                                        <div class="msg-body">
                                            <div class="msg-content">
                                                <h3 class="title">
                                                    <i class="la la-power-off me-2"></i>Logout
                                                </h3>
                                            </div>
                                        </div>
                                        <!-- end msg-body -->
                                    </a>
                                </div>
                            </div>
                            <!-- end notification-item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end user-canvas-container -->
        <!-- ================================
           END USER CANVAS MENU
        ================================= -->

        <!-- ================================
           START DASHBOARD NAV
        ================================= -->
        <div class="sidebar-nav sidebar--nav">
            <div class="sidebar-nav-body">
                <div class="side-menu-close">
                    <i class="la la-times"></i>
                </div>
                <!-- end menu-toggler -->
                <div class="author-content">
                    <div class="d-flex align-items-center">
                        <div class="author-img avatar-sm">
                            <img src="/trizen-demo/html/images/team9.jpg" alt="testimonial image" />
                        </div>
                        <div class="author-bio">
                            <h4 class="author__title">DaveTravels</h4>
                            <span class="author__meta">Welcome to Admin Panel</span>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu-wrap">
                    <ul class="sidebar-menu toggle-menu list-items">
                        <li>
                            <router-link to="/admin/dashboard"
                            ><i class="la la-dashboard me-2"></i>Dashboard</router-link
                            >
                        </li>
                        <li>
                            <router-link to="/admin/bookings"
                            ><i class="la la-shopping-cart me-2 text-color"></i>Bookings</router-link
                            >
                        </li>
                        <li>
                            <router-link
                                to="/admin/flights"
                                :class="{ 'router-link-exact-active': $route.fullPath.startsWith('/admin/flights') }"
                            >
                                <i class="la la-plane me-2 text-color-2"></i>Flights
                            </router-link>
                        </li>

                        <li>
                            <router-link to="/admin/destination_classes"
                                         :class="{ 'router-link-exact-active': $route.fullPath.startsWith('/admin/destination_classes') }"><i class="la la-list me-2 text-color-4"></i>Travel Classes</router-link
                            >
                        </li>

                        <li>
                            <router-link to="/admin/destinations" :class="{ 'router-link-exact-active': $route.fullPath.startsWith('/admin/destinations') }"><i class="la la-users me-2 text-color-3"></i>Destinations</router-link
                            >
                        </li>

                        <li>
                            <a href="admin-dashboard-reviews.html"
                            ><i class="la la-star me-2 text-color-5"></i>Reviews</a
                            >
                        </li>
                        <li>
                            <a href="admin-dashboard-wishlist.html"
                            ><i class="la la-heart me-2 text-color-6"></i>Wishlist</a
                            >
                        </li>
                        <li>
                            <a href="admin-dashboard-travel-agents.html"
                            ><i class="la la-text-width me-2 text-color-7"></i>Travel
                                Agents</a
                            >
                        </li>
                        <li>
              <span class="side-menu-icon toggle-menu-icon">
                <i class="la la-angle-down"></i>
              </span>
                            <a href="#"
                            ><i class="la la-area-chart me-2 text-color-8"></i>Finance</a
                            >
                            <ul class="toggle-drop-menu">
                                <li><a href="admin-invoice.html">Invoice</a></li>
                                <li><a href="admin-payments.html">Payments</a></li>
                                <li><a href="admin-currency-list.html">Currency List</a></li>
                                <li>
                                    <a href="admin-dashboard-subscribers.html">Subscribers</a>
                                </li>
                            </ul>
                        </li>
                        <li>
              <span class="side-menu-icon toggle-menu-icon">
                <i class="la la-angle-down"></i>
              </span>
                            <a href="#"
                            ><i class="la la-map-signs me-2 text-color-9"></i>Locations</a
                            >
                            <ul class="toggle-drop-menu">
                                <li><a href="admin-countries.html">Countries</a></li>
                                <li><a href="admin-airlines.html">Airlines</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin-dashboard-settings.html"
                            ><i class="la la-cog me-2 text-color-10"></i>Settings</a
                            >
                        </li>
                        <li>
                            <a href="index.html"
                            ><i class="la la-power-off me-2 text-color-11"></i>Logout</a
                            >
                        </li>
                    </ul>
                </div>
                <!-- end sidebar-menu-wrap -->
            </div>
        </div>
        <!-- end sidebar-nav -->
        <!-- ================================
           END DASHBOARD NAV
        ================================= -->

        <!-- ================================
        START DASHBOARD AREA
        ================================= -->
        <section class="dashboard-area">
            <div class="dashboard-nav dashboard--nav">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="menu-wrapper">
                                <div class="logo me-5">
                                    <a href="/admin/dashboard" style="font-weight:bolder; font-size:30px;color:#e20177; font-family:'Red Serif', serif;">
<!--                                                 <img src="/trizen-demo/html/images/logo.png" alt="logo"/>-->
                                        DaveTravels
                                    </a>
                                    <div class="menu-toggler">
                                        <i class="la la-bars"></i>
                                        <i class="la la-times"></i>
                                    </div>
                                    <!-- end menu-toggler -->
                                    <div class="user-menu-open">
                                        <i class="la la-user"></i>
                                    </div>
                                    <!-- end user-menu-open -->
                                </div>
                                <div class="nav-btn ms-auto">
                                    <div class="notification-wrap d-flex align-items-center">
                                        <div class="notification-item me-2">
                                            <div class="dropdown">
                                                <a
                                                    href="#"
                                                    class="dropdown-toggle drop-reveal-toggle-icon"
                                                    id="notificationDropdownMenu"
                                                    data-bs-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <i class="la la-bell"></i>
                                                    <span class="noti-count">4</span>
                                                </a>
                                                <div
                                                    class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right"
                                                >
                                                    <div class="dropdown-header drop-reveal-header">
                                                        <h6 class="title">
                                                            You have
                                                            <strong class="text-black">4</strong>
                                                            notifications
                                                        </h6>
                                                    </div>
                                                    <div class="list-group drop-reveal-list">
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div
                                                                    class="icon-element flex-shrink-0 me-3 ms-0"
                                                                >
                                                                    <i class="la la-bell"></i>
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <h3 class="title pb-1">
                                                                        Your request has been sent
                                                                    </h3>
                                                                    <p class="msg-text">2 min ago</p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div
                                                                    class="icon-element bg-2 flex-shrink-0 me-3 ms-0"
                                                                >
                                                                    <i class="la la-check"></i>
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <h3 class="title pb-1">
                                                                        Your account has been created
                                                                    </h3>
                                                                    <p class="msg-text">1 day ago</p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div
                                                                    class="icon-element bg-3 flex-shrink-0 me-3 ms-0"
                                                                >
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <h3 class="title pb-1">
                                                                        Your account updated
                                                                    </h3>
                                                                    <p class="msg-text">2 hrs ago</p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div
                                                                    class="icon-element bg-4 flex-shrink-0 me-3 ms-0"
                                                                >
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <h3 class="title pb-1">
                                                                        Your password changed
                                                                    </h3>
                                                                    <p class="msg-text">Yesterday</p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                    </div>
                                                    <a
                                                        href="#"
                                                        class="dropdown-item drop-reveal-btn text-center"
                                                    >View all</a
                                                    >
                                                </div>
                                                <!-- end dropdown-menu -->
                                            </div>
                                        </div>
                                        <!-- end notification-item -->
                                        <div class="notification-item me-2">
                                            <div class="dropdown">
                                                <a
                                                    href="#"
                                                    class="dropdown-toggle drop-reveal-toggle-icon"
                                                    id="messageDropdownMenu"
                                                    data-bs-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <i class="la la-envelope"></i>
                                                    <span class="noti-count">4</span>
                                                </a>
                                                <div
                                                    class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right"
                                                >
                                                    <div class="dropdown-header drop-reveal-header">
                                                        <h6 class="title">
                                                            You have
                                                            <strong class="text-black">4</strong> messages
                                                        </h6>
                                                    </div>
                                                    <div class="list-group drop-reveal-list">
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div class="avatar flex-shrink-0 me-3">
                                                                    <img src="/trizen-demo/html/images/team8.jpg" alt="" />
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <h3 class="title pb-1">Steve Wornder</h3>
                                                                        <span class="msg-text">3 min ago</span>
                                                                    </div>
                                                                    <p class="msg-text">
                                                                        Ancillae delectus necessitatibus no eam
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div class="avatar flex-shrink-0 me-3">
                                                                    <img src="/trizen-demo/html/images/team9.jpg" alt="" />
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <h3 class="title pb-1">Marc Twain</h3>
                                                                        <span class="msg-text">1 hrs ago</span>
                                                                    </div>
                                                                    <p class="msg-text">
                                                                        Ancillae delectus necessitatibus no eam
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div class="avatar flex-shrink-0 me-3">
                                                                    <img src="/trizen-demo/html/images/team10.jpg" alt="" />
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <h3 class="title pb-1">Enzo Ferrari</h3>
                                                                        <span class="msg-text">2 hrs ago</span>
                                                                    </div>
                                                                    <p class="msg-text">
                                                                        Ancillae delectus necessitatibus no eam
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body d-flex align-items-center">
                                                                <div class="avatar flex-shrink-0 me-3">
                                                                    <img src="/trizen-demo/html/images/team11.jpg" alt="" />
                                                                </div>
                                                                <div class="msg-content w-100">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between"
                                                                    >
                                                                        <h3 class="title pb-1">Lucas Swing</h3>
                                                                        <span class="msg-text">3 hrs ago</span>
                                                                    </div>
                                                                    <p class="msg-text">
                                                                        Ancillae delectus necessitatibus no eam
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                    </div>
                                                    <a
                                                        href="#"
                                                        class="dropdown-item drop-reveal-btn text-center"
                                                    >View all</a
                                                    >
                                                </div>
                                                <!-- end dropdown-menu -->
                                            </div>
                                        </div>
                                        <!-- end notification-item -->
                                        <div class="notification-item">
                                            <div class="dropdown">
                                                <a
                                                    href="#"
                                                    class="dropdown-toggle"
                                                    id="userDropdownMenu"
                                                    data-bs-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                >
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                                            <img src="/trizen-demo/html/images/team8.jpg" alt="team-img" />
                                                        </div>
                                                        <span class="font-size-14 font-weight-bold"
                                                        >Royel Admin</span
                                                        >
                                                    </div>
                                                </a>
                                                <div
                                                    class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right"
                                                >
                                                    <div
                                                        class="dropdown-item drop-reveal-header user-reveal-header"
                                                    >
                                                        <h6 class="title text-uppercase">Welcome!</h6>
                                                    </div>
                                                    <div
                                                        class="list-group drop-reveal-list user-drop-reveal-list"
                                                    >
                                                        <a
                                                            href="admin-dashboard-settings.html"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body">
                                                                <div class="msg-content">
                                                                    <h3 class="title">
                                                                        <i class="la la-user me-2"></i> Edit Profile
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="admin-dashboard-orders.html"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body">
                                                                <div class="msg-content">
                                                                    <h3 class="title">
                                                                        <i class="la la-shopping-cart me-2"></i
                                                                        >Orders
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="#"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body">
                                                                <div class="msg-content">
                                                                    <h3 class="title">
                                                                        <i class="la la-bell me-2"></i>Messages
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <a
                                                            href="admin-dashboard-settings.html"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body">
                                                                <div class="msg-content">
                                                                    <h3 class="title">
                                                                        <i class="la la-gear me-2"></i>Settings
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                        <div class="section-block"></div>
                                                        <a
                                                            href="index.html"
                                                            class="list-group-item list-group-item-action"
                                                        >
                                                            <div class="msg-body">
                                                                <div class="msg-content">
                                                                    <h3 class="title">
                                                                        <i class="la la-power-off me-2"></i>Logout
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!-- end msg-body -->
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end dropdown-menu -->
                                            </div>
                                        </div>
                                        <!-- end notification-item -->
                                    </div>
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
            <!-- end dashboard-nav -->
            <router-view></router-view>
            <!-- end dashboard-content-wrap -->
        </section>
        <!-- end dashboard-area -->
        <!-- ================================
        END DASHBOARD AREA
        ================================= -->

        <!-- start scroll top -->
        <div id="back-to-top">
            <i class="la la-angle-up" title="Go top"></i>
        </div>
        <!-- end scroll top -->
    </div>
</template>
