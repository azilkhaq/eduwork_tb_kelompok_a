<?php
include_once("./layouts-landing/head.php");

include "./config/database.php";

$queryWisata  = mysqli_query($koneksi, "SELECT *, a.description as tour_description, a.id as tour_id  FROM tours as a LEFT JOIN categories as b ON a.category_id = b.id");
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
                    <h1 class="mb-3">Wisata</h1>
                    <nav aria-label="breadcrumb" class="d-block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wisata</li>
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
                <h2 class="mb-1">Daftar <span class="theme">Wisata</span></h2>
            </div>
            <div class="row align-items-center">

                <?php if (mysqli_num_rows($queryWisata) > 0) { ?>
                    <?php
                    while ($data = mysqli_fetch_array($queryWisata)) {

                        $queryImage  = mysqli_query($koneksi, "SELECT * FROM tour_images WHERE tour_id = " . $data['tour_id'] . " LIMIT 1");

                        $image = "";
                        if (mysqli_num_rows($queryImage) > 0) {
                            while ($dataImage = mysqli_fetch_array($queryImage)) {
                                $image = $dataImage['image'];
                            }
                        }
                    ?>

                        <div class="col-lg-4">
                            <div class="trend-item box-shadow bg-white mb-4 rounded overflow-hidden">
                                <div class="trend-image">
                                    <img src="../uploads/<?= $image ?>" alt="image">
                                </div>
                                <div class="trend-content-main p-4 pb-2">
                                    <div class="trend-content">
                                        <h5 class="theme mb-1"><?= $data['category_name'] ?></h5>
                                        <h4><a href="destination_detail.php"><?= $data['name'] ?></a></h4>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                        <p class="mb-3">
                                            <?= mb_strimwidth($data['tour_description'], 0, 230, '...') ?>
                                        </p>
                                        <div class="entry-meta d-flex align-items-center justify-content-between">
                                            <div class="entry-button d-flex align-items-centermb-2">
                                                <a href="./destination_detail.php?id=<?= $data['tour_id'] ?>" class="nir-btn" style="padding: 12px;">Selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    } ?>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- top Destination ends -->


    <?php
    include_once("./layouts-landing/footer.php");

    include_once("./layouts-landing/script.php");
    ?>

</body>