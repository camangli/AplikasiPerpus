<?php
$sql = mysql_query("select * from petugas where petugas_kode='$_GET[id]'");
$data = mysql_fetch_object($sql);

?>
<h3>Edit Kategori</h3>

<form action="modul/petugas/update.php" method="post" enctype="multipart/form-data">
<table width="473" border="0" cellspacing="3" cellpadding="3" class="table">
 <tr>
   <td width="149">Kode Petugas</td>
   <td width="311"><input type="text" class="border" readonly="readonly" onclick="alarem()" name="kodepetugas" size="3" value="<?php echo $data->petugas_kode;?> "/></td>
 </tr>
 <tr>
   <td>Nama Petugas</td>
   <td><input type="text" class="border" name="namapetugas"  size="25" value="<?php echo $data->petugas_nama;?> " /></td>
 </tr>
 <tr>
   <td valign="top">Password Lama</td>
   <td><input type="password" name="passwordLama" class="border" size="25"/></td>
 </tr>
 <tr>
   <td valign="top">Password Baru</td>
   <td><input type="password" name="password" class="border" size="25"/></td>
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td><input type="submit" value="Ubah" class="button" /></td>
 </tr>
</table>
</form>