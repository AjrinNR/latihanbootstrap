<?php
    if (isset($_POST['sbm'])) {
        $nm = $_POST['nama'];
        $kls = $_POST['kls'];
        $alt = $_POST['almt'];

        ?>

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
                <div class = "container">
                    <div class ="row">
                        <div class = "col-md-8">
                            <div class = "card">
                                <div class = "card-header">OUTPUT</div>
                                <div class = "card-body">
                                <!-- isi disini -->
                                    <?php 

                                        echo "Nama Anda : $nm <br>";
                                        echo "Kelas Anda  : $kls <br>";
                                        echo "Alamat Anda : $alt";
                                        ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </body>
            <script src="/assets/js/jquery.min.js"></script>     
            <script src="/assets/js/bootstrap.bundle.js"></script>        
            <script src="/assets/js/bootstrap.budle.min.js"></script>
        </html>
  <?php  } ?>