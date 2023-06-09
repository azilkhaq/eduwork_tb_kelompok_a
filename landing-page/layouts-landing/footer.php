<?php
include_once("./layouts-landing/head.php");
include "./config/database.php";

$queryCategory  = mysqli_query($koneksi, "SELECT * FROM categories");

?>
 <!-- footer starts -->
 <footer class="pt-20 pb-4" style="background-image: url(assets/images/background_pattern.png);">
        <div class="section-shape top-0" style="background-image: url(assets/images/shape8.png);"></div>
        <div class="footer-upper pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4 pe-4">
                        <div class="footer-about">
                            <img src="assets/images/logo-white.png" alt="">
                            <p class="mt-3 mb-3 white">
                            Temukan wisata-wisata impianmu disini dan buat pengalamanmu yang menakjubkan.
                            </p>
                            <!-- <ul>
                                <li class="white"><strong>Whatsapp:</strong> +47-252-254-2542</li>
                                <li class="white"><strong>Location:</strong> Jakarta, Indonesia</li>
                                <li class="white"><strong>Email:</strong> info@Travelin.com</li>
                                <li class="white"><strong>Website:</strong> www.Travelin.com</li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Menu</h3>
                            <ul>
                                <li><a href="about.php">Tentang Kami</a></li>
                                <li><a href="destinasi.php">Wisata</a></li>
                                <li><a href="gallery.php">Galeri</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Kategori</h3>
                            <?php if (mysqli_num_rows($queryCategory) > 0) { ?>
                            <?php
                            while ($data = mysqli_fetch_array($queryCategory)) {
                            ?>
                            <ul>
                                <li><a href="destinasi.php?category=<?= $data['id'] ?>"><?= $data['category_name'] ?></a></li>
                            </ul>
                            <?php }
                        } ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="footer-links">
                            <h3 class="white">Kritik dan Saran</h3>
                            <div class="newsletter-form ">
                                <form action="process_suggestion.php" method="post" accept-charset="utf-8" class="border-0">
                                    <input type="text" placeholder="Email" name="email" style="margin-bottom: 10px;">
                                    <input type="text" placeholder="Saran" name="suggestion" style="margin-bottom: 10px;">
                                    <button type="submit" class="nir-btn ms-2" style="float: right;">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright">
            <div class="container">
                <div class="copyright-inner rounded p-3 d-md-flex align-items-center justify-content-between">
                    <div class="copyright-text">
                        <p class="m-0 white">2023 Travelin. All rights reserved.</p>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </footer>
    <!-- footer ends -->