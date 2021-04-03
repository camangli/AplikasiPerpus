<?php
$sql = mysql_query("select * from peminjam where peminjam_kode='$_GET[id]'");
$data = mysql_fetch_object($sql);

?>
<h3>Edit Peminjam</h3>

<form action="modul/peminjam/update.php" method="post" enctype="multipart/form-data">
<table width="473" border="0" cellspacing="3" cellpadding="3" class="table">
 <tr>
   <td width="149">Kode Peminjam</td>
   <td width="311"><input type="text" readonly="readonly" onclick="alarem()" name="kodepeminjam" class="border" size="3" value="<?php echo $data->peminjam_kode;?> "/></td>
 </tr>
 <tr>
   <td>Nama Peminjam</td>
   <td><input type="text" name="namapeminjam" size="25" class="border" value="<?php echo $data->peminjam_nama;?>"/></td>
 </tr>
 <tr>
   <td valign="top">Alamat Peminjam</td>
   <td><textarea name="alamatpeminjam" class="border" cols="30" rows="8"><?php  echo $data->peminjam_alamat;?></textarea></td>
 </tr>
 <tr>
   <td valign="top">Tlp Peminjam</td>
   <td><input type="text" name="tlppeminjam" class="border" size="25" value="<?php echo $data->peminjam_telp;?>"/></td>
 </tr>
 <tr>
   <td valign="top">Foto Peminjam</td>
   <td><input type="file" name="foto" class="border" /></td>
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td><img src="foto/<?php echo $data->peminjam_foto;?> " width="80px"></td>
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td><input type="submit" value="Update" class="button"/></td>
 </tr>
</table>
</form>