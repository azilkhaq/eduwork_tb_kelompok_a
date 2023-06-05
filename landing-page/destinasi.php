<?php
include_once("./layouts-landing/head.php");
?>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <?php
    include_once("./layouts-landing/header.php");
    ?>
    <div class="tet"></div>

     <!-- BreadCrumb Starts -->  
     <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(assets/images/bg/bg1.jpg);">
        <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(assets/images/shape8.png);"></div>
        <div class="breadcrumb-outer">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 class="mb-3">Destination List</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destination Lists</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- top Destination starts -->
    <section class="trending pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-50 mx-auto text-center">
                <h4 class="mb-1 theme1">Top Destinations</h4>
                <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination17.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Italy</a></h5>
                                    <h3 class="mb-0 white">Caspian Valley</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">18 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination14.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Tokyo</a></h5>
                                    <h3 class="mb-0 white">Japan</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">21 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination15.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Moscow</a></h5>
                                    <h3 class="mb-0 white">Russia</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">15 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination5.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Bangkok</a></h5>
                                    <h3 class="mb-0 white">Thailand</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">24 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination16.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Florida</a></h5>
                                    <h3 class="mb-0 white">America</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">32 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination4.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Bali</a></h5>
                                    <h3 class="mb-0 white">Indonesia</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">14 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination10.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Italy</a></h5>
                                    <h3 class="mb-0 white">Caspian Valley</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">18 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination11.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Tokyo</a></h5>
                                    <h3 class="mb-0 white">Japan</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">21 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item1">
                        <div class="trend-image position-relative rounded">
                            <img src="assets/images/destination/destination7.jpg" alt="image">
                            <div class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100">
                                <div class="trend-content-title">
                                    <h5 class="mb-0"><a href="destination_detail.php" class="theme1">Moscow</a></h5>
                                    <h3 class="mb-0 white">Russia</h3>
                                </div>
                                <span class="white bg-theme p-1 px-2 rounded">15 Tours</span>
                            </div>
                            <div class="color-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->


    <?php
    include_once("./layouts-landing/footer.php");
    ?>

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- search popup -->
    <div id="search1">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- login registration modal -->
    <div class="modal fade log-reg" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
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
                                            <a href="#" style="background-image: url(assets/images/trending/trending5.jpg);"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-center border-b pb-2">Login</h4>
                                        <div class="log-reg-button d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-fb">
                                                <i class="fab fa-facebook"></i> Login with Facebook
                                            </button>
                                            <button type="submit" class="btn btn-google">
                                                <i class="fab fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                        <form method="post" action="#" name="contactform" id="contactform">
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="fname" placeholder="User Name or Email Address">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control" id="lpass" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                                <label class="custom-control-label mb-0" for="exampleCheck1">Remember
                                                    me</label>
                                                <a class="float-end" href="#">Lost your password?</a>
                                            </div>
                                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                <input type="submit" class="nir-btn w-100" id="submit" value="Login">
                                            </div>
                                            <p class="text-center">Don't have an account? <a href="#" class="theme">Register</a></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent posts -->
                            <div aria-labelledby="register-tab" class="tab-pane fade" id="register" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-image rounded">
                                            <a href="#" style="background-image: url(assets/images/trending/trending5.jpg);"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="text-center border-b pb-2">Register</h4>
                                        <div class="log-reg-button d-flex align-items-center justify-content-between">
                                            <button type="submit" class="btn btn-fb">
                                                <i class="fab fa-facebook"></i> Login with Facebook
                                            </button>
                                            <button type="submit" class="btn btn-google">
                                                <i class="fab fa-google"></i> Login with Google
                                            </button>
                                        </div>
                                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                                        <form method="post" action="#" name="contactform1" id="contactform1">
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="fname1" placeholder="User Name">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="text" name="user_name" class="form-control" id="femail" placeholder="Email Address">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control" id="lpass1" placeholder="Password">
                                            </div>
                                            <div class="form-group mb-2">
                                                <input type="password" name="password_name" class="form-control" id="lrepass" placeholder="Re-enter Password">
                                            </div>
                                            <div class="form-group mb-2 d-flex">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck1">I
                                                    have read and accept the Terms and Privacy Policy?</label>
                                            </div>
                                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                                <input type="submit" class="nir-btn w-100" id="submit1" value="Register">
                                            </div>
                                            <p class="text-center">Already have an account? <a href="#" class="theme">Login</a></p>
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

    <?php
    include_once("./layouts-landing/script.php");
    ?>

</body>

</html>