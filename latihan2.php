
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
<?php
        session_start();
        if (isset($_SESSION['login'])) {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Ajrin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="latihan1.php">Latihan 1<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="latihan2.php">Latihan 2</a>
                </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class = "container">
        <div class = "row" style = "padding:10px">
            <div class = "col-md-12">
                <div class = "card">
                <div class = "card-header"><center>PPDB SMK ASSALAAM</center></div>
                <div class = "card-body">
                    <form action="" method ="post">
                        <div class = "form-group">
                            <label for=""> Nama </label> 
                            <input type="text" name = "nama" class = "form-control" required>
                        </div>
                        <div class = "form-group">
                            <label for="">Alamat</label>
                            <textarea name="almt" class = "form-control" rows="5" required></textarea>
                        </div>
                        <div class = "form-group">
                            <label for="">Jenis Kelamin</label><br>
                            <input type="radio" name = "jk" value ="Laki Laki"> Laki Laki
                            <input type="radio" name = "jk" value ="Perempuan"> Perempuan
                        </div>
                        <div class = "form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" name = "as" class="form-control" required>
                        </div>
                        <div class = "form-group">
                            <label for="">Nilai Bahasa Indonesia</label>
                            <input type="number" name = "ind" class = "form-control" required>
                        </div>
                        <div class = "form-group">
                            <label for="">Nilai Matematika</label>
                            <input type="number" name = "mtk" class = "form-control" required>
                        </div>
                        <div class = "form-group">
                            <label for="">Nilai IPA</label>
                            <input type="number" name = "ipa" class = "form-control" required>
                        </div>
                        <div class = "form-group">
                            <label for="">Nilai Bahasa Inggris</label>
                            <input type="number" name = "ing" class = "form-control" required>
                        </div>
                        <div class = "form-group">
                            <button type ="submit" name ="sbm" class ="btn btn-primary">Simpan</button>
                            <button type ="reset" name ="rst" class ="btn btn-warning">Reset</button>
                            <button type ="submit"class ="btn btn-danger"> <a href="logoutlatihan2.php" style = "text-decoration:none ; color:white">
                            LogOut</a></button>
                        </div>
                    </form>
                    <?php
                        if (isset($_POST['sbm'])) {
                            $nama = $_POST['nama'];
                            $alt = $_POST['almt'];
                            $jk = $_POST['jk'];
                            $as = $_POST['as'];
                            $id = $_POST['ind'];
                            $mat = $_POST['mtk'];
                            $ip = $_POST['ipa'];
                            $ig = $_POST['ing'];

                            $no = 0;
                            $no++;
                            $hasil = ($id + $mat + $ip + $ig)/4;
                            if ($hasil > 65) {
                                $ket = "Diterima";   
                            }else {
                                $ket = "Tidak Diterima";
                            }
                        }?>
                </div>                
                </div>
            </div>
        </div>
        <div class = "col-md-12" style = "background:white  ">
                <center>
                    <h2 style = "padding:10px">Hasil Formulir</h2>
                </center>
                <div class ="table-responsive">
                    <table class = "table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Sekolah</th>
                            <th>Nilai Bahasa Indonesia</th>
                            <th>Nilai Matematika</th>
                            <th>Nilai IPA</th>
                            <th>Nilai Bahasa Inggris</th>
                            <th>Rata Rata</th>
                            <th>Keterangan</th>
                        </tr>
                        <tr>
                            <td><?php echo $no?></td>
                            <td><?php echo $nama?></td>
                            <td><?php echo $alt?></td>
                            <td><?php echo $jk?></td>
                            <td><?php echo $as?></td>
                            <td><?php echo $id?></td>
                            <td><?php echo $mat?></td>
                            <td><?php echo $ip?></td>
                            <td><?php echo $ig?></td>
                            <td><?php echo $hasil?></td>
                            <td><?php echo $ket?></td>
                        </tr>
                    </table>
                </div>
                        
            </div>
    </div>
</body>
    <script src="/assets/js/jquery.min.js"></script>     
    <script src="/assets/js/bootstrap.bundle.js"></script>        
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>
        <?php } else {
            die("Anda Harus Login dahulu, Untuk login <a href ='loginlatihan2.php'>Klik Disini</a>");
        } ?>