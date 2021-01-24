<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/js/bootstrap.min.js">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <?php
                        include_once("koneksi.php");
                        $status = '';
                        $day = $_GET['day'];
                        $sql = "SELECT * FROM jadwal WHERE hari = '$day'";
                        $result = mysqli_query($conn,$sql);
                        $data = mysqli_fetch_object($result);

                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            # code...
                            $hari = $_POST['txt_hari'];
                            $jenis_latihan = $_POST['txt_jenis_latihan'];
                            $pelatih = $_POST['txt_pelatih'];
                            $sql = "UPDATE jadwal SET jenis_latihan='$jenis_latihan', pelatih='$pelatih' WHERE hari ='$hari'";
                            $result = mysqli_query($conn,$sql);

                            if ($result) {
                                # code...
                                header("Location: jadwal.php");
                            }else{
                                $status = "Simpan data gagal :".mysqli_error($conn);
                            }
                        }
                        ?>
                        <form action="jadwal_edit.php" method="post">
                            <div class="form-group">
                                <label>Hari</label>
                                <input type="text" class="form-control" name="txt_hari"  placeholder="Example input" value="<?= $data->hari ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label>Jenis Latihan</label>
                                <input type="text" class="form-control" type="text" name="txt_jenis_latihan" placeholder="Masukkan Jenis Latihan" value="<?=$data->jenis_latihan ?>">
                          </div>
                          <div class="form-group">
                                <label>Pelatih</label>
                                <input type="text" class="form-control" type="text" name="txt_pelatih" placeholder="Masukkan Nama Pelatih" value="<?=$data->pelatih ?>">
                          </div>
                          <input class="btn btn-info ml-4 mr-5" type="submit" value="UBAH">
                          <a class="btn btn-primary ml-5 " href="jadwal.php">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>