<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}
?>

<?php include "koneksi.php" ?>

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
    <!-- <link rel="stylesheet" href="css-bootstrap/bootstrap.min.css" /> -->
    <!-- <script src="js-bootstrap/bootstrap.min.js"></script> -->
    <title>Welcome Page</title>
</head>

<body>
    <?php

    /**
     * Generate a random string, using a cryptographically secure 
     * pseudorandom number generator (random_int)
     * 
     * For PHP 7, random_int is a PHP core function
     * For PHP 5.x, depends on https://github.com/paragonie/random_compat
     * 
     * @param int $length      How many characters do we want?
     * @param string $keyspace A string of all possible characters
     *                         to select from
     * @return string
     */
    function random_str(
        int $length = 64,
        string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
    ): string {
        if ($length < 1) {
            throw new \RangeException("Length must be a positive integer");
        }
        $pieces = [];
        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $pieces[] = $keyspace[random_int(0, $max)];
        }
        return implode('', $pieces);
    }

    $b = random_str(6, 'abcdefghi123456');
    // var_dump($b);

    ?>
    <!-- navbar -->
    <nav style="margin-bottom:5%;">
        <div class="nav-wrapper" id="navbarWelcome">
            <a href="#" class="brand-logo">BUSCO</a>

            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="adminLogout.php">Logout</a></li>
            </ul>
        </div>
        <div>
            Hello,<?php echo $_SESSION['username']; ?>!
        </div>
    </nav>
    <!-- end navbar -->
    <!-- container -->
    <div class="container">
        <!-- panel-card -->
        <div class="panel-card teal accent-4" style="border-radius:25px;">
            <h3 style="text-align:center;color:white;">Data Pemesan Tiket Bus</h3>
            <!-- table  -->
            <table style="margin:30px;">
                <thead>
                    <h5 style="text-align:center;">Selamat tiket atas nama <?php echo $_SESSION['username']; ?> berhasil dicetak!</h5>
                    <h5 style="text-align:center;">Kode tiket = <?php var_dump($b); ?> </h5>
                </thead>

                <tbody>
                    <tr style="text-align:center;">
                        <th>Nomor Tiket</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Nama Depan</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Nama Belakang</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Asal</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Tujuan</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Tanggal Pergi</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Tanggal Pulang</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Armada</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                    <tr>
                        <th>Jumlah Penumpang</th>
                        <th>:</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
            <!-- table end  -->
        </div>
        <!-- panel card -->
    </div>
    <!-- container end  -->
</body>

</html>