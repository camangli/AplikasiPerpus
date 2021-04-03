<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h3>Cari Peminjam</h3>
<form action="" method="post">
   <input type="hidden" name="bywhat" value="byKode"/>
   <input type="text" class="border" name="byKode" placeholder="Kode Peminjam" required="required"/>
   <input type="submit" class="button" value="CARI" />
</form>
<br />
<form action="" method="post">
 <input type="hidden" name="bywhat" value="byNama"/>
   <input type="text" class="border" name="byNama" placeholder="Nama Peminjam" required="required"/>
   <input type="submit" class="button" value="CARI" />
</form>
<h3>Data Peminjam</h3>
<table width="646" border="0" cellspacing="2" cellpadding="3">
 <tr bgcolor="#4AA5FF">
   <td width="33" align="center"><strong>No.</strong></td>
   <td width="136" align="center"><strong>Peminjam</strong></td>
   <td width="169" align="center"><strong>Alamat</strong></td>
   <td width="93" align="center"><strong>Telepon</strong></td>
   <td width="101" align="center"><strong>Foto</strong></td>
   <td width="160" align="center"><strong>Status</strong></td>
 </tr>
 
<?php
 $no = 1;  
 if($_POST['bywhat']=="byKode"){
   $sql = mysql_query("select * from peminjam where peminjam_kode = '$_POST[byKode]' order by peminjam_kode desc");    
 }else{
   $sql = mysql_query("select * from peminjam where peminjam_nama LIKE '%$_POST[byNama]%' order by peminjam_kode desc");    
 }  
 while($data = mysql_fetch_object($sql)){    
   if($no % 2 == 0){$warna = "#999999";}else{$warna = "#C7C7C7";}
     $jmlpinjam = mysql_num_rows(mysql_query("select * from peminjaman where peminjam_kode='$data->peminjam_kode'"));
   echo "
   <tr bgcolor=$warna>
       <td>$data->peminjam_kode</td>
       <td>$data->peminjam_nama</td>
       <td>$data->peminjam_alamat</td>
       <td>$data->peminjam_telp</td>
       <td align=center><img src='foto/$data->peminjam_foto' width='50px'></td>
       <td><a class='button' href='?mode=pinjam_brp&id=$data->peminjam_kode'>Pinjam $jmlpinjam Buku</a></td>
     </tr>
   ";
   $no++;
 }
 
?>
</table>
</body>
</html>
