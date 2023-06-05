<?php
include "../../../config/database.php";
$query = mysqli_query($koneksi, "SELECT * FROM tours 
LEFT JOIN categories ON tours.category_id = categories.id");
?>
<?php include_once "../../layouts/head.php" ?>

<body data-layout="detached" data-topbar="colored">

    <div class="container-fluid">
        <div id="layout-wrapper">

            <?php include_once "../../layouts/topbar.php" ?>

            <?php include_once "../../layouts/sidebar.php" ?>

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="page-title mb-0 font-size-18">Wisata</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wisata</a></li>
                                        <li class="breadcrumb-item active">Data Wisata</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <a href="./add.php" class="btn btn-primary waves-effect waves-light">
                                        <i class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i> Add Tours
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title pb-4">Data Wisata</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Kategori</th>
                                                <th>Deskripsi</th>
                                                <th>Alamat Wisata</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if (mysqli_num_rows($query) > 0) { ?>
                                                <?php
                                                $no = 1;
                                                while ($data = mysqli_fetch_array($query)) {
                                                ?>
                                                    <tr>
                                                        <td><?= $no ?></td>
                                                        <td><?= $data['category_name'] ?></td>
                                                        <td><?= $data['name'] ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <a href="edit.php?id=<?= $data["id"] ?>" class="btn btn-warning btn-sm">Edit</a>
                                                            <a href="core/process_delete.php?id=<?= $data["id"] ?>" class="btn btn-danger btn-sm">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php $no++;
                                                } ?>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

                </div>
            </div>
            <!-- end main content-->

        </div>
    </div>

    <?php include_once "../../layouts/script.php" ?>
</body>