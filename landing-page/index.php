<?php
include_once("./layouts-landing/head.php");
include "./config/database.php";

$queryCategory  = mysqli_query($koneksi, "SELECT * FROM categories");

$queryWisata  = mysqli_query($koneksi, "SELECT *, a.description as tour_description, a.id as tour_id, AVG(rating) AS average_rating
FROM tours as a 
LEFT JOIN categories as b ON a.category_id = b.id
LEFT JOIN comments as c ON a.id = c.tour_id
GROUP BY a.id, a.name
ORDER BY average_rating DESC
LIMIT 3;");

$queryComment  = mysqli_query($koneksi, "SELECT * FROM comments as a LEFT JOIN tours as b ON a.tour_id = b.id");
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

    <!-- banner starts -->
    <section class="banner pt-10 pb-0 overflow-hidden" style="background-image:url(assets/images/testimonial.png);">
        <div class="container">
            <div class="banner-in">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4">
                        <div class="banner-content text-lg-start text-center">
                            <h4 class="theme mb-0">Jelajahi Seluruh Dunia</h4>
                            <h1>Rencanakan Liburan Impianmu!</h1>
                            <p class="mb-4">Temukan wisata-wisata impianmu disini dan buat pengalamanmu yang menakjubkan.</p>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="banner-image">
                            <img src="assets/images/traveler-edt.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="category-main-inner border-t pt-1">
                    <div class="row side-slider">

                        <?php if (mysqli_num_rows($queryCategory) > 0) { ?>
                            <?php
                            while ($data = mysqli_fetch_array($queryCategory)) {
                            ?>
                                <div class="col-lg-3 col-md-6 my-4">
                                    <div class="category-item box-shadow p-3 py-4 text-center bg-white rounded overflow-hidden">
                                        <a href="destinasi.php?category=<?= $data['id'] ?>">
                                            <div class="trending-topic-content">
                                                <img src="../uploads/<?= $data['image'] ?>" class="mb-1 d-inline-block" alt="">
                                                <h4 class="mb-0 font-desk-cat"><a href="tour-grid.html"><?= $data['category_name'] ?></a></h4>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php
                            } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- best tour Starts -->
    <section class="trending pb-0">
        <div class="container">
            <div class="row align-items-center justify-content-between mb-6 ">
                <div class="col-lg-7">
                    <div class="section-title text-center text-lg-start">
                        <h4 class="mb-1 theme1">Wisata Populer</h4>
                        <h2 class="mb-1">Wisata <span class="theme">Pilihan </span></h2>
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
            <div class="trend-box">
                <div class="row item-slider">
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
                            <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                                <div class="trend-item rounded box-shadow">
                                    <div class="trend-image position-relative" style="height: 276px;">
                                        <img src="../uploads/<?= $image ?>" alt="image" class="">
                                        <div class="color-overlay"></div>
                                    </div>
                                    <div class="trend-content p-4 pt-5 position-relative">
                                        <div class="trend-meta bg-theme white px-3 py-2 rounded">
                                            <div class="entry-author">
                                                <i class="icon-calendar"></i>
                                                <span class="fw-bold"><?= $data['category_name'] ?></span>
                                            </div>
                                        </div>
                                        <h3 class="mb-1"><a href="tour-grid.html"><?= $data['name'] ?></a></h3>
                                        <div class="rating-main d-flex align-items-center pb-2">
                                            <div class="rating">
                                                <div class="rating me-2">
                                                    <?php for ($i = 0; $i < intval($data['average_rating']); $i++) { ?>
                                                        <span class="fa fa-star checked"></span>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <p class=" border-b pb-2 mb-2 deskrip-wisata"><?= mb_strimwidth($data['tour_description'], 0, 150, '...') ?></p>
                                        <div class="entry-meta">
                                            <div class="entry-author d-flex align-items-center">
                                                <a href="./destination_detail.php?id=<?= $data['tour_id'] ?>">
                                                    <p class="mb-0"><span class="theme fw-bold fs-5"> Selengkapnya</span>
                                                    </p>
                                                </a>
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
        </div>
    </section>
    <!-- best tour Ends -->


    <!-- testomonial start -->
    <section class="testimonial pt-9" style="background-image:url(assets/images/testimonial.png)">
        <div class="container">
            <div class="section-title mb-6 text-center w-75 mx-auto">
                <h4 class="mb-1 theme1">Testimoni</h4>
                <h2 class="mb-1">Ulasan<span class="theme"> dari Pengguna</span></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pe-4">
                    <div class="testimonial-image">
                        <img src="assets/images/review.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 ps-4">
                    <div class="row review-slider">
                        <?php if (mysqli_num_rows($queryComment) > 0) { ?>
                            <?php
                            while ($data = mysqli_fetch_array($queryComment)) {
                            ?>
                                <div class="col-sm-4 item">
                                    <div class="testimonial-item1 rounded">
                                        <div class="author-info d-flex align-items-center mb-4">
                                            <img src="assets/images/content/logo-user1.png" alt="">
                                            <div class="author-title ms-3">
                                                <h5 class="m-0 theme"><?= $data['fullname'] ?></h5>
                                                <span>Pengunjung</span> </br>
                                                <span>Wisata: <?= $data['name'] ?></span>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <p class="m-0"><i class="fa fa-quote-left me-2 fs-1"></i><?= $data['note'] ?></p>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        include_once("./layouts-landing/modal.php");
        include_once("./layouts-landing/script.php");
    ?>

    <style>
        .font-desk-cat {
            font-size: 18px !important;
        }

        .deskrip-wisata {
            text-align: justify;
        }
    </style>

</body>

</html>