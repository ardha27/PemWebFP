<?php
$title = "Daftar Kategori";
    require"includes/header.php";
?>
    <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=BASE_URL;?>/admin/index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Tables Kategori</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header" style="color:black">
                        <i class="fas fa-table"></i> Data Table Kategori
                        <a href="kategori_tambah.php" class="btn btn-sm btn-info">Tambah</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:black">
                                <thead>
                                    <tr>
                                        <th style='text-align:center'>No</th>
                                        <th style='text-align:center'>Name</th>
                                        <th style='text-align:center'>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody style="width:100%">
                                    <?php
                                        $query = mysqli_query($conn, "select * from kategori");
                                        $data = mysqli_fetch_assoc($query);
                                        if(mysqli_num_rows($query) > 0) {
                                        $no = 1;
                                        do {
                                    ?>
                                    <tr>
                                        <td style="width:5%;text-align:center"><?=$no++;?></td>
                                        <td style="width:80%;text-align:center"><?=$data['nama_kategori'];?></td>
                                        <td style="width:15%;text-align:center">
                                            <a href="kategori_edit.php?id=<?=$data['id_kategori'];?>" class="btn btn-sm btn-success">Edit</a>
                                            <a href="kategori_delete.php?id=<?=$data['id_kategori'];?>" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }while($data = mysqli_fetch_assoc($query));
                                    }else{
                                        echo "<tr><td colspan='3'><center>Belum ada data!</center></td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="<?=BASE_URL;?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=BASE_URL;?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>
    <script src="<?=BASE_URL;?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>