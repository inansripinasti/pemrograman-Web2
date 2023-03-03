<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>
                    Sistem Penilaian
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7" style="margin : 50px;">
                <h3>
                    Belanja Online
                </h3>
                <form action="tugas2_form_belanja_online.php" method="POST">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Costumer</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                            <label for="produk_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                        <div class="col-8">
                        <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div class="list-group" style="margin : 50px;">
                    <a href="#" class="list-group-item list-group-item-action active">Daftar Harga</a>
                    <div class="list-group-item">
                        TV : Rp.4.200.000
                    </div>
                    <div class="list-group-item">
                        Kulkas : Rp.3.100.000
                    </div>
                    <div class="list-group-item">
                        Mesin Cuci : Rp.3.800.000
                    </div>
                    <a href="#" class="list-group-item list-group-item-action active justify-content-between">Harga dapat berubah setiap saat </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row" style="margin : 50px;">
            <div class="col-md-12">
            <table class="table table-bordered">
                <tr class="table-primary text-uppercase">
                    <th>Nama</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                </tr>
                <?php require_once "tugas2_proses.php"; ?>
                <tr>
                    <td><?= $nama; ?></td>
                    <td><?= $produk; ?></td>
                    <td><?= $jumlah; ?></td>
                    <td><?= "Rp " . number_format($harga, 0, ",", "."); ?></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
    <hr>
    <footer style="margin: 25px; text-align:center;">
        &copy;Inan Sri Pinasti
    </footer>
</body>
</html>
