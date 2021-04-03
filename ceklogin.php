<?php
session_start();
mysqli_connect('localhost','root','','db_uk_gunawan_xiirplc');

$username = $_POST['user'];
$password = $_POST['pass'];
$pwd = md5($password);

$sql = mysqli_query("select * from petugas where petugas_nama='$username' AND password='$pwd'");
$jml = mysqli_num_rows($sql);
if($jml >= 0){
	$_SESSION['izin']=true;
	echo"<script language='javascript'>window.location='index.php?mode=im'</script>";
}else{
echo "<script language='javascript'>alert('Usernama atau password salah')</script>";
echo"<script language='javascript'>window.location='login.php'</script>";
}
?>
