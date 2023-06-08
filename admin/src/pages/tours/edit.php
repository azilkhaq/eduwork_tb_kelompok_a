<?php
include "../../../config/database.php";

$id = $_GET['id'];
$queryTour = mysqli_query($koneksi, "SELECT * FROM tours WHERE id = $id");

$query = mysqli_query($koneksi, "SELECT * FROM categories");

$queryImage = mysqli_query($koneksi, "SELECT * FROM tour_images WHERE tour_id = $id");
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
                                <h4 class="page-title mb-0 font-size-18">Edit Wisata</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Wisata</a></li>
                                        <li class="breadcrumb-item active">Edit Wisata</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title mb-4">Form Edit Wisata</h4>

                                    <form action="./process_edit.php" method="POST">
                                        <?php if (mysqli_num_rows($queryTour) > 0) { ?>
                                            <?php
                                            while ($dataTour = mysqli_fetch_array($queryTour)) {
                                            ?>

                                                <h4 class="card-title">Gambar Wisata</h4>
                                                <p class="card-title-desc">Unggah gambar dengan pratinjau gambar.</p>

                                                <div id="my-dropzone-edit" class="dropzone mb-4"></div>

                                                <div id="container-image-edit" style="display: none;"></div>

                                                <input class="form-control" type="text" name="id" value="<?= $id ?>" hidden>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Nama Wisata</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="name" value="<?= $dataTour['name'] ?>">
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
                                                                    <option value="<?= $data['id'] ?>" <?= $dataTour['category_id'] == $data['id'] ? 'selected' : '' ?>><?= $data['category_name'] ?></option>
                                                                <?php
                                                                } ?>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Deskirpsi</label>
                                                    <div class="col-md-10">
                                                        <textarea name="description" class="form-control"><?= $dataTour['description'] ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">Alamat Wisata</label>
                                                    <div class="col-md-10">
                                                        <textarea name="address" class="form-control"><?= $dataTour['address'] ?></textarea>
                                                    </div>
                                                </div>

                                                <div class="mb-3 row">
                                                    <label for="example-text-input" class="col-md-2 col-form-label">URL Map</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="urlMap" value="<?= $dataTour['url_map'] ?>">
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

<?php

$images = [];

if (mysqli_num_rows($queryImage) > 0) {
    while ($dataImage = mysqli_fetch_array($queryImage)) {
        array_push($images, $dataImage['image']);
    }
}

?>

<script>
    Dropzone.autoDiscover = false;

    let images = '<?= json_encode($images) ?>';
    images = JSON.parse(images);

    let defaultFiles = [];

    for (let i = 0; i < images.length; i++) {
        var filename = images[i];
        var cleanedFilename = filename.substring(0, filename.lastIndexOf('.'));

        defaultFiles.push({
            name: images[i],
            size: 35000,
            dataURL: "../../../../uploads/" + images[i],
            upload: {
                uuid: cleanedFilename
            }
        });

        var fileInput = $(`<input type='text' name='image_files[]' id='${cleanedFilename}' value='${images[i]}'>`);
        $("#container-image-edit").append(fileInput);
    }

    var myDropzoneEdit = new Dropzone("#my-dropzone-edit", {
        init: function() {
            for (var i = 0; i < defaultFiles.length; i++) {
                var defaultFile = defaultFiles[i];
                this.files.push(defaultFile);
                this.emit("addedfile", defaultFile);
                this.createThumbnailFromUrl(defaultFile, this.options.thumbnailWidth, this.options.thumbnailHeight, this.options.thumbnailMethod, true, function(thumbnail) {
                    this.emit("thumbnail", defaultFile, thumbnail);
                }.bind(this));
                this.emit("complete", defaultFile);
            }
        },
        url: "../../../helpers/upload_image.php",
        maxFilesize: 5,
        acceptedFiles: ".png, .jpg, .jpeg",
        addRemoveLinks: true,
        dictDefaultMessage: "Drop files here or click to upload",
        success: function(file, response) {
            var fileInput = $(`<input type='text' name='image_files[]' id='${file.upload.uuid}' value='${response.filename}'>`);
            $("#container-image-edit").append(fileInput);
        },
        error: function(file, response) {
            console.log(response);
        }
    });

    myDropzoneEdit.on("removedfile", function(file) {

        console.log(file.upload.uuid);

        $(`#${file.upload.uuid}`).remove();
    });
</script>