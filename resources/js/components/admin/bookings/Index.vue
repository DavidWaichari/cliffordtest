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
                                            <select class="form-select p-2" aria-label="Select status">
                                                <option selected>Any status</option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="3">Cancelled</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-content pb-2">
                                <div class="card-item card-item-list card-item--list">
                                    <div class="card-img">
                                        <img src="/trizen-demo/html/images/img1.jpg" alt="hotel-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h3 class="card-title">Hotel Malte – Astotel</h3>
                                            <span class="badge text-bg-warning text-white ms-2">Pending</span>
                                        </div>
                                        <ul class="list-items list-items-2 pt-2 pb-3">
                                            <li><span>Start date:</span>12 December 2019</li>
                                            <li><span>End date:</span>12 Jun 2020</li>
                                            <li><span>Booking details:</span> 3 People</li>
                                            <li><span>Client:</span> David Martin</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent" data-bs-toggle="modal" data-bs-target="#modalPopup"><i class="la la-envelope me-1"></i>Send Message</a>
                                        </div>
                                    </div>
                                    <div class="action-btns">
                                        <a href="#" class="theme-btn theme-btn-small me-2"><i class="la la-check-circle me-1"></i>Approve</a>
                                        <a href="#" class="theme-btn theme-btn-small"><i class="la la-times me-1"></i>Cancel</a>
                                    </div>
                                </div>
                                <!-- end card-item -->
                                <div class="card-item flight-card card-item-list card-item--list">
                                    <div class="card-img">
                                        <img src="/trizen-demo/html/images/img15.jpg" alt="destination-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h3 class="card-title">London to Paris</h3>
                                            <span class="badge text-bg-success ms-2">Approved</span>
                                        </div>
                                        <ul class="list-items list-items-2 pt-2 pb-3">
                                            <li><span>Start date:</span>12 December 2019</li>
                                            <li><span>End date:</span>12 Jun 2020</li>
                                            <li><span>Booking details:</span> 2 People</li>
                                            <li><span>Client:</span> Mark Wing</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent" data-bs-toggle="modal" data-bs-target="#modalPopup"><i class="la la-envelope me-1"></i>Send Message</a>
                                        </div>
                                    </div>
                                    <div class="action-btns">
                                        <a href="#" class="theme-btn theme-btn-small me-2"><i class="la la-check-circle me-1"></i>Approve</a>
                                        <a href="#" class="theme-btn theme-btn-small"><i class="la la-times me-1"></i>Cancel</a>
                                    </div>
                                </div>
                                <div class="card-item car-card card-item-list card-item--list">
                                    <div class="card-img">
                                        <img src="/trizen-demo/html/images/car-img2.png" alt="car-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h3 class="card-title">
                                                Volkswagen Jetta 2 Doors or Similar
                                            </h3>
                                            <span class="badge text-bg-warning text-white ms-2">Pending</span>
                                        </div>
                                        <ul class="list-items list-items-2 pt-2 pb-3">
                                            <li><span>Start date:</span>12 December 2019</li>
                                            <li><span>End date:</span>12 Jun 2020</li>
                                            <li><span>Booking details:</span> 4 People</li>
                                            <li><span>Client:</span> John Smith</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent" data-bs-toggle="modal" data-bs-target="#modalPopup"><i class="la la-envelope me-1"></i>Send Message</a>
                                        </div>
                                    </div>
                                    <div class="action-btns">
                                        <a href="#" class="theme-btn theme-btn-small me-2"><i class="la la-check-circle me-1"></i>Approve</a>
                                        <a href="#" class="theme-btn theme-btn-small"><i class="la la-times me-1"></i>Cancel</a>
                                    </div>
                                </div>
                                <div class="card-item cruise--card card-item-list card-item--list">
                                    <div class="card-img">
                                        <a href="cruise-details.html" class="d-block">
                                            <img src="/trizen-demo/html/images/cruise-img6.jpg" alt="cruise-img">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <h3 class="card-title">
                                                7 Nights Caribbean Southern Cruise
                                            </h3>
                                            <span class="badge text-bg-danger ms-2">Canceled</span>
                                        </div>
                                        <ul class="list-items list-items-2 pt-2 pb-3">
                                            <li><span>Start date:</span>12 December 2019</li>
                                            <li><span>End date:</span>12 Jun 2020</li>
                                            <li><span>Booking details:</span> 4 People</li>
                                            <li><span>Client:</span> John Doe</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="#" class="theme-btn theme-btn-small theme-btn-transparent" data-bs-toggle="modal" data-bs-target="#modalPopup"><i class="la la-envelope me-1"></i>Send Message</a>
                                        </div>
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
