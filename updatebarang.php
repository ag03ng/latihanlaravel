<?php 
include 'koneksi.php';
$id_produk=$_POST['id'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$sqli=mysqli_query($koneksi,"UPDATE produk set nama_produk='$nama',harga='$harga'where id_produk='$id_produk'");
if($sqli){
 ?>
<script type="text/javascript">
	alert('data berhasil di update');
	document.location="viewbarang.php";
</script>
 <?php 
}
else{
	?>
	

 } ?>
