<?php
include('koneksi.php');
$id=$_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM categories WHERE id='$id'");

while ($categories = mysqli_fetch_array($query)){
    $category_name = $categories['category_name'];
    
}
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
                                <h4 class="page-title mb-0 font-size-18">Edit Kategori</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Kategori</a></li>
                                        <li class="breadcrumb-item active">Edit Kategori</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Edit Data</h4>
                                    <p class="card-title-desc">Here are examples of <code>.form-control</code> applied
                                        to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>

                                    <form action="proses_ubah.php?id=<?php echo $id ?>" method="post">

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nama
                                                Kategori</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" id="example-text-input"
                                                    value="<?php echo $categories; ?> ">
                                            </div>
                                        </div>
                                </div>
                                <button type="button" class="btn btn-primary waves-effect waves-light">Submit</button>
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