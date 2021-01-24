<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<title>Dauntless Gym</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-none">
		<span class="navbar-brand pl-5 mb-0 h1">DAUNTLESS</span>
		<div class="pc-x">
			<ul class="navbar-nav">
				<li class="nav-active">
					<a class="nav-link" href="">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Classes</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Feature</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">About</a>
				</li>
			</ul>
		</div>
	</nav>

    <main>
		<div class="pt-2 pb-2">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="content-box rounded">
							<div class="row">
								<div class="col-md-7 lcon">
									<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								</div>
								<div class="col-md-5">
									<div class="content-box-daftar rounded">
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
											<div class="isi">
												<label>Nama Lengkap: </label>
												<input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
											</div>
											<div class="isi">
												<label>Alamat:</label>
												<textarea name="alamat" class="form-control" rows="5"placeholder="Alamat" ></textarea>
											</div>
											<div class="isi">
												<label>No. Handphone: </label>
												<input type="number" name="kontak" class="form-control" placeholder="Kontak">
											</div>
											<div class="rcon">
												<button type="submit" name="submit" class="btn btn-x">DAFTAR</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</main>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>