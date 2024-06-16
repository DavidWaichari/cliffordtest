<template>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title title" id="exampleModalLongTitle2">
                        Login
                    </h5>
                    <p class="font-size-14">Hello! Welcome to your account</p>
                </div>
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form-action">
                    <form method="POST" action="">
                        <div class="input-box mb-3">
                            <label class="label-text">Email Address</label>
                            <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input id="email" type="email" class="form-control" name="email"  required autocomplete="email" autofocus placeholder="Type your email">
                            </div>
                        </div>
                        <!-- end input-box -->

                        <div class="input-box mb-3">
                            <label class="label-text">Password</label>
                            <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Type your password">
                            </div>
                        </div>
                        <!-- end input-box -->

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="custom-checkbox">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember" >
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <p class="forgot-password">
                                <a href="">Forgot Password?</a>
                            </p>
                        </div>
                        <!-- end d-flex -->

                        <div class="btn-box">
                            <button type="submit" class="theme-btn w-100">Login Account</button>
                        </div>

                        <div class="action-box text-center">
                            <p class="font-size-14">Or Login Using</p>
                            <ul class="social-profile py-3">
                                <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- end action-box -->
                    </form>
                </div>
                <!-- end contact-form-action -->
            </div>
            <!-- end modal-body -->
        </div>
        <!-- end modal-content -->
    </div>
</template>
