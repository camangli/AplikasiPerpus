<?php
$sql = mysqli_query("select * from kategori where kategori_kode='$_GET[id]'");
$data = mysqli_fetch_object($sql);

?>
<h3>Edit Kategori</h3>

<form action="modul/kategori/update.php" method="post" enctype="multipart/form-data">
<table width="473" border="0" cellspacing="3" cellpadding="3" class="table">
 <tr>
   <td width="149">Kode Kategori</td>
   <td width="311"><input type="text" class="border" readonly="readonly" onclick="alarem()" name="kodekategori" size="3" value="<?php echo $data->kategori_kode;?> "/></td>
 </tr>
 <tr>
   <td>Nama Kategori</td>
   <td><input type="text" class="border" name="namakategori" size="25" value="<?php echo $data->kategori_nama;?>"/></td>
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td><input type="submit" value="Ubah" class="button" /></td>
 </tr>
</table>
</form>
