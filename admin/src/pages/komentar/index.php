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
                                <h4 class="page-title mb-0 font-size-18">Komentar</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Komentar</a></li>
                                        <li class="breadcrumb-item active">Data Komentar</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title pb-4">Data Komentar</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Wisata</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Rating</th>
                                        <th>Note</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    include('./koneksi.php');
                                    $query = mysqli_query($conn, "SELECT * FROM comments LEFT JOIN tours ON comments.tour_id = tours.id");
                                    while ($data = mysqli_fetch_array($query)) {
                                        $i++;
                                    ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $data['name'] ?></td>
                                            <td><?php echo $data['fullname'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['rating'] ?></td>
                                            <td><?php echo $data['note'] ?></td>
                                            <td><?php echo $data['created_at'] ?></td>
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