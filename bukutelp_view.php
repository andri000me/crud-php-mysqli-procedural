<h2>Buku Telepon</h2>

<h3>Daftar Nama</h3>
<a href="bukutelp_form_input.php">Tambah</a> | <a href="bukutelp_search.php">Cari</a>
<table border="1">
 <tr>
  <th>No</th>
  <th>Nama</th>
  <th>Alamat</th>
  <th>Telp</th>
  <th>Email</th>
  <th></th>
 </tr>

<?php
 include "connect_db.php";
 $sql = "SELECT * FROM buku_telp";
 $result = mysqli_query($mysqli, $sql);
 $i=1;
 while($r=mysqli_fetch_assoc($result)){
  echo "<tr>
  	     <td>".$i."</td>
	       <td>".$r['nama']."</td>
  	     <td>".$r['alamat']."</td>
  	     <td>".$r['telp']."</td>
  	     <td>".$r['email']."</td>
	       <td><a href=\"bukutelp_form_edit.php?id=".$r['id']."\">Edit</a> 
	           <a href=\"bukutelp_delete.php?id=".$r['id']."\">Delete</a></td>
 	      </tr>";
  $i++;
 }
?>  
</table>