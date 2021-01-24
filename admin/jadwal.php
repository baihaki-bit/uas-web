<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
	<link rel="stylesheet" type="text/css" href="./assets/style.css">
	<title>Jadwal</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-none">
		<span class="navbar-brand pl-5 mb-0 h1">DAUNTLESS</span>
		<div class="pc-x">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../">Home</a>
				</li>
				<li class="nav-active">
					<a class="nav-link" href="member.php">Member</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="jadwal.php"><b>Jadwal</b></a>
				</li>
			</ul>
		</div>
	</nav>

    <main>
		<div class="pt-5 pb-5">
			<div class="container">
				<div class="table-responsive">
					<div class="table-wrapper">
						<div class="table-title">
							<div class="row">
								<div class="col-sm-6">
									<h2>Manage <b>Jadwal</b></h2>
								</div>
							</div>
						</div>
						<?php
						include_once('koneksi.php');
						$sql = 'SELECT * FROM jadwal';
						$result = mysqli_query($conn, $sql)
						?>
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Hari</th>
									<th>Jenis Latihan</th>
									<th>Pelatih</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($data = mysqli_fetch_object($result)){?>
								<tr>
									<td><?= $data->hari ?></td>
									<td><?= $data->jenis_latihan ?></td>
									<td><?= $data->pelatih ?></td>
									<td>
										<a href="jadwal_edit.php?day=<?= $data->hari ?>" data-toggle="modal">
											<img style="height: 20px" class="pl-3" src="../assets/icon/pen-writing-256.webp">
									</td>

								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
				
			</div>
		</div>
	</main>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>