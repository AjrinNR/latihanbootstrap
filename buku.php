<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASSALAAM BOOK STORE</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">Ajrin</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="latihan1.php"><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="latihan2.php"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>
    <div class = "container">
        <div class = "row" style = "padding:10px">
            <div class = "col-md-12">
            <center><h2>ASSALAAM BOOK STORE</h2></center>
                <div class = "card">
                    <div class ="card-header">Pembelian Buku</div>
                    <div class = "card-body">
                        <form action="bukupro.php" method = "post">
                            <div class = "form-group">
                                <label for="">Nama</label>
                                <input type="text" name ="nm" class = "form-control" required>
                            </div>
                            <div class ="form-group">
                                <label for="">Alamat</label>
                                <textarea name="almt" rows="5" class = "form-control" required></textarea>
                            </div>
                            <div class = "form-group">
                                <label for="">Jenis Kelamin</label><br>
                                <input type="radio" name = "jk" value ="Laki Laki"> Laki Laki
                                <input type="radio" name = "jk" value ="Perempuan"> Perempuan
                            </div>
                            <div class = "form-group">
                                <label for="">Tanggal Pembelian</label>
                                <input type="date" name = "tanggal" class = "form-control" required>
                            </div>
                            <div class = "form-group">
                                <label for="">Jumlah Buku</label>
                                <input type="number" name = "jml" class = "form-control" required>
                            </div>
                            <div class = "form-group">
                                <input type="submit" name = "sbm" class = "btn btn-primary">
                                <input type="reset" name = "rst" class = "btn btn-warning">
                            </div>
                        </form>
                        <?php 
                            if (isset($_POST['sbm'])) {
                                $nm = $_POST['nm'];
                                $alt = $_POST['almt'];
                                $jk = $_POST['jk'];
                                $tgl = $_POST['date'];
                                $jml = $_POST['no'];
                                
                                 } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="/assets/js/jquery.min.js"></script>     
    <script src="/assets/js/bootstrap.bundle.js"></script>        
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>