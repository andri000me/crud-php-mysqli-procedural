<?php
 include "connect_db.php";

 $id = $_GET['id'];
 $sql = "DELETE FROM buku_telp WHERE id='$id'";
 $result = mysqli_query($mysqli, $sql);

 if ($result){
 	echo "Sukses menghapus data <br />
 		  <a href=\"bukutelp_view.php\">Lihat Buku Telepon</a>";
 } else {
 	echo "Terjadi kesalahan";
 }
?>
