<div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Data Buku</h3>
  </div>
  <div class="panel-body">
      <div class="table-responsive">

        <table class="table table-striped table-bordered display" id="myTable" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                require_once "config/database.php";

                $keyword="";
                if (isset($_POST['search'])) {
                    $keyword = $_POST['search'];
                }

                $sortir="";
                if (isset($_POST['sort'])) {
                    $sortir = $_POST['sort'];
                }


                if($sortir == 'DESC'){

                    $query = mysqli_query($db,"SELECT * FROM buku INNER JOIN kategori ON kategori.id_kategori=buku.id_kategori INNER JOIN pengarang ON pengarang.id_pengarang=buku.id_pengarang WHERE judul_buku LIKE '%".$keyword."%' ORDER BY judul_buku DESC");
             // }

                    $hitung_data = mysqli_num_rows($query);
                    if ($hitung_data > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td>
                                    <img src="assets/img/<?php echo $data['gambar']; ?>" width="150px">
                                </td>
                                <td><?php echo $data['judul_buku']; ?></td>
                                <td><?php echo $data['nama_kategori']; ?></td>
                                <td><?php echo $data['nama_pengarang']; ?></td>
                                <td>
                                    <a href="detail.php?id_buku=<?php echo $data['id_buku']; ?>">Detail</a> |
                                    <a href="#" id="edit" data-id="<?php echo $data['id_buku']; ?>">Edit</a> |
                                    <a href="#" id="hapus" data-id="<?php echo $data['id_buku']; ?>">Hapus</a> 
                                </td>
                            </tr>
                        <?php } } else{ ?>


                           <tr>
                            <td colspan="6" class="text-center">Tidak ada data ditemukan</td>
                        </tr>


                    <?php } } elseif($sortir == 'ASC'){

                        $query = mysqli_query($db,"SELECT * FROM buku INNER JOIN kategori ON kategori.id_kategori=buku.id_kategori INNER JOIN pengarang ON pengarang.id_pengarang=buku.id_pengarang WHERE judul_buku LIKE '%".$keyword."%' ORDER BY judul_buku ASC");
             // }

                        $hitung_data = mysqli_num_rows($query);
                        if ($hitung_data > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td>
                                        <img src="assets/img/<?php echo $data['gambar']; ?>" width="150px">
                                    </td>
                                    <td><?php echo $data['judul_buku']; ?></td>
                                    <td><?php echo $data['nama_kategori']; ?></td>
                                    <td><?php echo $data['nama_pengarang']; ?></td>
                                    <td>
                                        <a href="detail.php?id_buku=<?php echo $data['id_buku']; ?>">Detail</a> |
                                        <a href="#" id="edit" data-id="<?php echo $data['id_buku']; ?>">Edit</a> |
                                        <a href="#" id="hapus" data-id="<?php echo $data['id_buku']; ?>">Hapus</a> 
                                    </td>
                                </tr>
                            <?php } } else{ ?>


                               <tr>
                                <td colspan="6" class="text-center">Tidak ada data ditemukan</td>
                            </tr>


                        <?php } } else{

                            $query = mysqli_query($db,"SELECT * FROM buku INNER JOIN kategori ON kategori.id_kategori=buku.id_kategori INNER JOIN pengarang ON pengarang.id_pengarang=buku.id_pengarang WHERE judul_buku LIKE '%".$keyword."%' ORDER BY judul_buku ASC");
             // }

                            $hitung_data = mysqli_num_rows($query);
                            if ($hitung_data > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                            <img src="assets/img/<?php echo $data['gambar']; ?>" width="150px">
                                        </td>
                                        <td><?php echo $data['judul_buku']; ?></td>
                                        <td><?php echo $data['nama_kategori']; ?></td>
                                        <td><?php echo $data['nama_pengarang']; ?></td>
                                        <td>
                                            <a href="detail.php?id_buku=<?php echo $data['id_buku']; ?>">Detail</a> |
                                            <a href="#" id="edit" data-id="<?php echo $data['id_buku']; ?>">Edit</a> |
                                            <a href="#" id="hapus" data-id="<?php echo $data['id_buku']; ?>">Hapus</a> 
                                        </td>
                                    </tr>
                                <?php } } else{ ?>


                                   <tr>
                                    <td colspan="6" class="text-center">Tidak ada data ditemukan</td>
                                </tr>


                            <?php } }  ?> 


                        </tbody>
                    </table>
                </div>
            </div>
        </div>