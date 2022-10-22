<?php

require_once "config/database.php";

$data = mysqli_query($db, "SELECT * FROM buku INNER JOIN kategori ON kategori.id_kategori=buku.id_kategori INNER JOIN pengarang ON pengarang.id_pengarang=buku.id_pengarang INNER JOIN penerbit ON penerbit.id_penerbit=buku.id_penerbit WHERE id_buku = '$_GET[id_buku]'");

	// var_dump ($data);
	// die();
$row = mysqli_fetch_array ($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplikasi CRUD</title>

	<link rel="shortcut icon" href="assets/img/favicon.png">

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/datepicker.min.css" rel="stylesheet">

	<link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">
					<i class="glyphicon glyphicon-check"></i>
					Muslim Book Store
				</a>
			</div>
		</div> 
	</nav>

	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h4>
						<i class="glyphicon glyphicon-user"></i> Detail Data Buku


					</h4>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Data Buku</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4 text-center">
								<img src="assets/img/<?= $row['gambar'] ?>" width="80%">
							</div>
							<div class="col-md-4">
								<table class="table table-bordered table-striped">
									<tr>
										<th>ID Buku</th>
										<td width="10px">:</td>
										<td><?= $row['id_buku'] ?></td>
									</tr>
									<tr>
										<th>Penulis</th>
										<td width="10px">:</td>
										<td><?= $row['nama_pengarang'] ?></td>
									</tr>
									<tr>
										<th>Penerbit</th>
										<td width="10px">:</td>
										<td><?= $row['nama_penerbit'] ?></td>
									</tr>
									<tr>
										<th>Kategori</th>
										<td width="10px">:</td>
										<td><?= $row['nama_kategori'] ?></td>
									</tr>
									<tr>
										<th>Stok</th>
										<td width="10px">:</td>
										<td><?= $row['stok'] ?></td>
									</tr>
									<tr>
										<th>Berat</th>
										<td width="10px">:</td>
										<td><?= $row['berat'] ?></td>
									</tr>
									<tr>
										<th>Harga</th>
										<td width="10px">:</td>
										<td><?= $row['harga'] ?></td>
									</tr>
									<tr>
										<th>Deskripsi</th>
										<td width="10px">:</td>
										<td><?= $row['deskripsi'] ?></td>
									</tr>
								</table>
							</div>
						</div>
						<a href="index.php" class="btn btn-primary"><< Kembali</a>
					</div>
				</div>

			</div>
		</div>

	</div>

	<footer class="footer">
		<div class="container-fluid">
			<p class="text-muted pull-left"></p>
			<p class="text-muted pull-right "><a href="http://www.getbootstrap.com" target="_blank"></a></p>
		</div>
	</footer>

</body>
</html>