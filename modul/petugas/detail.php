<h3>Data Petugas Perpustakaan</h3>

<table width="488" border="0" cellspacing="2" cellpadding="10">
  <tr bgcolor="#4AA5FF">
    <td width="40" align="center"><strong>Kode</strong></td>
    <td width="152" align="center"><strong>Petugas Perpustakaan</strong></td>
    <td width="176" align="center"><strong>Password</strong></td>
    <td width="86" align="center"><strong>Setting</strong></td>
  </tr>
  
<?php
  $sql = mysql_query("select * from petugas order by petugas_kode asc");
  $no = 1;
  while($data = mysql_fetch_object($sql)){
if($no % 2 == 0){$warna = "#999999";}else{$warna = "#C7C7C7";}
      echo "
    <tr bgcolor=$warna>
        <td>$data->petugas_kode</td>
        <td>$data->petugas_nama</td>
        <td>****************</td>
        <td align=center><a class='button' href=?mode=edit_petugas&id=$data->petugas_kode title=ubah>EDIT</a><a class='button' href=modul/petugas/delete.php?id=$data->petugas_kode onclick=\"return confirm('Anda yakin akan menghapus data ini ?')\" title=hapus>DELETE</a></td>
    </tr>
    ";
    $no++;
  }
  
?>
</table>

