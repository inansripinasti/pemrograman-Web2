<?php
// contoh array asosiatif
$items = array(
    "item1" => 10,
    "item2" => 20,
    "item3" => 30
);

// cek apakah form telah disubmit
if(isset($_POST['submit'])) {
    // inisialisasi variabel total
    $total = 0;

    // loop melalui setiap item
    foreach($items as $key => $value) {
        // cek apakah checkbox terkait telah dicentang
        if(isset($_POST[$key])) {
            // tambahkan nilai item ke total
            $total += $value;
        }
    }

    // tampilkan total
    echo "Total nilai yang terpilih adalah: " . $total;
}
?>