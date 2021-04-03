<h3>Hasil Pencarian</h3>
<div id="ConBuku">
<?php
   $sql = mysql_query("select * from buku where buku_judul LIKE '%$_GET[Src]%' order by buku_judul asc");
$jml = mysql_num_rows($sql);
if ($jml == 0){
	echo"<p id='tdtmk'>Maaf Buku tidak Ditemukan</p>";
}else if ($_GET[Src] == '') {
echo "<p id='cari'>Buku yang Tersedia</p>";
}else{
echo "<p id='cari'>Hasil pencarian '$_GET[Src]' ( $jml )</p>";
}
while($data = mysql_fetch_object($sql)){
   echo "
   <div id='bukumain'>
    <div class='bukutab' title='Buku $data->buku_judul'><a class='Acl' href=modul/buku/delete.php?id=$data->buku_kode onclick=\"return confirm('Anda yakin akan menghapus data ini ?')\" title=hapus>X</a><a  href='?mode=kh_buku&id=$data->buku_kode'>$data->buku_judul</a></div>
	<div class='bukugam'><a href='?mode=kh_buku&id=$data->buku_kode'><img src=Gbuku/$data->buku_gambar height=180px width=130px></a></div>
	<div class='bukudescr'><a href='?mode=kh_buku&id=$data->buku_kode'>Pengarang : $data->buku_pengarang </a></div>
	</div>";
  }
?>
</div>
