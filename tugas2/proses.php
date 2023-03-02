<?php 

$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

if($produk == "TV"){
    $harga = 4200000 * $jumlah;
}elseif($produk == "Kulkas"){
    $harga = 3100000 * $jumlah;
}elseif($produk == "Mesin Cuci"){
    $harga = 3800000 * $jumlah;
}

?>