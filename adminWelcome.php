<?php
session_start();
if (empty($_SESSION['username'])) {
    header("location:login.php?pesan=belum_login");
}
?>

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
        <div class="panel-card teal accent-4">
            <h3 style="text-align:center;color:white;">Data Pemesan Tiket Bus</h3>
            <!-- table  -->
            <table class="highlight teal accent-4">
                <thead>
                    <tr style="text-align:center;">
                        <th>Nomor Tiket</th>
                        <th>Nama Depan</th>
                        <th>Nama Belakang</th>
                        <th>Asal</th>
                        <th>Tujuan</th>
                        <th>Tanggal Pergi</th>
                        <th>Tanggal Pulang</th>
                        <th>Armada Bus</th>
                        <th>Jumlah Penumpang</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    include "koneksi.php";
                    // $query = mysqli_query($conn, "SELECT * FROM tiket 
                    //             VALUES(NULL,'$nm_depan','$nm_belakang','$asal','$tujuan','$tgl_pergi','$tgl_pulang','$alamat','$armada','$jml_penumpang)");
                    $query = mysqli_query($conn, "SELECT * FROM tiket");

                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <tr>
                            <td><?= $data['id_tiket']; ?></td>
                            <td><?= $data['nm_depan']; ?></td>
                            <td><?= $data['nm_belakang']; ?></td>
                            <td><?= $data['asal']; ?></td>
                            <td><?= $data['tujuan']; ?></td>
                            <td><?= $data['tgl_pergi']; ?></td>
                            <td><?= $data['tgl_pulang']; ?></td>
                            <td><?= $data['alamat']; ?></td>
                            <td><?= $data['armada']; ?></td>
                            <td><?= $data['jml_penumpang']; ?></td>
                        <?php } ?>
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