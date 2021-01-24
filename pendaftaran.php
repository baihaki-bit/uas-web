<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Pendaftaran</title>
	</head>
	<body>
		<div class="container">
			<?php
			    $status = '';
			    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			        # code...
			        include_once('koneksi.php');

			        $nama = $_POST['nama_lengkap'];
			        $alamat = $_POST['alamat'];
			        $kontak = $_POST['kontak'];
			        $sql = "INSERT into member VALUES(NULL,'$nama','$alamat','$kontak')";
			        $result = mysqli_query($conn,$sql);

			        if ($result) {
			            # code...
			            header("Data berhasi ditambahkan");
			        }else{
			            $status = "Simpan data gagal :".mysqli_error($conn);
			        }
			    }
			?>
			<form action="" method="post">
				<div>
					<label>Nama Lengkap: </label>
					<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
				</div>
				<div>
					<label>Alamat:</label>
					<textarea name="alamat" class="form-control" rows="5"placeholder="Alamat" ></textarea>
				</div>
				<div>
					<label>No. Handphone: </label>
					<input type="number" name="kontak" class="form-control" placeholder="contoh: 08123456789">
				</div>
				<button type="submit" name="submit" class="btn btn-primary">DAFTAR</button>
			</form>
		</div>
	</body>
</html>