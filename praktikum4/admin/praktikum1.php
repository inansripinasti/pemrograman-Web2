<?php 

require_once "layouts/header.php";
require_once "layouts/menu.php";
// require_once "../../praktikum1/index.php";


?>
<?php 

$mahasiswa1 = [
    'id'=>'1', 
    'NIM'=>1101234,
    'UTS'=>98, 
    'UAS'=>90, 
    'TUGAS'=>85,
];

$mahasiswa2 = [
    'id'=>'2', 
    'NIM'=>1101674,
    'UTS'=>98, 
    'UAS'=>89, 
    'TUGAS'=>80,
];

$mahasiswa3 = [
    'id'=>'3', 
    'NIM'=>1106847,
    'UTS'=>89, 
    'UAS'=>85, 
    'TUGAS'=>85,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>
<div class="container">
    <h2>Data Mahasiswa</h2>
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
        </tr>
        <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id']; ?></td>
                <td><?= $nilai['NIM']; ?></td>
                <td><?= $nilai['UTS']; ?></td>
                <td><?= $nilai['UAS']; ?></td>
                <td><?= $nilai['TUGAS']; ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php require_once "layouts/footer.php"; ?>