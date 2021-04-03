 <?php
 $data = mysqli_fetch_object(mysqli_query($con,"select * from buku where buku_kode='$_GET[id]'"));
 $datap = mysqli_fetch_object(mysqli_query($con,"select * from penerbit where penerbit_kode='$data->penerbit_kode'"));
 $datak = mysqli_fetch_object(mysqli_query($con,"select * from kategori where kategori_kode='$data->kategori_kode'"));
 $terpinjam = mysqli_fetch_object(mysqli_query($con,"select count(*) as terpinjam from detail_pinjam where buku_kode='$data->buku_kode' AND status_kembali_detail='0'"));
 $sisa = ($data->buku_jumlah)-($terpinjam->terpinjam);
    if($sisa != "0"){$linkpinjam="PINJAM";}else{$linkpinjam="";}
 echo "
 <h3>Detail Buku ( $data->buku_judul )</h3>
 <table border=0 cellspacing=3 cellpadding=4 class='table'>
    <tr>
     <td class='borderImg'><img src=Gbuku/$data->buku_gambar width=130px></td>
   </tr>
   <tr>
     <td>Kode Buku</td>
     <td>$data->buku_kode</td>
   </tr>
   <tr>
     <td>Nama Kategori</td>
     <td>$datak->kategori_nama</td>
   </tr>
   <tr>
     <td>Nama Penerbit</td>
     <td>$datap->penerbit_nama</td>
   </tr>
   <tr>
     <td>Judul Buku</td>
     <td>$data->buku_judul</td>
   </tr>
   <tr>
     <td>Jumlah Buku</td>
     <td>$data->buku_jumlah</td>
   </tr>
   <tr>
     <td>Tersedia</td>
     <td>$sisa</td>
   </tr>
   <tr>
     <td>Deskripsi Buku</td>
     <td>$data->buku_deskripsi</td>
   </tr>
   <tr>
     <td>Pengarang Buku</td>
     <td>$data->buku_pengarang</td>
   </tr>
   <tr>
     <td>Tahun Terbit Buku</td>
     <td>$data->buku_tahun_terbit</td>
   </tr>
   <tr>
     <td colspan='2'><a class='button' href=modul/buku/delete.php?id=$data->buku_kode onclick=\"return confirm('Anda yakin akan menghapus data ini ?')\" title=hapus>DELETE</a> <a class='button' href=?mode=edit_buku&id=$data->buku_kode title=ubah>EDIT</a> <a class='button' href='?mode=pinjam_buku&id=$data->buku_kode'>$linkpinjam</a></td>
   </tr>
  
 </table>
 ";
 
?>
