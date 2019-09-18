<?php
    session_start();
    if (isset($_POST['Login'])) {
        $a = $_POST['user'];
        $b = $_POST['pass'];
        //periksa login
        if ($a == "ajrin" && $b == "123") {
            //menciptakan session
            $_SESSION['login'] = $a;
            header("Location: latihan2.php");
        } else {
            die("username atau password anda salah 
            silahkan kembali login <a href=loginlatihan2.php> Login </a>");
        }
    } else {
        ?>
        <html>

        <head>
            <title>Login here...</title>
            <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        </head>

        <body>
            <div class = "container">
                <div class = "col-md-12">
                    <div = "card">
                    <div class = "card-header"><h2>Login Here...</h2></div>
                    <div class = "card-body">
                        <form action="" method="post">
                            <div class = "form-group">
                                Username : <input type="text" name="user" class = "form-control" style = "width : 30%"><br>
                                Password : <input type="password" name="pass" class = "form-control" style = "width : 30%"><br>
                                <input type="submit" name="Login" value="Log In">
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            
        </body>
            <script src="/assets/js/jquery.min.js"></script>     
            <script src="/assets/js/bootstrap.bundle.js"></script>        
            <script src="/assets/js/bootstrap.bundle.min.js"></script>
        </html>
<?php
}
?>