<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$peminjam = mysql_fetch_object(mysql_query("select * from peminjam where peminjam_kode='$_GET[id]'")); 
?>
<h3>Buku-Buku Yang Dipinjam <font color="#FF0000"><?php echo $peminjam->peminjam_nama; ?></font>
<?php  ?></h3>
<table width="577" border="0" cellspacing="2" cellpadding="3">
 <tr bgcolor="#4AA5FF">
   <td width="37" align="center"><strong>Kode</strong></td>
   <td width="87" align="center"><strong>Kode Buku</strong></td>
   <td width="98" align="center"><strong>Tgl Pinjam</strong></td>
   <td width="113" align="center"><strong>Tgl Kembali</strong></td>
   <td width="102" align="center"><strong>Status</strong></td>
   <td width="150" align="center"><strong>Setting</strong></td>
 </tr>
 
<?php
 $sql1 = mysql_query("select * from peminjaman where peminjam_kode='$_GET[id]' order by peminjaman_kode asc");
 $no=1;
 while($rs1 = mysql_fetch_object($sql1)){
   if($no % 2 == 0){$warna = "#999999";}else{$warna = "#C7C7C7";}
   $rs2 = mysql_fetch_object(mysql_query("select * from detail_pinjam where peminjaman_kode='$rs1->peminjaman_kode'"));
   if($rs2->status_kembali_detail == 0){$status = "<font color='red'>Belum Dikembalikan</font>";
$kembalikan="Kembalikan";}else{$status = "Sudah Dikembalikan";$kembalikan="";}
     echo "
       <tr bgcolor=$warna>
       <td>$rs1->peminjaman_kode</td>
       <td>$rs2->buku_kode</td>
       <td>".formatindo($rs1->peminjaman_tgl)."</td>
       <td>".formatindo($rs2->detail_tgl_kembali)."</td>
       <td>$status</td>
       <td><a href='modul/peminjaman/kembalikan.php?id=$rs1->peminjaman_kode'>$kembalikan</a></td>
       </tr>
     ";
     $no++;
 }
 
?>
</table>
</body>
</html>