<h3>Detail Kategori Buku</h3>
<table border="0" cellspacing="2" cellpadding="10">
 <tr bgcolor="#4AA5FF">
   <td width="44" align="center"><strong>Kode</strong></td>
   <td width="212" align="center"><strong>Kategori Buku</strong></td>
   <td width="126" align="center"><strong>Setting</strong></td>
 </tr>
 
 
<?php
 $sql = mysqli_query("select * from kategori order by kategori_kode asc");
 $no = 1;
 while($data = mysqli_fetch_object($sql)){
if($no % 2 == 0){$warna = "#999999";}else{$warna = "#C7C7C7";}
     echo "
   <tr bgcolor=$warna>
       <td>$data->kategori_kode</td>
       <td>$data->kategori_nama</td>
       <td align=center><a class='button' href=?mode=edit_kategori&id=$data->kategori_kode title=ubah>EDIT</a> <a class='button' href=modul/kategori/delete.php?id=$data->kategori_kode onclick=\"return confirm('Anda yakin akan menghapus data ini ?')\" title=hapus>DELETE</a></td>
   </tr>
   ";
   $no++;
 }
 
?>
</table>

