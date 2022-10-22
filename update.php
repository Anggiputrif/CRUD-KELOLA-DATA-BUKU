<?php
require_once "config/database.php";

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$id_pengarang = $_POST['id_pengarang'];
$id_penerbit = $_POST['id_penerbit'];
$id_kategori = $_POST['id_kategori'];
$stok = $_POST['stok'];
$berat = $_POST['berat'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$ekstensi_diperbolehkan	= array('png','jpg');
$gambar = $_FILES['gambar']['name'];
$x = explode('.', $gambar);
$ekstensi = strtolower(end($x));
$file_tmp = $_FILES['gambar']['tmp_name'];

if (!empty($gambar)){
	if (in_array($ekstensi, $ekstensi_diperbolehkan) === true){

                //Mengupload gambar
		move_uploaded_file($file_tmp, 'assets/img/'.$gambar);
	}
}

if(empty($gambar)){
	$query = mysqli_query($db, "UPDATE buku SET judul_buku = '$judul_buku', id_pengarang = '$id_pengarang', id_penerbit = '$id_penerbit', id_kategori = '$id_kategori', stok = '$stok', berat = '$berat', harga = '$harga', deskripsi = '$deskripsi' WHERE id_buku = '$id_buku'");
}else{
	$query = mysqli_query($db, "UPDATE buku SET judul_buku = '$judul_buku', id_pengarang = '$id_pengarang', id_penerbit = '$id_penerbit', id_kategori = '$id_kategori', stok = '$stok', berat = '$berat', harga = '$harga', deskripsi = '$deskripsi', gambar = '$gambar' WHERE id_buku = '$id_buku'");

}

// mysqli_query($db, $query)
// or die ("Gagal Perintah SQL".mysql_error());

$data['hasil'] = 'sukses';

echo json_encode($data);

?>

