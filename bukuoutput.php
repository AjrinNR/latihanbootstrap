<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Output</title>
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
        if (isset($_POST['submit'])) {
            $nm = $_POST['nm'];
            $alt = $_POST['almt'];
            $jk = $_POST['jk'];
            $jml = $_POST['jml'];
            $tgl = $_POST['tanggal'];
            $jdl = $_POST['jdl'];
            $kb = $_POST['kb'];
            $pe = $_POST['pe'];
            $jb = $_POST['jb'];
            $hb = $_POST['hb'];
            $v = $jml;
            $jumlah = array_sum($hb);
            if ($v > 5) {
                 $v = $jumlah *0.1;
            }elseif ($v>3) {
                 $v = $jumlah *0.05;
            }else{
                 $v = 0;
            }
            
            $sub = $jumlah - $c;

            ?>
        <div class = "container">    
            <div class = "col-md-12" style = "background:white">
                <center>
                    <center><h2>Detail Pembelian Buku</h2></center>
                </center>
                <div class = "table-responsive">
                    <table class = "table">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Pembelian</th>
                            <th>Jumlah Buku</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td><?php echo $nm ?></td>
                            <td><?php echo $alt?></td>
                            <td><?php echo $jk?></td>
                            <td><?php echo $tgl?></td>
                            <td><?php echo $jml?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kode Buku</th>
                            <th>Pengarang</th>
                            <th>Jenis Buku</th>
                            <th>Harga Buku(Rp)</th> 
                        </tr>
                        <?php foreach ($jdl as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $key+1?></td>
                            <td><?php echo $jdl[$key]; ?></td>
                            <td><?php echo $kb [$key];?></td>
                            <td><?php echo $pe [$key];?></td>
                            <td><?php echo $jb [$key];?></td>
                            <td><?php echo $hb [$key];?></td>
                        </tr>
                        <?php  }?>    
                    </table>
                    <hr>
                    <center><h4>Sub Total</h4></center>
                    <div class = "table-responsive">
                            <table class = "table">
                                <tr>
                                    <th>Total Harga Buku</th> 
                                    <td>Rp. <?php echo $jumlah;?></td>   
                                </tr>
                                <tr>
                                    <th>Diskon</th>
                                    <td>Rp. <?php echo $v?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td>Rp. <?php echo $sub?></td>
                                </tr>
                                <tr>
                                    
                                </tr>
                                
                            </table>
                    </div>
                </div>
            </div>
        </div>
    <?php 
                           
}
    ?>
</body>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</html>