<h3>Data Peminjam</h3>

<table width="646" border="0" cellspacing="2" cellpadding="10">
  <tr bgcolor="#4AA5FF">
    <td width="33" align="center"><strong>No.</strong></td>
    <td width="136" align="center"><strong>Peminjam</strong></td>
    <td width="169" align="center"><strong>Alamat</strong></td>
    <td width="93" align="center"><strong>Telepon</strong></td>
    <td width="101" align="center"><strong>Foto</strong></td>
    <td width="180" align="center"><strong>Setting</strong></td>
  </tr>
  
<?php
  $sql = mysqli_query($con,"select * from peminjam order by peminjam_kode asc");
  $no = 1;
  while($data = mysqli_fetch_object($sql)){
if($no % 2 == 0){$warna = "#999999";}else{$warna = "#C7C7C7";}
      echo "
    <tr bgcolor=$warna>
        <td>$data->peminjam_kode</td>
        <td>$data->peminjam_nama</td>
        <td>$data->peminjam_alamat</td>
        <td>$data->peminjam_telp</td>
        <td align=center><img src='foto/$data->peminjam_foto' width='50px'></td>
        <td><a class='button' href='?mode=edit_peminjam&id=$data->peminjam_kode'>EDIT</a><a class='button' href=modul/peminjam/delete.php?id=$data->peminjam_kode onclick=\" return confirm('Anda Yakin Akan Menghapus Data Ini ?') \" title=hapus>DELETE</a></td>
      </tr>
    ";
    $no++;
  }
  
?>
</table>
