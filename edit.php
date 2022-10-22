
<?php

require_once "config/database.php";

$data = mysqli_query($db, "SELECT * FROM buku WHERE id_buku = '$_POST[id]'");

	// var_dump ($data);
	// die();
$row = mysqli_fetch_array ($data);

?>
<form role="form" id="form-edit" method="post" action="update.php" enctype="multipart/form-data">
	<div class="form-group">
		<label>ID Buku</label>
		<input type="text" name="id_buku" id="id_buku" class="form-control" value="<?php echo $row['id_buku'] ; ?>" readonly>
	</div>

	<div class="form-group">
		<label>Judul Buku</label>
		<input type="text" name="judul_buku" id="judul_buku" class="form-control" value="<?php echo $row['judul_buku'] ; ?>" required>
	</div>

	<div class="form-group">
		<label>Penulis</label>
		<select class="form-control" name="id_pengarang" id="id_pengarang" required>
			
			<?php

			$query = mysqli_query($db,"SELECT * FROM pengarang");
			$hitung_data = mysqli_num_rows($query);
			if ($hitung_data > 0) {
				while ($data = mysqli_fetch_array($query)) {
					?>
					<option value="<?php echo $data['id_pengarang']; ?>" <?= ($row['id_pengarang'] == $data['id_pengarang']) ? 'selected' : '' ?>><?php echo $data['nama_pengarang']; ?></option>
				<?php } } ?> 
			</select>
		</div>

		<div class="form-group">
			<label>Penerbit</label>
			<select class="form-control" name="id_penerbit" id="id_penerbit" required>
				
				<?php

				$query = mysqli_query($db,"SELECT * FROM penerbit");
				$hitung_data = mysqli_num_rows($query);
				if ($hitung_data > 0) {
					while ($datap = mysqli_fetch_array($query)) {
						?>
						<option value="<?php echo $datap['id_penerbit']; ?>" <?= ($row['id_penerbit'] == $datap['id_penerbit']) ? 'selected' : '' ?>><?php echo $datap['nama_penerbit']; ?></option>
					<?php } } ?> 
				</select>
			</div>

			<div class="form-group">
				<label>Kategori</label>
				<select class="form-control" name="id_kategori" id="id_kategori" required>
					
					<?php
					$query = mysqli_query($db,"SELECT * FROM kategori");
					$hitung_data = mysqli_num_rows($query);
					if ($hitung_data > 0) {
						while ($data = mysqli_fetch_array($query)) {
							?>
							<option value="<?php echo $data['id_kategori']; ?>" <?= ($row['id_kategori'] == $data['id_kategori']) ? 'selected' : '' ?>><?php echo $data['nama_kategori']; ?></option>
						<?php } } ?> 
					</select>
				</div>

				<div class="form-group">
					<label>Stok</label>
					<input type="text" class="form-control" name="stok" id="stok" value="<?php echo $row['stok'] ; ?>" required>
				</div>

				<div class="form-group">
					<label>Berat</label>
					<input type="text" class="form-control" name="berat" id="berat" value="<?php echo $row['berat'] ; ?>" required>
				</div>

				<div class="form-group">
					<label>Harga</label>
					<input type="text" class="form-control" name="harga" id="harga" value="<?php echo $row['harga'] ; ?>" required>
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required><?php echo $row['deskripsi'] ; ?></textarea>
				</div>

				<div class="form-group">
					<label>Ganti Gambar</label>
					<input type="file" class="form-control" name="gambar" id="gambar">
				</div>

			</form>