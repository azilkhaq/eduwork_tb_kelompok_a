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
                                <h4 class="page-title mb-0 font-size-18">Fasilitas</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Fasilitas</a></li>
                                        <li class="breadcrumb-item active">Fasilitas</li>
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
                                        <i class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i> Tambah Fasilitas
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title pb-4">Data Fasilitas</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Fasilitas</th>
                                                <th>Wisata</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            include('./connection.php');
                                            $query = mysqli_query($koneksi, "SELECT *,facilities.id as id_facilities FROM facilities LEFT JOIN tours ON facilities.tour_id = tours.id");
                                            while ($data = mysqli_fetch_array($query)) {
                                            $i++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $i ?></td>
                                                    <td><?php echo $data['facility_name'] ?></td>
                                                    <td><?php echo $data['name'] ?></td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $data['id_facilities']; ?>"> <i class="bx bx-edit-alt font-size-16 align-middle me-1"></i>Ubah</a>
                                                        <a class="btn btn-danger btn-sm" href="delete.php?id=<?= $data['id_facilities']; ?> " onclick="return confirm('Yakin dihapus')"><i class="bx bx-trash-alt font-size-16 align-middle me-1"></i>Hapus</a>
                                                </tr>
                                            <?php
                                            }
                                            ?>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#mytable').DataTable();
        });
    </script>

    <?php include_once "../../layouts/script.php" ?>
</body>