<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
require_once "../../praktikum3/tugas3/tugas3_proses_regist.php";
?>

<div class="container">
        <h2>Form Registrasi IT Club GDSC</h2>
        <form action="praktikum3.php" method="POST">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" placeholder="Masukkan Email" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" class="custom-control-input" value="Pria" required="required"> 
                    <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" class="custom-control-input" value="Wanita" required="required"> 
                    <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili" class="col-4 col-form-label">Domisili</label> 
                <div class="col-8">
                <select id="domisili" name="domisili" class="custom-select" required="required">
                    <?php foreach($domisili as $dom){ ?>
                        <option value="<?= $dom ; ?>"><?= $dom ; ?></option>
                    <?php } ?>   
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
                <div class="col-8">
                <select id="program_studi" name="program_studi" class="custom-select" required="required">
                    <?php foreach($program_studi as $key => $value){ ?>
                        <option value="<?= $key ; ?>"><?= $value; ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Programming</label> 
                <div class="col-8">
                    <?php foreach($skills as $key => $value){ ?>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input name="skill[]" id="<?= $key; ?>" type="checkbox" class="custom-control-input" value="<?= $key; ?>"> 
                            <label for="<?= $key; ?>" class="custom-control-label"><?= $key; ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <tr class="table-success text-uppercase">
                <th>nim</th>
                <th>nama</th>
                <th>email</th>
                <th>jenis kelamin</th>
                <th>domisili</th>
                <th>program studi</th>
                <th>Skill Programming</th>
                <th>skor</th>
                <th>predikat</th>

            </tr>
            <?php 
                if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $domisili = $_POST['domisili'];
                    $program_studi = $_POST['program_studi'];
                    $domisili = $_POST['domisili'];
                    $skill_user = $_POST['skill'];
            ?>
            <tr>
                <td><?= $nim; ?></td>
                <td><?= $nama; ?></td>
                <td><?= $email; ?></td>
                <td><?= $jenis_kelamin; ?></td>
                <td><?= $domisili; ?></td>
                <td><?= $program_studi; ?></td>
                <td><?php foreach($skill_user as $key){echo $key." ";} 
                    $skor = 0;
                    // loop melalui setiap item
                        foreach($skill_user as $key) {
                            // cek apakah checkbox terkait telah dicentang
                            if($key == 'HTML') {
                                // tambahkan nilai item ke total
                                $skor = $skor + 10;
                            }elseif($key == 'CSS') {
                                $skor = $skor + 10;
                            }elseif($key == 'JavaScript') {
                                $skor = $skor + 20;
                            }elseif($key == 'PHP') {
                                $skor = $skor + 30;
                            }elseif($key == 'Python') {
                                $skor = $skor + 30;
                            }elseif($key == 'Java') {
                                $skor = $skor + 50;
                            }elseif($key == 'RWD Bootstrap') {
                                $skor = $skor + 20;
                            }
                        }
                        if($skor >= 100){
                            $predikat = "sangat baik";
                        }elseif($skor >= 60){
                            $predikat = "baik";
                        }elseif($skor >= 40){
                            $predikat = "cukup";
                        }elseif($skor < 40){
                            $predikat = "kurang";
                        }elseif($skor == 0){
                            $predikat = "tidak memadai";
                        }
                ?></td>
                <td><?= $skor; ?></td>
                <td><?= $predikat; ?></td>

            </tr>
                <?php } ?>
        </table>

    </div>



<?php 
require_once "layouts/footer.php";
?>