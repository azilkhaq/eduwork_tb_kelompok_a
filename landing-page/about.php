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
                    <h1 class="mb-3">Tentang Kami</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- about-us starts -->
    <section class="about-us pt-6">
        <div class="container">
            <div class="about-image-box">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-lg-6 ps-4">
                        <div class="about-content text-center text-lg-start">
                            <h4 class="theme d-inline-block mb-0">Tentang Kami</h4>
                            <h2 class="border-b mb-2 pb-1">Telusuri wisata impianmu bersama Travelin.</h2>
                            <p class="border-b mb-2 pb-2">Travelin bergerak dalam industri perjalanan wisata, travelin di dirikan pada tahun 2023. Travelin berkomitmen untuk melakukan wisata dengan aman dan nyaman, travelin memiliki team yang profesional, berkomitmen.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4 pe-4">
                        <div class="about-image" style="animation:none; background:transparent;">
                            <img src="assets/images/about-us.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="white-overlay"></div>
    </section>
    <!-- about-us ends -->

    <!-- our teams starts -->
    <section class="our-team pb-0 pt-6">
        <div class="container">
            <div class="section-title mb-6 w-75 mx-auto text-center">
                <h2 class="mb-1">Team <span class="theme">Kami</span></h2>
            </div>
            <div class="team-main">
                <div class="row shop-slider">
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="assets/images/team/azil.jpg" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Azil Khaq</h4>
                                <p class="mb-0 white">Mahasiswa</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="assets/images/team/intan.jpg" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Intan Mariyahsari</h4>
                                <p class="mb-0 white">Mahasiswa</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="assets/images/team/nihaya.jpg" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Nihayatun</h4>
                                <p class="mb-0 white">Mahasiswa</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="team-list rounded">
                            <div class="team-image">
                                <img src="assets/images/team/badri.JPG" alt="team">
                            </div>
                            <div class="team-content text-center p-3 bg-theme">
                                <h4 class="mb-0 white">Badry Ali Mustofa</h4>
                                <p class="mb-0 white">Mahasiswa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our teams Ends -->
    
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

 

    <?php
    include_once("./layouts-landing/script.php");
    ?>

</body>

</html>