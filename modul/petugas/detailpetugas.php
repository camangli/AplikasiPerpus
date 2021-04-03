<h3>Tambah Petugas Baru</h3>

<?php
$kodeterakhir  = mysql_fetch_object(mysql_query("SELECT * FROM petugas WHERE petugas_kode IN(SELECT MAX(petugas_kode) FROM petugas )"));
$kodeterakhir->petugas_kode++;

if ($kodeterakhir->petugas_kode == 1){
$kodeterakhir->petugas_kode = P1;
}
?>
<form action="modul/petugas/tambahpetugas.php" method="post" enctype="multipart/form-data">
<table width="473" border="0" cellspacing="3" cellpadding="3" class="table">
  <tr>
    <td width="149">Kode Petugas</td>
    <td width="311"><input type="text" readonly="readonly" onclick="alarem()" class="border" name="kodepetugas" size="20" value="<?php echo "$kodeterakhir->petugas_kode";?>" required="required"/></td>
  </tr>
  <tr>
    <td>Nama Petugas</td>
    <td><input type="text" class="border" name="namapetugas" size="25" required="required"/></td>
  </tr>
  <tr>
    <td valign="top">Password</td>
    <td><input type="password" name="password" size="25" class="border" required="required"/></td>
  </tr>
  <tr>
    <td valign="top"> </td>
&nbsp;
    <td><input class="button" type="submit" value="Tambahkan" /></td>
  </tr>
</table>
</form>