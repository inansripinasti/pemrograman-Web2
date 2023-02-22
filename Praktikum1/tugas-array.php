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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"/>
</head>
<body>
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
</body>
</html>