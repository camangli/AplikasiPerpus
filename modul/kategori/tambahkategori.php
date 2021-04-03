<h3>Tambah Kategori Baru</h3>

<?php
$kodeterakhir  = mysqli_fetch_object(mysql_query("SELECT * FROM kategori WHERE kategori_kode IN(SELECT MAX(kategori_kode) FROM kategori )"));
$kodeterakhir->kategori_kode++;

if ($kodeterakhir->kategori_kode == 1){
$kodeterakhir->kategori_kode = K1;
}
?>
<form action="modul/kategori/tambah.php" method="post" enctype="multipart/form-data">
<table width="473" border="0" cellspacing="3" cellpadding="3" class="table">
 <tr>
   <td width="149">Kode Kategori</td>
   <td width="311"><input type="text" readonly="readonly" onclick="alarem()" class="border" name="kodekategori" size="20" value="<?php echo "$kodeterakhir->kategori_kode"; ?>" required="required"/></td>
 </tr>
 <tr>
   <td>Nama Kategori</td>
   <td><input type="text" name="namakategori" size="25" class="border" required="required"/></td>
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td><input type="submit" value="Tambahkan" class="button" /></td>
 </tr>
</table>
</form>
