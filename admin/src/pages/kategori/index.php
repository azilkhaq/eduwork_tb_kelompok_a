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
                                <h4 class="page-title mb-0 font-size-18">Kategori</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kategori</a></li>
                                        <li class="breadcrumb-item active">Data Kategori</li>
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
                                        <i class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i> Tambah
                                        Kategori
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Kategori Data</h4>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar Kategori</th>
                                                <th>Nama Kategori</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            include('./koneksi.php');
                                            $query = mysqli_query($conn, "SELECT * FROM categories");
                                            while ($data = mysqli_fetch_array($query)) {
                                                $i++;
                                            ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i ?>
                                                    </td>
                                                    <td>
                                                       <img src="../../../../uploads/<?= $data['image'] ?>" width="130" height="130" alt="image">
                                                    </td>
                                                    <td>
                                                        <?php echo $data['category_name'] ?>
                                                    </td>
                                                    <td>
                                                        <a class="btn btn-warning btn-sm" href="edit.php?id=<?= $data['id']; ?>"> <i class="bx bx-edit-alt font-size-16 align-middle me-1"></i>Ubah</a>
                                                        <a class="btn btn-danger btn-sm" href="process_delete.php?id=<?= $data['id']; ?> " onclick="return confirm('Yakin dihapus')"><i class="bx bx-trash-alt font-size-16 align-middle me-1"></i>Hapus</a>
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