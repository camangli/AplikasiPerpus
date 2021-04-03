<?php
$sql = mysql_query("select * from penerbit where penerbit_kode='$_GET[id]'");
$data = mysql_fetch_object($sql);
?>
<h3>Edit Penerbit</h3>

<form action="modul/penerbit/update.php" method="post">
<table width="400" border="0" cellspacing="3" cellpadding="3" class="table">
  <tr>
	<td width="165">Kode Penerbit</td>
	<td width="214"><input type="text" readonly="readonly" onclick="alarem()" name="kodepenerbit" size="3" class="border" value="<?php echo $data->penerbit_kode; ?>"></td>
  </tr>
  <tr>
	<td>Nama Penerbit</td>
	<td><input type="text" name="namapenerbit" size="25" class="border" value="<?php echo $data->penerbit_nama;?>"></td>
  </tr>
  <tr>
	<td valign="top">Alamat Penerbit</td>
	<td><textarea name="alamatpenerbit" cols="30" class="border" rows="8"><?php echo $data->penerbit_alamat; ?></textarea></td>
  </tr>
  <tr>
	<td valign="top">Tlp Penerbit</td>
	<td><input type="text" name="tlppenerbit" class="border" size="25" value="<?php echo $data->penerbit_telp;?> "></td>
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
	<td><input type="submit" value="Ubah" class="button"></td>
  </tr>
</table>
</form>