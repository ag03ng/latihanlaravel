<?php
include 'koneksi.php';
$id_produk=$_GET['id'];
$cari=mysqli_query($koneksi1"SELECT * from produk where id_produk='$id_produk'");
$data=mysqli_fetch_array($cari);
?>
<from action="updatebarang.php" method="POST">
<table>
<tbody>
<tr>
<td>nama</td>
<td>harga</td>
</tr>
<tr>
<td>
<input type="text" name="nama" value="<?php echo $data ['nama_produk']?>" placeholder="">
</td>
<td>
<input type="text" name="harga" value="<?php echo $data ['harga']?>" placeholder="">
</td>
</tr>
<tr>
<td><input type="submit" name="" value="update"></td>
</tr>
</tbody>
</table>
</from>