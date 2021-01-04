<?php
    $title="Edit Barang";
    require"includes/header.php";

    $id = $_GET['id'];

    $aVar = new mysqli('localhost', 'root', '','online_shop');
    if(isset($_POST['update'])){
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $kategori = $_POST['kategori'];

        if(!empty($_FILES['gambar']['name'])) {
            $gambar = $_FILES['gambar']['name'];
            $file = $_FILES['gambar']['tmp_name'];

            $path = "../assets/barang/";
            (move_uploaded_file($file, $path.$gambar));
            $query = mysqli_query($aVar, "update barang set nama_barang = '$nama', harga_barang = '$harga', id_kategori = '$kategori', gambar_barang = '$gambar' 
                                                            where id_barang='$id' ");

        }else{
            $query = mysqli_query($aVar, "update barang set nama_barang = '$nama', harga_barang = '$harga', id_kategori = '$kategori'
                                                        where id_barang='$id' ");

        }

        

            
            if($query) {
                echo "<meta http-equiv='refresh' content='0,url=".BASE_URL."admin/barang.php'";
            }
        

        
    }
    $Qbarang = mysqli_query ($aVar, "select * from barang where id_barang = '$id'");
    $barang = mysqli_fetch_assoc($Qbarang);
?>
    <div class="container-fluid">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="<?=BASE_URL;?>/admin/index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?=BASE_URL;?>/admin/barang.php">Tables Barang</a>
                    </li>
                    <li class="breadcrumb-item active">Tables Edit Barang</li>
                </ol>

                <div class="card mb-3">
                    <div class="card-header" style="color:black">
                        <i class="fas fa-table"></i> Data Edit Barang</div>
                    <div class="card-body">
                        <form method="post" action="" enctype="multipart/form-data" style="color:black">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" name="nama" value="<?=$barang['nama_barang'];?>" class="form-control" placeholder="Nama Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Barang</label>
                                        <input type="number" name="harga" value="<?=$barang['harga_barang'];?>" class="form-control" placeholder="Harga Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Gambar Barang</label>
                                        <input type="file" name="gambar" class="form-control"> <br>
                                        <img src="<?=BASE_URL;?>assets/barang/<?=$barang['gambar_barang'];?> "width="100" height="100">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Barang</label>
                                        <select name="kategori" class="form-control" required>
                                            <option>-- Pilih Kategori</option>
                                            <?php
                                                $Qkategori = mysqli_query($conn, "SELECT * FROM kategori");
                                                $kategori = mysqli_fetch_assoc($Qkategori);

                                                do {
                                                    $select = "";
                                                    if($barang['id_kategori'] == $kategori['id_kategori']) {
                                                        $select = "selected";
                                                    }
                                            ?>                              
                                                <option value="<?=$kategori['id_kategori'];?>" <?=$select;?>><?=$kategori['nama_kategori'];?></option>
                                            <?php
                                                }while($kategori = mysqli_fetch_assoc($Qkategori))
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-success">
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script src="<?=BASE_URL;?>assets/js/sb-admin.min.js"></script>

</body>

</html>