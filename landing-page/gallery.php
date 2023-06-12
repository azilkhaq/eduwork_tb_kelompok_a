<?php
include_once("./layouts-landing/head.php");

include "./config/database.php";

$query = mysqli_query($koneksi, "SELECT * FROM tour_images");
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
                    <h1 class="mb-3">Galeri</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../landing-page/index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <!-- Gallery starts -->
    <div class="gallery pt-6 pb-0">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h2 class="mb-1">Galeri <span class="theme">Wisata</span></h2>
            </div>
            <div class="row">
                <?php if (mysqli_num_rows($query) > 0) { ?>
                    <?php
                    $i = 1;
                    while ($data = mysqli_fetch_array($query)) {

                        $divName = "";

                        if ($i < 3) {
                            $divName = "col-lg-6 col-md-6 col-sm-12 col-xs-12";
                        } else if ($i > 3 || $i < 7) {
                            $divName = "col-lg-4 col-md-6 col-sm-12 col-xs-12";
                        } else {
                            $divName = "col-lg-3 col-md-6 col-sm-12 col-xs-12";
                        } ?>
                        <div class=<?= $divName ?>>
                            <div class="gallery-item mb-4 rounded overflow-hidden">
                                <div class="gallery-image">
                                    <img src="../uploads/<?= $data['image'] ?>" alt="image">
                                </div>
                                <div class="gallery-content">
                                    <h5 class="white text-center position-absolute bottom-0 pb-4 left-50 mb-0 w-100">Barcelona - Spain</h5>
                                    <ul>
                                        <li><a href="assets/images/trending/trending1.jpg" data-lightbox="gallery" data-title="Title"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="destination_detail.php"><i class="fa fa-link"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    } ?>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Gallery Ends -->

    <?php
    include_once("./layouts-landing/footer.php");

    include_once("./layouts-landing/script.php");
    ?>

</body>