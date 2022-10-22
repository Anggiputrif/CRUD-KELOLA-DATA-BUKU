<?php
require_once "config/database.php";


$query = "DELETE FROM buku WHERE id_buku ='$_POST[id]'";

mysqli_query($db, $query)
or die ("Gagal Perintah SQL".mysql_error());

?>

