<html>
<head>
	<title>commit3</title>
</head>
<body>
<?php  
include'../koneksi/koneksi.php';
$user=$_POST['user'];
$pass=$_POST['pass'];
// $pw=md5($pass);

$sql=$koneksi-> query(" SELECT * from admin where id_admin='$user' and password='$pass' ") or die (mysql_error());
$cari=mysqli_num_rows($sql);
if($cari){
	$_SESSION['user']=$user;
?>
<script type="text/javascript">
	document.location='branda.php';
	alert('tidak');
</script>
<?php
?>
}else{ 
?>
<script type="text/javascript">
	document.location='index.php';
	alert('berhasild');
</script>
<?php	
}
?>
</body>
</html>