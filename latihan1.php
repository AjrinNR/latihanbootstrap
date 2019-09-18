<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <!-- css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- header -->
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
    <!-- end of header -->
    <!-- content -->
    <div class = "container">
        <div class ="row" style = "padding:10px">
            <div class = "col-md-8">
                <div class = "card">
                    <div class = "card-header"><center> FORMULIR </center></div>
                    <div class = "card-body">
                         <!-- isi disini -->
                         <form action="" method = "post">
                            <div class = "form-group">
                                <label for=""> Nama </label> 
                                <input type="text" name = "nama" class = "form-control">
                            </div>
                            <div class ="form-group"> 
                                <label for=""> Kelas </label>
                                <input type="text" name = "kls" class ="form-control">
                            </div>
                            <div>
                                <label for="">Alamat</label>
                                <textarea name="almt" class = "form-control" rows="5"></textarea>
                            </div><br>
                            <div class = "form-group">
                                <button type ="submit" name ="sbm" class ="btn btn-primary">Simpan</button>
                                <button type ="reset" name ="rst" class ="btn btn-warning">Reset</button>
                            </div>
                        </form> 
                        <?php
                            if (isset($_POST['sbm'])) {
                            $nm = $_POST['nama'];
                            $kls = $_POST['kls'];
                            $alt = $_POST['almt'];
                            
                      } ?>
                     </div>
                </div>
            </div>
            <div class = "col-md-4" style = "background:white  ">
                <center>
                    <h2 style = "padding:10px">Hasil Formulir</h2>
                </center>
                <div class ="table-responsive">
                    <table class = "table">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><?php echo $nm?></td>
                            <td><?php echo $kls?></td>
                            <td><?php echo $alt?></td>
                        </tr>
                    </table>
                </div>
                        
            </div>
        </div>
        </div>
    </div>
    <!-- end of content -->
    
</body>
    <!-- js -->
    <!-- jquery -->
    <script src="/assets/js/jquery.min.js"></script>     
    <script src="/assets/js/bootstrap.bundle.js"></script>        
    <script src="/assets/js/bootstrap.bundle.min.js"></script>  
</html>