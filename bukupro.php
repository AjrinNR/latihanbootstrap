<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
     <center><h2 style = "padding:10px">ASSALAAM BOOK STORE</h2></center>

<?php 
    if (isset($_POST['sbm'])) {
        $nm = $_POST['nm'];
        $alt = $_POST['almt'];
        $jk = $_POST['jk'];
        $tgl = $_POST['tanggal'];
        $jml = $_POST['jml'];
        ?>
        
        <div class = "container">
            <div class = "row" style = "padding:10px">
                <div class = "col-md-12">
                    <div class = "card">
                        <div class ="card-header">Pembelian Buku</div>
                        <div class = "card-body">
                        <form action="bukuoutput.php" method="post">
                       <?php for ($i=0; $i < $jml; $i++) { 
                            ?>
                            <div class = "form-group">
                                <input type="hidden" name ="nm" value = "<?php echo $nm ?>">
                            </div>
                            <div class ="form-group">
                                <input type="hidden" name ="almt" value = "<?php echo $alt ?>">
                            </div>
                            <div class = "form-group">
                                <input type="hidden" name = "jk" value = "<?php echo $jk ?>">
                            </div>
                            <div class = "form-group">
                                <input type="hidden" name = "tanggal" value = "<?php echo $tgl ?>">
                            </div>
                            <div class = "form-group">
                                <input type="hidden" name = "jml" value = "<?php echo $jml ?>">
                            </div>
                            <div class = "form-group">
                                <label for="">Judul</label>
                                <input type="text" name = "jdl[]" class = "form-control">
                            </div>
                            <div class = "form-group">
                                <label for="">Kode Buku</label>
                                <input type="text" name = "kb[]" class = "form-control">
                            </div>
                            <div class = "form-group">
                                <label for="">Pengarang</label>
                                <input type="text" name = "pe[]" class = "form-control">
                            </div>
                            <div class = "form-group">
                                <label for="">Jenis Buku</label>
                                <input type="text" name = "jb[]" class = "form-control">
                            </div>
                            <div class = "form-group">
                                <label for="">Harga Buku</label>
                                <input type="number" name = "hb[]" class = "form-control">
                            </div>
                            <hr>
                            <?php } ?>
                                <input type="submit" name = "submit" class = "btn btn-primary">
                                <input type="reset" name = "rst" class = "btn btn-warning">
                            </form>
                            <?php }  ?>
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
