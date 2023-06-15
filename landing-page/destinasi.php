<?php
include_once("./layouts-landing/head.php");

include "./config/database.php";

$search = $_GET['search'] ?? "";
$category = $_GET['category'] ?? "";

$where = "WHERE 1 = 1";
$whereAll = "WHERE 1 = 1";
if ($search != "") {
    $where .= " AND a.name LIKE '%$search%'";
    $whereAll .= " AND name LIKE '%$search%'";
}

if ($category != "") {
    $where .= " AND b.id = $category";
    $whereAll .= " AND category_id = $category";
}

$batas = 5;
$halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;

$previous = $halaman - 1;
$next = $halaman + 1;

$data = mysqli_query($koneksi, "SELECT * from tours $whereAll");
$jumlah_data = mysqli_num_rows($data);
$total_halaman = ceil($jumlah_data / $batas);
$nomor = $halaman_awal + 1;

$queryWisata  = mysqli_query($koneksi, "SELECT *, a.description as tour_description, a.id as tour_id, count(c.id) as total, AVG(rating) AS average_rating
FROM tours as a 
LEFT JOIN categories as b ON a.category_id = b.id
LEFT JOIN comments as c ON a.id = c.tour_id
$where
GROUP BY a.id, a.name
ORDER BY a.created_at DESC
LIMIT $halaman_awal, $batas");

$jumlah_data_paginate = mysqli_num_rows($queryWisata);
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

    <section class="trending pt-6 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-results d-flex align-items-center justify-content-between">
                        <div class="list-results-sort">
                            <p class="m-0">Menampilkan <?= $jumlah_data_paginate ?> dari <?= $jumlah_data ?> Wisata</p>
                        </div>
                        <div class="click-menu d-flex align-items-center justify-content-between">
                            <div class="sortby d-flex align-items-center justify-content-between">
                                <div class="newsletter-form rounded overflow-hidden position-relative" style="width: 300px;">
                                    <form action="" method="GET">
                                        <input type="text" name="search" placeholder="Cari Wisata..">
                                        <input type="submit" class="nir-btn bordernone rounded-0 position-absolute end-0" value="Cari">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="destination-list">

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

                                <div class="trend-full bg-white rounded box-shadow overflow-hidden p-4 mb-4">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3">
                                            <div class="trend-item2 rounded">
                                                <a href="./destination_detail.php?id=<?= $data['tour_id'] ?>" style="background-image: url(../uploads/<?= $image ?>);"></a>
                                                <div class="color-overlay"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="trend-content position-relative text-md-start text-center">
                                                <h3 class="mb-1"><a href="./destination_detail.php?id=<?= $data['tour_id'] ?>"><?= $data['name'] ?></a></h3>
                                                <h6 class="mb-0" style="color: #8a8a8a; font-size: 15px;"><?= $data['address'] ?></h6>
                                                <p class="mt-4 mb-0"><?= mb_strimwidth($data['tour_description'], 0, 200, '...') ?><br>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="trend-content text-md-end text-center">
                                                <div class="rating">
                                                    <?php for ($i = 0; $i < intval($data['average_rating']); $i++) { ?>
                                                        <span class="fa fa-star checked"></span>
                                                    <?php } ?>
                                                </div>
                                                <small><?= $data['total'] ?> Review</small>
                                                <div class="trend-price my-2">

                                                </div>
                                                <a href="./destination_detail.php?id=<?= $data['tour_id'] ?>" class="nir-btn" style="margin-top: 100px;">View Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            <nav class="pb-5">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" <?php if ($halaman > 1) {
                                                                    echo "href='?halaman=$previous'";
                                                                } ?>><<</a>
                                    </li>
                                    <?php
                                    for ($x = 1; $x <= $total_halaman; $x++) {
                                    ?>
                                        <li class="page-item <?= $halaman == $x ? "active" : "" ?>"><a class="page-link active" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                                    <?php
                                    }
                                    ?>
                                    <li class="page-item">
                                        <a class="page-link" <?php if ($halaman < $total_halaman) {
                                                                    echo "href='?halaman=$next'";
                                                                } ?>>>></a>
                                    </li>
                                </ul>
                            </nav>

                        <?php } else { ?>
                            <center>
                                <img src="./assets/images/empty.jpg" width="350" alt="">
                                <br /><span>Data Tidak di Temukan</span>
                            </center>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once("./layouts-landing/footer.php");

    include_once("./layouts-landing/script.php");
    ?>

</body>