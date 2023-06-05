<?php
include('connection.php');
$id=$_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM facilities WHERE id='$id'");

while ($facilities = mysqli_fetch_array($query)){
    $facility_name = $facilities['facility_name'];
    $tour_id = $facilities['tour_id'];
    
}
?>
<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM facilities WHERE id = $id");
?>

<?php
include('connection.php');
$query = mysqli_query($koneksi, "SELECT * FROM tours");
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
                                <h4 class="page-title mb-0 font-size-18">Edit Data Fasilitas</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Fasilitas</a></li>
                                        <li class="breadcrumb-item active">Edit Fasilitas</li>
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
                                       
                                        <form action="process_edit.php?id=<?php echo $id ?>" method="post">
                                        <?php if (mysqli_num_rows($query) > 0) { ?>
                                        <?php
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>

                                    <div class="mb-3 row">
                                        <label for="example-text-input" class="col-md-2 col-form-label">Nama Fasilitas</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="example-text-input" value="<?= $facilities['facility_name'] ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                            <label class="col-md-2 col-form-label">Wisata</label>
                                            <div class="col-md-10">
                                                <select class="form-select" aria-label="Default select example" name="tour">
                                                    <option value="">Pilih Wisata</option>
                                                    <?php if (mysqli_num_rows($query) > 0) { ?>
                                                        <?php
                                                        while ($data = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                                        <?php
                                                        } ?>
                                                    <?php } ?>
                                                    <?php
                                                        } ?>
                                                    <?php } ?>
                                                </select>
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