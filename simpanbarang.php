<?php
include 'koneksi.php';  
$nama=$_POST['nama'];
$harga=$_POST['harga'];
if($harga==''||$nama=''){
	echo "tidak boleh kosong";
}
else{
	$sqli=mysqli_query($koneksi,"INSERT into produk (nama_produk,harga) values('$nama', $harga)") or die (mysqli_error());

?>
<script type="text/javascript">
	alert('data berhasil di simpan');
	document.location="barang.php";
</script>
<?php  
}
?>