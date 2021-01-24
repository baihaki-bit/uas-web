<?php
    include_once("koneksi.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM member WHERE id_member = $id";
    $result = mysqli_query($conn,$sql);

    if ($result) {
        # code...
        header("Location: member.php");
    }else{
        $status = "Hapus data gagal :".mysqli_error($conn);
    }


    echo $status
?>

<br><br>
<a href="member.php">Kembali</a>