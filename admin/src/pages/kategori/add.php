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
                                <h4 class="page-title mb-0 font-size-18">Tambah Kategori</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kategori</a></li>
                                        <li class="breadcrumb-item active">Tambah Kategori</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Form Tambah Kategori</h4>

                                    <form action="./process_add.php" method="POST" enctype="multipart/form-data">

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Gambar Kategori</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="file" name="image">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nama Kategori</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="name">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary waves-effect waves-light mt-5" style="float: right;">Submit</button>
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