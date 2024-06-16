<template>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h5 class="modal-title title" id="exampleModalLongTitle">
                        Register
                    </h5>
                    <p class="font-size-14">Hello! Welcome Create a New Account</p>
                </div>
                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="contact-form-action">
                    <form method="POST" action="">
                        <div class="input-box">
                            <label class="label-text">Name</label>
                            <div class="form-group">
                                <span class="la la-user form-icon"></span>
                                <input id="name" class="form-control" type="text" name="name" value="" placeholder="Type your username" required autocomplete="name" autofocus>
                            </div>
                        </div>
                        <!-- end input-box -->
                        <div class="input-box">
                            <label class="label-text">Email Address</label>
                            <div class="form-group">
                                <span class="la la-envelope form-icon"></span>
                                <input id="email" class="form-control" type="email" name="email"  placeholder="Type your email" required autocomplete="email">
                            </div>
                        </div>
                        <!-- end input-box -->
                        <div class="input-box">
                            <label class="label-text">Password</label>
                            <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input id="password" class="form-control" type="password" name="password" placeholder="Type password" required autocomplete="new-password">
                            </div>
                        </div>
                        <!-- end input-box -->
                        <div class="input-box">
                            <label class="label-text">Repeat Password</label>
                            <div class="form-group">
                                <span class="la la-lock form-icon"></span>
                                <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="Type again password" required autocomplete="new-password">
                            </div>
                        </div>
                        <!-- end input-box -->
                        <div class="btn-box pt-3 pb-4">
                            <button type="submit" class="theme-btn w-100">Register Account</button>
                        </div>
                    </form>
                </div>
                <!-- end contact-form-action -->
            </div>
        </div>
    </div>
</template>
