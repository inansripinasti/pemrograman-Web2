<?php require_once "coba_proses.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- contoh form dengan checkbox untuk setiap item -->
<form method="post">
    <?php foreach($items as $key => $value): ?>
        <label>
            <input type="checkbox" name="<?php echo $key; ?>" value="<?php echo $value; ?>">
            <?php echo $key; ?> (<?php echo $value; ?>)
        </label><br>
    <?php endforeach; ?>
    <input type="submit" name="submit" value="Hitung Total">
</form>

</body>
</html>

