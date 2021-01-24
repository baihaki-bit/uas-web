<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
    <style type="text/css">
        label {
            color: black;
        }
    </style>
    <title>Member</title>
</head>
<body>
    <div class="modal-dialog">
        <div class="modal-content mt-5">
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
                <div class="modal-header">                      
                    <h4 class="modal-title">Edit Jadwal</h4>
                    
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Hari</label>
                        <input type="text" class="form-control" name="txt_hari" value="<?= $data->hari ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Jenis Latihan</label>
                        <input type="text" class="form-control" name="txt_jenis_latihan" value="<?=$data->jenis_latihan ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Pelatih</label>
                        <input type="text" class="form-control" name="txt_pelatih"  value="<?=$data->pelatih ?>" required>
                    </div>              
                </div>
                <div class="modal-footer">
                    <a class="btn btn-default" href="jadwal.php">Cancel</a>
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>
</html>