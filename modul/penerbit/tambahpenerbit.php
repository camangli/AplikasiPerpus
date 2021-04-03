<?php
$kodeterakhir  = mysql_fetch_object(mysql_query("SELECT * FROM penerbit WHERE penerbit_kode IN(SELECT MAX(penerbit_kode) FROM penerbit )"));
$kodeterakhir->penerbit_kode++;

if ($kodeterakhir->penerbit_kode == 1){
$kodeterakhir->penerbit_kode = Pr1;
}
?>
<h3>Tambahkan Penerbit Buku</h3>
<form action="modul/penerbit/tambah.php" method="post">
<table width="400" border="0" cellspacing="3" cellpadding="3" class="table">
 <tr>
   <td width="165">Kode Penerbit</td>
   <td width="214"><input type="text" readonly="readonly" onclick="alarem()" name="kodepenerbit" size="20" value="<?php echo "$kodeterakhir->penerbit_kode";?>" required="required" class="border"></td>
 </tr>
 <tr>
   <td>Nama Penerbit</td>
   <td><input type="text" name="namapenerbit" size="25" required="required" class="border"></td>
 </tr>
 <tr>
   <td valign="top">Alamat Penerbit</td>
   <td><textarea name="alamatpenerbit" cols="30" rows="8" required="required" class="border"></textarea></td>
 </tr>
 <tr>
   <td valign="top">Tlp Penerbit</td>
   <td><input type="text" name="tlppenerbit" size="25" required="required" class="border"></td>
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td> </td>
&nbsp;
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td><input type="submit" value="Tambahkan" class="button"></td>
 </tr>
</table>
</form>