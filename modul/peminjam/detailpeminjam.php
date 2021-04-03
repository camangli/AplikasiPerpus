<h4>TAMBAH PEMINJAM</h4>
<?php
$kodeterakhir  = mysql_fetch_object(mysql_query("SELECT * FROM peminjam WHERE peminjam_kode IN(SELECT MAX(peminjam_kode) FROM peminjam )"));
$kodeterakhir->peminjam_kode++;

if ($kodeterakhir->peminjam_kode == 1){
$kodeterakhir->peminjam_kode = Pm1;
}
?>
<form action="modul/peminjam/tambah.php" method="post" enctype="multipart/form-data">
<table width="300" border="0" cellspacing="1" cellpadding="1" class="table">
  <tr>
    <td>Kode Peminjam</td>
  </tr>
  <tr>
    <td><input class="border" readonly="readonly" onclick="alarem()" type="text" name="kode" value="<?php echo "$kodeterakhir->peminjam_kode";?>" required="required"/></td>
  </tr>
  <tr>
    <td>Nama Peminjam</td>
  </tr>
  <tr>
    <td><input type="text" name="nama" required="required" class="border" /></td>
  </tr>
  <tr>
    <td>Alamat Peminjam</td>
  </tr>
  <tr>
    <td><textarea name="alamat" cols="50" rows="10" class="border" required="required"></textarea></td>
  </tr>
  <tr>
    <td>Telepon Peminjam</td>
  </tr>
  <tr>
      <td><input type="text" name="telp" class="border" required="required" /></td>
  </tr>
  <tr>
    <td>Foto</td>
  </tr>
  <tr>
    <td><input type="file" name="foto"  class="border" required="required"></td>
  </tr>
  <tr>
    <td> </td>
&nbsp;
  </tr>
  <tr>
       <td><input type="submit" value="TAMBAH" class="button" /></td>
 </tr>
</table>
</form>