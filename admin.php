<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css" />
    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js"></script>
    <!-- For font -->
    <link href="https://fonts.googleapis.com/css?family=Public+Sans&display=swap" rel="stylesheet" />
    <!-- For icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Login Page</title>
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script>alert('Username dan password salah!')</script>";
        } elseif ($_GET['pesan'] == "logout") {
            echo "<script>alert('Anda berhasil Logout)</script>";
        } elseif ($_GET['pesan'] == "belum_login") {
            echo "<script>alert('Anda harus login untuk mengaskses halaman ini!')</script>";
        }
    }
    ?>
    <div class="container" id="container-login">
        <div class="row" id="card-login">
            <div class="icon-user" id="icon-user">
                <i class="large material-icons">
                    account_circle
                </i>
                <h5>ADMINISTRATOR</h5>
            </div>
            <!-- form -->
            <form class="col s12" action="adminproses.php" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="username" name="username" type="text" class="validate" />
                        <label for="username" style="color: white;">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate" />
                        <label for="password" style="color: white;">Password</label>
                    </div>
                </div>

                <!-- <div class="row" style="text-align: center;"> -->
                    <a class="waves-effect waves-light btn">
                        <input type="submit" value="Sign in">
                    </a>
                <!-- </div> -->
                <div class="" style="text-align: center;color: white;">
                    <a href="register.php">Do not have account? Sign Up now</a>
                </div>
            </form>
            <!-- end form -->
        </div>
    </div>
</body>

</html>