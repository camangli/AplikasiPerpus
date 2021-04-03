<?php
$kodeterakhir  = mysqli_fetch_object(mysqli_query("SELECT * FROM buku WHERE buku_kode IN(SELECT MAX(buku_kode) FROM buku )"));
$kodeterakhir->buku_kode++;

if ($kodeterakhir->buku_kode == 1){
$kodeterakhir->buku_kode = B1;
}
?>
<h3>Tambah Buku Perpustakaan</h3>
<form action="modul/buku/tambahbuku.php" method="post" enctype="multipart/form-data">
<table width="444" border="0" cellspacing="2" cellpadding="3" class="table" >
 <tr>
   <td width="188">Kode Buku</td>
   <td width="232"><input type="text" readonly="readonly" onclick="alarem()" class="border" name="kodebuku" size="20" value="<?php echo "$kodeterakhir->buku_kode";?>"></td>
 </tr>
 <tr>
   <td>Kategori Buku</td>
   <td>
   <select name="kategoribuku">
       
<?php
       $skat = mysqli_query("select * from kategori");
       while($dkat = mysqli_fetch_object($skat)){
           echo "
               <option value='$dkat->kategori_kode'>$dkat->kategori_nama</option>
           ";
       }
       
?>
   </select>    </td>
 </tr>
 <tr>
   <td>Nama Penerbit</td>
   <td><select name="penerbitbuku">
     
<?php
       $spen = mysqli_query("select * from penerbit");
       while($dpen = mysqli_fetch_object($spen)){
           echo "
               <option value='$dpen->penerbit_kode'>$dpen->penerbit_nama</option>
           ";
       }
       
?>
   </select></td>
 </tr>
 <tr>
   <td>Judul Buku</td>
   <td><input type="text" name="judulbuku" size="25" required="required" class="border"></td>
 </tr>
 <tr>
   <td>Jumlah Buku</td>
   <td><input type="text" name="jumlahbuku" size="3" required="required" class="border"></td>
 </tr>
 <tr>
   <td valign="top">Deskripsi Buku</td>
   <td><textarea name="deskripsibuku" cols="30" rows="8" required="required" class="border"></textarea></td>
 </tr>
 <tr>
   <td valign="top">Pengarang Buku</td>
   <td><input type="text" name="pengarangbuku" size="25" required="required" class="border"></td>
 </tr>
 <tr>
   <td valign="top">Tahun Terbit</td>
   <td><input type="text" name="tahunterbit" size="25" required="required" class="border"></td>
 </tr>
 <tr>
   <td valign="top">Gambar Buku</td>
   <td><input type="file" name="foto" /></td>
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
   <td><input type="submit" value="Tambahkan" class="button"></td>
 </tr>
</table>
</form>
