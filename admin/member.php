<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<title>Member</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-none">
		<span class="navbar-brand pl-5 mb-0 h1">DAUNTLESS</span>
		<div class="pc-x">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../index.php">Home</a>
				</li>
				<li class="nav-active">
					<a class="nav-link" href="member.php"><b>Member</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="jadwal.php">Jadwal</a>
				</li>
			</ul>
		</div>
	</nav>

    <main>
		<div class="pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="content-box rounded">
							<div class="row pt-5 pb-5">
							<?php
							include_once('koneksi.php');
							$sql = 'SELECT * FROM member';
							$result = mysqli_query($conn, $sql)
							?>
							<table class="table table-dark pt-5 pb-5 rounded">
								<thead>
								    <tr>
								      <th scope="col">id Member</th>
								      <th scope="col">Nama Member</th>
								      <th scope="col">Alamat</th>
								      <th scope="col">Kontak</th>
								      <th scope="col">Action</th>
								    </tr>
								</thead>
				  				<tbody>
									<?php while ($data = mysqli_fetch_object($result)){?>
									<tr>
										<th scope="row"><?= $data->id_member ?></th>
										<td><?= $data->nama_member ?></td>
										<td><?= $data->alamat ?></td>
										<td><?= $data->kontak_member ?></td>
										<td>
											<a class="btn btn-danger" href="member_delete.php?id=<?= $data->id_member ?>">Hapus
										</td>
									</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</main>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>