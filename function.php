<?php
$con = mysqli_connect('localhost','root','','db_uk_gunawan_xiirplc');
function formatindo($tglku){
    $pecah = explode("-",$tglku);
    $tanggal = $pecah[2];
    $bulan = $pecah[1];
    $tahun = $pecah[0];
    $formatindo = $tanggal."-".$bulan."-".$tahun;
    return $formatindo;
}
?>
