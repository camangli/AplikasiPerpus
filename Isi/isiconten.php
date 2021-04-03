<div id="isiConten">
        	 <?php
			 if ($_GET["mode"]=="im"){
			 include "~/../modul/home.php";
			 }else if ($_GET["mode"]=="det_peminjam"){
			 include "~/../modul/peminjam/detail.php";
			 }else if ($_GET["mode"]=="edit_peminjam"){
			 include "~/../modul/peminjam/edit.php";
			 }else if ($_GET["im"]=="home"){
			 include "~/../modul/home.php";
			 }else if ($_GET["submSrc"]=="Go"){
			 include "~/../modul/src.php";
			 }else if ($_GET["mode"]=="buku"){
			 include "~/../modul/buku/buku.php";
			 }else if ($_GET["mode"]=="del_peminjam"){
			 include "~/../modul/peminjam/delete.php";
			 }else if($_GET['mode']=="det_petugas"){
			 include "~/../modul/petugas/detail.php";
			 }else if($_GET['mode']=="edit_petugas"){
			 include "~/../modul/petugas/edit.php";
			 }else if($_GET['mode']=="det_kategori"){
			 include "~/../modul/kategori/detail.php";
			 }else if($_GET['mode']=="edit_kategori"){
			 include "~/../modul/kategori/edit.php";
			 }else if($_GET['mode']=="det_penerbit"){
			 include "~/../modul/penerbit/detail.php";
			 }else if($_GET['mode']=="edit_penerbit"){
			 include "~/../modul/penerbit/edit.php";
			 }else if($_GET['mode']=="det_buku"){
			 include "~/../modul/buku/detail.php";
			 }else if($_GET['mode']=="kh_buku"){
			 include "~/../modul/buku/khusus.php";
			 }else if($_GET['mode']=="edit_buku"){
			 include "~/../modul/buku/edit.php";
			 }else if($_GET['mode']=="cari_buku"){
			 include "~/../modul/buku/cari.php";
			 }else if($_GET['mode']=="pinjam_buku"){
			 include "~/../modul/buku/pinjam.php";
			 }else if($_GET['mode']=="cari_peminjam"){
			 include "~/../modul/peminjam/caripeminjam.php";
			 }else if($_GET['mode']=="det_peminjaman"){
			 include "~/../modul/peminjaman/detail.php";
			 }else if($_GET['mode']=="pinjam_brp"){
			 include "~/../modul/peminjam/pinjam.php";
			 }else if($_GET['mode']=="det_tambah"){
			 include "~/../modul/peminjam/detailpeminjam.php";
			 }else if($_GET['mode']=="det_tambahpetugas"){
			 include "~/../modul/petugas/detailpetugas.php";
			 }else if($_GET['mode']=="det_tambahbuku"){
			 include "~/../modul/buku/detailbuku.php";
			 }else if($_GET['mode']=="about"){
			 include "~/../modul/about.php";
			 }else if($_GET['mode']=="tambah_kategori"){
			 include "~/../modul/kategori/tambahkategori.php";
			 }else if($_GET['mode']=="tambah_penerbit"){
			 include "~/../modul/penerbit/tambahpenerbit.php";
			 }else if($_GET['mode']=="MyBio"){
			 include "~/../Isi/biografi.php";
			 }
			 ?>
        </div>
