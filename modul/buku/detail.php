<h3>Buku-Buku Yang Tersedia</h3>
<div id="ConBuku">
<?php
$no = 1;
$sql = mysqli_query($con, "select * from buku order by buku_judul asc");
while($data = mysqli_fetch_object($sql)){
   echo "
     <div id='bukumain'>
    <div class='bukutab' title='Buku $data->buku_judul'><a class='Acl' href=modul/buku/delete.php?id=$data->buku_kode onclick=\"return confirm('Anda yakin akan menghapus data ini ?')\" title=hapus>X</a><a  href='?mode=kh_buku&id=$data->buku_kode'>$data->buku_judul</a></div>
	<div class='bukugam'><a href='?mode=kh_buku&id=$data->buku_kode'><img src=Gbuku/$data->buku_gambar height=180px width=130px></a></div>
	<div class='bukudescr'><a href='?mode=kh_buku&id=$data->buku_kode'>Pengarang : $data->buku_pengarang </a></div>
	</div>
  ";
   $no++;
}

?>
</div>
