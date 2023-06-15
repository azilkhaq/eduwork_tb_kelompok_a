<?php
include "../../../config/database.php";
$query = mysqli_query($koneksi, "SELECT * FROM categories");
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
                                <h4 class="page-title mb-0 font-size-18">Tambah Wisata</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wisata</a></li>
                                        <li class="breadcrumb-item active">Tambah Wisata</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Form Tambah Wisata</h4>

                                    <form action="process_add.php" method="POST">

                                        <h4 class="card-title">Gambar Wisata</h4>
                                        <p class="card-title-desc">Unggah gambar dengan pratinjau gambar.</p>

                                        <div id="my-dropzone" class="dropzone mb-4"></div>

                                        <div id="container-image" style="display: none;"></div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Nama Wisata</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="name">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Pilih Kategori</label>
                                            <div class="col-md-10">
                                                <select class="form-select" aria-label="Default select example" name="category">
                                                    <option selected="">Pilih Kategori</option>
                                                    <?php if (mysqli_num_rows($query) > 0) { ?>
                                                        <?php
                                                        while ($data = mysqli_fetch_array($query)) {
                                                        ?>
                                                            <option value="<?= $data['id'] ?>"><?= $data['category_name'] ?></option>
                                                        <?php
                                                        } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Deskirpsi</label>
                                            <div class="col-md-10">
                                                <textarea name="description" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Alamat Wisata</label>
                                            <div class="col-md-10">
                                                <textarea name="address" class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">URL Map</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" name="urlMap">
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

<script>
    Dropzone.autoDiscover = false;
    var myDropzone = new Dropzone("#my-dropzone", {
        url: "../../../helpers/upload_image.php",
        maxFilesize: 5,
        acceptedFiles: ".png, .jpg, .jpeg",
        addRemoveLinks: true,
        dictDefaultMessage: "Drop files here or click to upload",
        success: function(file, response) {
            var fileInput = $(`<input type='text' name='image_files[]' id='${file.upload.uuid}' value='${response.filename}'>`);
            $("#container-image").append(fileInput);
        },
        error: function(file, response) {
            console.log(response);
        }
    });

    myDropzone.on("removedfile", function(file) {
        $(`#${file.upload.uuid}`).remove();
    });
</script>