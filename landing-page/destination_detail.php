<?php
include_once("./layouts-landing/head.php");

include "./config/database.php";

$id = $_GET['id'];

$queryWisata  = mysqli_query($koneksi, "SELECT *, a.description as tour_description, a.id as tour_id  FROM tours as a LEFT JOIN categories as b ON a.category_id = b.id WHERE a.id = $id");
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

            $queryGallery  = mysqli_query($koneksi, "SELECT * FROM tour_images WHERE tour_id = " . $data['tour_id'] . "");
            $gallery = [];
            if (mysqli_num_rows($queryGallery) > 0) {
                while ($dataGallery = mysqli_fetch_array($queryGallery)) {
                    array_push($gallery, $dataGallery['image']);
                }
            }

            $queryFasilitas  = mysqli_query($koneksi, "SELECT * FROM facilities WHERE tour_id = " . $data['tour_id'] . "");
            $fasilitas = [];
            if (mysqli_num_rows($queryFasilitas) > 0) {
                while ($dataFasilitas = mysqli_fetch_array($queryFasilitas)) {
                    array_push($fasilitas, $dataFasilitas['facility_name']);
                }
            }
        ?>

            <!-- BreadCrumb Starts -->
            <section class="breadcrumb-main pb-20 pt-14" style="background-image: url(assets/images/bg/bg1.jpg);">
                <div class="section-shape section-shape1 top-inherit bottom-0" style="background-image: url(assets/images/shape8.png);"></div>
                <div class="breadcrumb-outer">
                    <div class="container">
                        <div class="breadcrumb-content text-center">
                            <h1 class="mb-3"><?= $data['name'] ?></h1>
                            <nav aria-label="breadcrumb" class="d-block">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
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
                                <div id="highlight" class="mb-2">
                                    <div class="single-full-title border-b mb-2 pb-2">
                                        <div class="single-title">
                                            <h2 class="mb-1"><?= $data['name'] ?></h2>
                                            <div class="rating-main d-flex align-items-center">
                                                <p class="mb-0 me-2"><i class="icon-location-pin"></i> <?= $data['address'] ?></p>
                                            </div>
                                            <div class="rating-main d-flex align-items-center">
                                                <?php
                                                $queryRate  = mysqli_query($koneksi, " SELECT COUNT(*) as total, avg(rating) as rating FROM comments WHERE tour_id = $id");
                                                ?>
                                                <?php if (mysqli_num_rows($queryRate) > 0) { ?>
                                                    <?php
                                                    while ($rate = mysqli_fetch_array($queryRate)) { ?>
                                                        <div class="rating me-2">
                                                            <?php for ($i = 0; $i < intval($rate['rating']); $i++) { ?>
                                                                <span class="fa fa-star checked"></span>
                                                            <?php } ?>
                                                        </div>
                                                        <span>(<?= $rate['total'] ?> Review)</span>

                                                <?php }
                                                } ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="description-images mb-4">
                                        <img src="../uploads/<?= $image ?>" alt="" class="w-100 rounded">
                                    </div>

                                    <div class="description mb-2">
                                        <div class="owl-carousel">
                                            <?php foreach ($gallery as $value) { ?>
                                                <img src="../uploads/<?= $value ?>" alt="">
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="description mb-2">
                                        <h4>Deskripsi</h4>
                                        <hr />
                                        <p><?= $data['tour_description'] ?></p>
                                    </div>

                                    <div class="description mt-2">
                                        <h4>Fasilitas</h4>
                                        <hr />
                                        <ul>
                                            <?php foreach ($fasilitas as $value) { ?>
                                                <li class="pb-1"><i class="fa fa-check pink mr-1"></i> <?= $value ?></li><br>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>

                                <div id="single-map" class="single-map">
                                    <h4>Lokasi</h4>
                                    <hr />
                                    <div class="map rounded overflow-hidden">
                                        <div style="width: 100%">
                                            <iframe class=" rounded overflow-hidden" height="400" src="<?= $data['url_map'] ?>"></iframe>
                                        </div>
                                    </div>
                                </div>

                                <div id="single-comments" class="single-comments single-box mb-4 mt-3">
                                    <h4>Review Terbaru</h4>
                                    <hr />
                                    <?php
                                    $queryComment = mysqli_query($koneksi, "SELECT * FROM comments WHERE tour_id = " . $data['tour_id'] . " ORDER BY id DESC LIMIT 3");

                                    if (mysqli_num_rows($queryComment) > 0) {
                                        while ($comment = mysqli_fetch_array($queryComment)) {
                                    ?>
                                            <div class="comment-box">
                                                <div class="comment-content rounded" style="width: 100%;">
                                                    <h5 class="mb-1"><?= $comment['fullname'] ?></h5>
                                                    <p class="comment-date">
                                                        <?php
                                                        $date = date_create($comment['created_at']);
                                                        echo date_format($date, "M d, Y H:i a");
                                                        ?>
                                                    </p>
                                                    <div class="comment-rate">
                                                        <div class="rating mar-right-15">
                                                            <?php for ($i = 0; $i < intval($comment['rating']); $i++) { ?>
                                                                <span class="fa fa-star checked"></span>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <p class="comment"><?= $comment['note'] ?></p>
                                                </div>
                                            </div>

                                    <?php }
                                    } ?>
                                </div>

                                <!-- blog review -->
                                <div id="single-add-review" class="single-add-review pt-2">
                                    <h4>Review</h4>
                                    <hr />
                                    <form action="process_review.php" method="POST">
                                        <input type="text" name="tour_id" value="<?= $data['tour_id'] ?>" hidden>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group mb-2">
                                                    <input type="text" name="fullname" placeholder="Nama" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group mb-2">
                                                    <input type="email" name="email" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group mb-2">
                                                    <textarea name="note" required>Komentar</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 pb-3">
                                                <div class="rate">
                                                    <input type="radio" id="star5" name="rate" value="5" />
                                                    <label for="star5" title="text">5 stars</label>
                                                    <input type="radio" id="star4" name="rate" value="4" />
                                                    <label for="star4" title="text">4 stars</label>
                                                    <input type="radio" id="star3" name="rate" value="3" />
                                                    <label for="star3" title="text">3 stars</label>
                                                    <input type="radio" id="star2" name="rate" value="2" />
                                                    <label for="star2" title="text">2 stars</label>
                                                    <input type="radio" id="star1" name="rate" value="1" />
                                                    <label for="star1" title="text">1 star</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="nir-btn">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- sidebar starts -->
                        <div class="col-lg-4">
                            <div class="sidebar-sticky">
                                <div class="popular-post sidebar-item mb-4 mt-3">
                                    <div class="sidebar-tabs">
                                        <div class="post-tabs">
                                            <!-- tab navs -->
                                            <h3 class="title-serupa">Wisata Serupa</h3>
                                            <hr />
                                            <!-- tab contents -->
                                            <div class="tab-content" id="postsTabContent1">
                                                <!-- popular posts -->
                                                <div aria-labelledby="popular-tab" class="tab-pane fade active show" id="popular" role="tabpanel">

                                                    <?php
                                                    $querySerupa = mysqli_query($koneksi, "SELECT * FROM tours WHERE category_id = " . $data['category_id']);

                                                    if (mysqli_num_rows($querySerupa) > 0) {
                                                        while ($dataSerupa = mysqli_fetch_array($querySerupa)) {

                                                            $queryImage  = mysqli_query($koneksi, "SELECT * FROM tour_images WHERE tour_id = " . $dataSerupa['id'] . " LIMIT 1");
                                                            $image = "";
                                                            if (mysqli_num_rows($queryImage) > 0) {
                                                                while ($dataImage = mysqli_fetch_array($queryImage)) {
                                                                    $image = $dataImage['image'];
                                                                }
                                                            }
                                                    ?>
                                                            <?php if ($data['tour_id'] != $dataSerupa['id']) { ?>

                                                                <article class="post mb-2 border-b pb-2">
                                                                    <div class="s-content d-flex align-items-center justify-space-between">
                                                                        <div class="sidebar-image w-25 me-3 rounded">
                                                                            <a href="./destination_detail.php?id=<?= $dataSerupa['id'] ?>"><img src="../uploads/<?= $image ?>" alt=""></a>
                                                                        </div>
                                                                        <div class="content-list w-75">
                                                                            <h5 class="mb-1"><a href="./destination_detail.php?id=<?= $dataSerupa['id'] ?>"><?= $dataSerupa['name'] ?></a></h5>
                                                                            <p style="font-size: 13px;"><?= mb_strimwidth($dataSerupa['address'], 0, 40, '...') ?></p>
                                                                            <div class="rating-main d-flex align-items-center">
                                                                                <?php
                                                                                $queryRate  = mysqli_query($koneksi, " SELECT COUNT(*) as total, avg(rating) as rating FROM comments WHERE tour_id = " . $dataSerupa['id']);
                                                                                ?>
                                                                                <?php if (mysqli_num_rows($queryRate) > 0) { ?>
                                                                                    <?php
                                                                                    while ($rate = mysqli_fetch_array($queryRate)) { ?>
                                                                                        <div class="rating me-2">
                                                                                            <?php for ($i = 0; $i < intval($rate['rating']); $i++) { ?>
                                                                                                <span class="fa fa-star checked"></span>
                                                                                            <?php } ?>
                                                                                        </div>
                                                                                        <span style="font-size: 13px;">(<?= $rate['total'] ?> Review)</span>
                                                                                <?php }
                                                                                } ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </article>

                                                            <?php } ?>

                                                    <?php }
                                                    } ?>
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
        } ?>
    <?php } ?>

    <?php
    include_once("./layouts-landing/modal.php");
    include_once("./layouts-landing/footer.php");

    include_once("./layouts-landing/script.php");
    ?>

</body>

</html>