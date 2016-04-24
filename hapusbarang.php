<?php
include'koneksi.php';
$id_produk=$_GET['id'];
$sqli=mysqli_query($koneksi,"DELETE from produk where id_produk = '$id_produk'");
if ($sqli){
	?>
	<script type="text/javascript">
	alert('data berhasil dihapus');
	document.location="viewbarang.php";
	</script>
	<?php 
}else 
{
		?>
		<script type="text/javascript">
		alert('gagal hapus data');
		document.location="viewbarang.php";
		</script>
<?php	
} 
?>