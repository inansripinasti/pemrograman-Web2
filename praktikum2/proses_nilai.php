<?php 
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$total_nilai = ($tugas + $uts + $uas)/ 3;

if($total_nilai > 75){
    $keterangan = "LULUS";
} else{
    $keterangan = "TIDAK LULUS";

}
?>