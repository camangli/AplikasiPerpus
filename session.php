<?php
session_start();
if ($_SESSION['izin'] != true){
echo"<script language='javascript'>window.location='login.php'</script>";
}
?>
