<!-- <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 10px; padding-top: 10px; padding-bottom: 15px;">
            <div class="modal-body">
                <div class="post-tabs">
                    <div class="tab-content blog-full" id="postsTabContent">
                        <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-image rounded">
                                        <a href="#" style="background-image: url(assets/images/login.jpg);"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 pb-10 pt-10">
                                    <h4 class="text-center border-b pb-2">Login</h4>
                                    <form method="post" action="process_login.php" name="contactform" id="contactform">
                                        <div class="form-group mb-2">
                                            <input type="email" name="email" class="form-control" id="fname" placeholder="Email">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="password" name="password" class="form-control" id="lpass" placeholder="Password">
                                        </div>
                                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                                            <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="padding-top: 20px; padding-bottom: 20px;">
            <div class="modal-body">
                <div class="post-tabs">
                    <!-- tab navs -->
                    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button aria-controls="login" aria-selected="false" class="nav-link active" data-bs-target="#login" data-bs-toggle="tab" id="login-tab" role="tab" type="button">Login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button aria-controls="register" aria-selected="true" class="nav-link" data-bs-target="#register" data-bs-toggle="tab" id="register-tab" role="tab" type="button">Register</button>
                        </li>
                    </ul>
                    <!-- tab contents -->
                    <div class="tab-content blog-full" id="postsTabContent">
                        <!-- popular posts -->
                        <div aria-labelledby="login-tab" class="tab-pane fade active show" id="login" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-image rounded">
                                        <a href="#" style="background-image: url(assets/images/login.jpg);"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6" style="padding-bottom: 68px;">
                                    <h4 class="text-center border-b pb-2">Login</h4>
                                    <form method="post" action="process_login.php" name="contactform" id="contactform">
                                        <div class="form-group mb-2">
                                            <input type="email" name="email" class="form-control" id="fname" placeholder="Email">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="password" name="password" class="form-control" id="lpass" placeholder="Password">
                                        </div>
                                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                                            <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Recent posts -->
                        <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="blog-image rounded">
                                        <a href="#" style="background-image: url(assets/images/login.jpg);"></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h4 class="text-center border-b pb-2">Register</h4>
                                    <form method="post" action="process_register.php" name="contactform" id="contactform">
                                        <div class="form-group mb-2">
                                            <input type="text" name="fullname" class="form-control" id="fname" placeholder="Nama Lengkap" autocomplete="off">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="email" name="email" class="form-control" id="fname" placeholder="Email" autocomplete="off">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="text" name="password" class="form-control" id="lpass" placeholder="Password">
                                        </div>
                                        <div class="comment-btn mb-2 pb-2 text-center border-b">
                                            <input type="submit" class="nir-btn w-100" id="submit" value="Register">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>