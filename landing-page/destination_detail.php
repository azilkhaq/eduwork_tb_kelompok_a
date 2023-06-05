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
                    <h1 class="mb-3">Bangkok - Thailand</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Destination Detail</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- top Destination starts -->
    <section class="trending pt-6 pb-0 bg-lgrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-content">
                        <div id="highlight" class="mb-4">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <h2 class="mb-1">Bangkok Thailand</h2>
                                    <div class="rating-main d-flex align-items-center">
                                        <p class="mb-0 me-2"><i class="icon-location-pin"></i> Greater London, United Kingdom</p>
                                        <div class="rating me-2">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span>(1,186 Reviews)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="description-images mb-4">
                                <img src="assets/images/trending/trending-large.jpg" alt="" class="w-100 rounded">
                            </div>

                            <div class="description mb-2">
                                <h4>Description</h4>
                                <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
                                <p class="mb-0">The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
                            </div>
                        </div>

                        <div class="description mb-2">
                            <h4 class="mb-2">Gallery</h4>
                            <div class="services-image d-md-flex">
                                <div class="me-md-2 rounded overflow-hidden mb-2"><img src="assets/images/trending/trending5.jpg" alt="" class="w-100"></div>
                                <div class="ms-md-2 rounded overflow-hidden mb-2"><img src="assets/images/trending/trending6.jpg" alt="" class="w-100"></div>
                            </div>
                        </div>

                        <div id="single-map" class="single-map mb-4">
                            <h4>Map</h4>
                            <div class="map rounded overflow-hidden">
                                <div style="width: 100%">
                                    <iframe class=" rounded overflow-hidden" height="400" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- blog review -->
                        <div id="single-add-review" class="single-add-review">
                            <h4>Write a Review</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-2">
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-btn">
                                            <a href="#" class="nir-btn">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- sidebar starts -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <div class="popular-post sidebar-item mb-4">
                            <div class="sidebar-tabs">
                                <div class="post-tabs">
                                    <!-- tab navs -->
                                    <h4 class="">Destinations Popular</h4>
                                    <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab1" role="tablist">
                                        <li class="nav-item d-inline-block" role="presentation">
                                            <button aria-selected="false" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button>
                                        </li>
                                        <li class="nav-item d-inline-block" role="presentation">
                                            <button aria-selected="true" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button>
                                        </li>
                                    </ul>
                                    <!-- tab contents -->
                                    <div class="tab-content" id="postsTabContent1">
                                        <!-- popular posts -->
                                        <div aria-labelledby="popular-tab" class="tab-pane fade active show" id="popular" role="tabpanel">
                                            <article class="post mb-2 border-b pb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">An Incredibly Easy Method That Works For All</a></h5>
                                                        <div class="date">10 Apr 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post border-b pb-2 mb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">15 Unheard Ways To Achieve Greater Walker</a></h5>
                                                        <div class="date">29 Mar 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post mb-2 border-b pb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">An Incredibly Easy Method That Works For All</a></h5>
                                                        <div class="date">10 Apr 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending4.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">15 Unheard Ways To Achieve Greater Walker</a></h5>
                                                        <div class="date">21 Feb 2021</div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                        <!-- Recent posts -->
                                        <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                                            <article class="post mb-2 border-b pb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending5.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">10 Ways To Immediately Start Selling Furniture</a></h5>
                                                        <div class="date">08 Mar 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post border-b pb-2 mb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending6.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">Photography Photo modify and Beautiful Walker</a></h5>
                                                        <div class="date">18 Jan 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post mb-2 border-b pb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">An Incredibly Easy Method That Works For All</a></h5>
                                                        <div class="date">10 Apr 2021</div>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">1Certified Graphic Design with Free Project Course</a></h5>
                                                        <div class="date">12 Feb 2021</div>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                </div>
                            </div>
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