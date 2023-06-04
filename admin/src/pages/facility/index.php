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
                                <h4 class="page-title mb-0 font-size-18">Facility</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Facility</a></li>
                                        <li class="breadcrumb-item active">Facility</li>
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
                                        <i class="bx bxs-add-to-queue font-size-16 align-middle me-2"></i> Add Facility
                                    </a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">

                                    <h4 class="card-title">Facility Data</h4>
                                    <p class="card-title-desc">DataTables has most features enabled by default, so all
                                        you need to do to use it with your own tables is to call the construction
                                        function: <code>$().DataTable();</code>.
                                    </p>

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Facility Name</th>
                                                <th>Tour id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include ('./connection.php');
                                            $query = mysqli_query($koneksi, "SELECT * FROM facilities");
                                            while($data = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
            <td class="text-center"><?php echo $data['id'] ?></td>
            <td class="text-center"><?php echo $data['facility_name'] ?></td>
            <td class="text-center"><?php echo $data['tour_id'] ?></td>
            <td class="text-center">
            <a  class="btn btn-warning" href="edit.php?id=<?= $data['id']; ?>">Edit</a>
            <a  class="btn btn-danger" href="delete.php?id=<?= $data['id']; ?> " onclick="return confirm('Yakin dihapus')">Delete</a>
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
    $(document).ready(function(){
        $('#mytable').DataTable();

    });
</script>

    <?php include_once "../../layouts/script.php" ?>
</body>