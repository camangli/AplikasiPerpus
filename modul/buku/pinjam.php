<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/
xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h3>Pinjam Buku</h3>
<?php
$kodeterakhir  = mysqli_fetch_object(mysqli_query($con,"SELECT * FROM peminjaman WHERE peminjaman_kode IN(SELECT MAX(peminjaman_kode) FROM peminjaman )"));
$kodeterakhir->peminjaman_kode++;

if ($kodeterakhir->peminjaman_kode == 1){
$kodeterakhir->peminjaman_kode = Pn1;
}
?>
<form action="modul/buku/prosespinjam.php" method="post">
<table width="444" border="0" cellspacing="2" cellpadding="3" class="table">
 <tr>
   <td width="188">Kode Peminjaman</td>
   <td width="232"><input type="text" readonly="readonly" onclick="alarem()" name="kodepeminjaman" size="13" class="border" required="required" value="<?php echo"$kodeterakhir->peminjaman_kode";?>"></td>
 </tr>
 <tr>
   <td>Nama Petugas</td>
   <td>
   <select name="kodepetugas">     
<?php
   $kat = mysqli_query($con,"select * from petugas");
   while($data = mysqli_fetch_object($kat)){
       echo "
       <option value='$data->petugas_kode'>$data->petugas_nama</option>
       ";
   }     
?>
   </select>
   </td>
 </tr>
 <tr>
   <td>Nama Peminjam</td>
   <td> <select name="kodepeminjam">     
<?php
   $kat = mysqli_query($con,"select * from peminjam");
   while($data = mysqli_fetch_object($kat)){
       echo "
       <option value='$data->peminjam_kode'>$data->peminjam_nama</option>
       ";
   }     
?>
   </select></td>
 </tr>
  <tr>
    <td>Tanggal Pinjam</td>
    <td>
    <select name="tglp">
            <?php
                for($i=1;$i<=31;$i++){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
    </select>
    -
    <select name="blnp">
           <?php
            for($i=1;$i<=12;$i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
    </select>
    -
    <?php echo date("Y");?>
    <input type="hidden" name="thnp" value="<?php echo date("Y"); ?>" />
    </td>
  </tr>
  <tr>
    <td>Tanggal Kembali</td>
  <td>  
    <select name="tglk">
            <?php
                for($i=1;$i<=31;$i++){
                    echo "<option value='$i'>$i</option>";
                }
            ?>
    </select>
    -
    <select name="blnk">
           <?php
            for($i=1;$i<=12;$i++){
                echo "<option value='$i'>$i</option>";
            }
            ?>
    </select>
    -
    <?php echo date("Y");?>
    <input type="hidden" name="thnk" value="<?php echo date("Y"); ?>" />
  </td>
  </tr>
 <tr>
   <td>Kode Buku</td>
   <td>
   <input type="text" name="kodebuku" class="border" size="3" readonly="readonly" value="<?php echo $_GET['id'];?> "/></td>
 </tr>
 <tr>
   <td> </td>
&nbsp;
   <td> </td>
&nbsp;
 </tr>
 <tr>
   <td> </td>
&nbsp;
   <td><input type="submit" value="PINJAM" class="button" /></td>
 </tr>
</table>
</form>
</body>
</html>
