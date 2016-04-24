<?php
include'koneksi.php';
$sqli=mysqli_query($koneksi, "SELECT * from produk order by id_produk asc");
  ?>
 <table>
 	<tbody>
 		<tr>
 			<td>
 			nama
 			</td>
 			<td>
 			harga
 			</td>
 			<td>
 			tool
 			</td>
 		</tr>

 	<?php
 	while ($data=mysqli_fetch_array($sqli)){
 	  ?>
 	<tr>
 			<td>
 			<?php echo $data['nama_produk']; ?>
 			</td>
 			<td>
 			<?php echo $data['harga']; ?>
 			</td>
 			<td>
 			<a href="hapusbarang.php?id=<?php echo $data['id_produk'] ?>">X</a>
 			</td>
 		</tr>  
 	<?php  } ?>
 	

 	</tbody>
 </table>