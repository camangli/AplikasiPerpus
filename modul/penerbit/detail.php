<h3>Cari Penerbit</h3>
<form action="" method="post">
    <input type="hidden" name="bywhat" value="bynama"/>
    <input type="text" name="bynama" class="border" placeholder="Nama Penerbit" required="required"/>
    <input type="submit" value="CARI" class="button" />
</form>
<form action="" method="post">
    <input type="hidden" name="bywhat" value="bykode"/>
    <input type="text" name="bykode" class="border" placeholder="Kode Penerbit" required="required"/>
    <input type="submit" value="CARI" class="button" />
</form>

<h3>Detail Penerbit Buku</h3>

<table width="704" border="0" cellspacing="2" cellpadding="10">
 <tr bgcolor="#4AA5FF">
   <td width="43" align="center"><strong>Kode</strong></td>
   <td width="131" align="center"><strong>Nama Penerbit</strong></td>
   <td width="211" align="center"><strong>Alamat Penerbit</strong></td>
   <td width="165" align="center"><strong>Tlp Penerbit</strong></td>
   <td width="150" align="center"><strong>Setting</strong></td>
 </tr>
<?php
if ($_POST['bywhat']=="bynama"){
 $sql = mysql_query("select * from penerbit where penerbit_nama like'%$_POST[bynama]%' order by penerbit_kode asc");
}else if ($_POST['bywhat']=="bykode"){
 $sql = mysql_query("select * from penerbit where penerbit_kode like'%$_POST[bykode]%' order by penerbit_kode asc");
}else{
 $sql = mysql_query("select * from penerbit order by penerbit_kode asc");
}
 $no = 1;
 while($data = mysql_fetch_object($sql)){
 if($no % 2 == 0){$warna = "#999999";}else{$warna = "#C7C7C7";}
     echo "
   <tr bgcolor=$warna>
       <td>$data->penerbit_kode</td>
       <td>$data->penerbit_nama</td>
       <td>$data->penerbit_alamat</td>
       <td>$data->penerbit_telp</td>
       <td align=center><a class='button' href=?mode=edit_penerbit&id=$data->penerbit_kode title=ubah>EDIT</a> <a class='button' href=modul/penerbit/delete.php?id=$data->penerbit_kode onclick=\"return confirm('Anda yakin 
akan menghapus data ini ?')\" title=hapus>DELETE</td>
     </tr>
   ";
   $no++;
 }
 
?>
</table>