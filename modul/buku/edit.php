<?php
$data = mysqli_fetch_object(mysql_query("select * from buku where buku_kode='$_GET[id]'"));
$kategori = mysqli_fetch_object(mysql_query("select * from kategori where kategori_kode='$data->kategori_kode'"));
$penerbit = mysqli_fetch_object(mysql_query("select * from penerbit where penerbit_kode='$data->penerbit_kode'"));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/x
html1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<h3>Edit Buku Perpustakaan</h3>
<form action="modul/buku/update.php" method="post" enctype="multipart/form-data">
<table width="444" border="0" cellspacing="2" cellpadding="3" class="table" >
 <tr>
   <td width="130">Kode Buku</td>
		<td width="296"><input type="text" class="border" readonly="readonly" onclick="alarem()" name="kodebuku" size="3" value="<?php echo $data->buku_kode;?>"/></td>
 </tr>
 <tr>
   <td>Kategori Buku</td>
   <td>
   <select name="kategoribuku" class="border">
	   
<?php
	   echo "
	   <option value='$kategori->kategori_kode'>$kategori->kategori_nama</option>
	   ";
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
   <td>Kode Penerbit</td>
   <td><select name="penerbitbuku" class="border">
	 
<?php
		 echo "
	   <option value='$penerbit->penerbit_kode'>$penerbit->penerbit_nama</option>
	   ";
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
   <td><input type="text" class="border" name="judulbuku" size="25" value="<?php echo $data->buku_judul; ?>"></td>
 </tr>
 <tr>
   <td>Jumlah Buku</td>
   <td><input type="text" class="border" name="jumlahbuku" size="3" value="<?php echo $data->buku_jumlah; ?>"></td>
 </tr>
 <tr>
   <td valign="top">Deskripsi Buku</td>
   <td><textarea name="deskripsibuku" class="border" cols="30" rows="8"><?php echo $data->buku_deskripsi;?></textarea></td>
 </tr>
 <tr>
   <td valign="top">Pengarang Buku</td>
   <td><input type="text" name="pengarangbuku" class="border" size="25" value="<?php echo $data->buku_pengarang; ?>"></td>
 </tr>
 <tr>
   <td valign="top">Tahun Terbit</td>
   <td><input type="text" name="tahunterbit" class="border" size="25" value="<?php echo $data->buku_tahun_terbit; ?>"></td>
 </tr> 
 <tr>
   <td valign="top">Gambar</td>
   <td><input type="file" name="foto" /></td>
 </tr>  
 <tr>
   <td valign="top"></td>
   <td><img src="Gbuku/<?php echo $data->buku_gambar;?> " width="80px"></td>
 </tr>
 <tr>
   <td valign="top"> </td>
&nbsp;
   <td><input type="submit" value="Ubah"  class="button"></td>
 </tr>
</table>
</form>

</body>
</html>
