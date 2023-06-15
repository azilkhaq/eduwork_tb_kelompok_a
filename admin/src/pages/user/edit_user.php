<?php
include "../../../config/database.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id = $id");

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
                                <h4 class="page-title mb-0 font-size-18">Edit User</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">User</a></li>
                                        <li class="breadcrumb-item active">Edit User</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Form Edit User</h4>

                                    <form action="./proses_update.php" method="POST">
                                        <?php if (mysqli_num_rows($query) > 0) { ?>
                                            <?php
                                            while ($data = mysqli_fetch_array($query)) {
                                            ?>

                                                <input class="form-control" type="text" name="id" value="<?= $id ?>" hidden>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama User</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="fullname" value="<?= $data['fullname'] ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Email</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="email" value="<?= $data['email'] ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Password</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="password">
                                                        <p class="info-pass">* isi jika ingin mengubah password</p>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-primary waves-effect waves-light mt-5" style="float: right;">Submit</button>

                                            <?php } ?>
                                        <?php } ?>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                </div>
            </div>
            <!-- end main content-->

        </div>
    </div>

    <?php include_once "../../layouts/script.php" ?>
</body>

