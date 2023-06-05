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
                    <h1 class="mb-3">Borobudur - Yogyakarta</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Detail Wisata</li>
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
                                    <h2 class="mb-1">Borobudur - Yogyakarta</h2>
                                    <div class="rating-main d-flex align-items-center">
                                        <p class="mb-0 me-2"><i class="icon-location-pin"></i> Yogyakarta</p>
                                        <div class="rating me-2">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span>(1,186 Review)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="description-images mb-4">
                                <img src="assets/images/trending/trending-large.jpg" alt="" class="w-100 rounded">
                            </div>

                            <div class="description mb-2">
                                <h4>Deskripsi</h4>
                                <p>Borobudur adalah candi Buddha terbesar di dunia dan merupakan Situs Warisan Dunia UNESCO. Terletak di dekat Yogyakarta, candi ini memiliki relief yang indah dan menampilkan kebudayaan Buddha.</p>
                            </div>
                        </div>

                        <div class="description mb-2">
                            <h4 class="mb-2">Galeri</h4>
                            <div class="services-image d-md-flex">
                                <div class="me-md-2 rounded overflow-hidden mb-2"><img src="assets/images/trending/trending5.jpg" alt="" class="w-100"></div>
                                <div class="ms-md-2 rounded overflow-hidden mb-2"><img src="assets/images/trending/trending6.jpg" alt="" class="w-100"></div>
                            </div>
                        </div>

                        <div id="single-map" class="single-map mb-4">
                            <h4>Lokasi</h4>
                            <div class="map rounded overflow-hidden">
                                <div style="width: 100%">
                                    <iframe class=" rounded overflow-hidden" height="400"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63274.38201573587!2d110.15826778824832!3d-7.613131978595187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a8cef5e6c0f59%3A0x4027a76e352eb60!2sKec.%20Borobudur%2C%20Kabupaten%20Magelang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1685958705159!5m2!1sid!2sid"></iframe>
                                </div>
                            </div>
                        </div>

                        <!-- blog review -->
                        <div id="single-add-review" class="single-add-review" style="margin-top: 10px;">
                            <h4>Review</h4>
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
                                            <a href="#" class="nir-btn">Submit</a>
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
                                    <h4 class="">Wisata Serupa</h4>
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
                                                        <h5 class="mb-1"><a href="detail-1.html">Borobudur - Yogyakarta</a></h5>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post border-b pb-2 mb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">Pasar Lama - Tanggerang</a></h5>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post mb-2 border-b pb-2">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">Istana Tirta Gangga - Bali</a></h5>
                                                    </div>
                                                </div>
                                            </article>

                                            <article class="post">
                                                <div class="s-content d-flex align-items-center justify-space-between">
                                                    <div class="sidebar-image w-25 me-3 rounded">
                                                        <a href="detail-1.html"><img src="assets/images/trending/trending4.jpg" alt=""></a>
                                                    </div>
                                                    <div class="content-list w-75">
                                                        <h5 class="mb-1"><a href="detail-1.html">Kebun Raya - Bogor</a></h5>
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