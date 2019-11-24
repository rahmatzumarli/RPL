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
  <nav>
    <div class="nav-wrapper" id="navbarWelcome">
      <a href="#" class="brand-logo">BUSCO</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- container -->
  <div class="container" id="WelcomeForm">
    <!-- panel card -->
    <div class="card-panel" id="CardPanel">
      <!-- form -->
      <div class="row">
        <form class="col s12" action="welcomeproses.php" method="post" <!-- nama depan -->
          <div class="row">
            <div class="input-field col s6">
              <input name="nm_depan" id="first_name" type="text" class="validate" style="color: white;" />
              <label for="first_name" style="color: black;font-size: 15px;">Nama Depan</label>
            </div>
            <!-- nama belakang -->
            <div class="input-field col s6">
              <input name="nm_belakang" id="last_name" type="text" class="validate" />
              <label for="last_name" style="color: black;font-size: 15px;">Nama Belakang</label>
            </div>
          </div>
          <!-- Asal -->
          <label>Asal</label>
          <select class="browser-default" name="asal">
            <option value="" disabled selected>Pilih kota asal</option>
            <option value="yogyakarta">Yogyakarta</option>
            <option value="semarang">Semarang</option>
            <option value="solo">Solo</option>
            <option value="surabaya">Surabaya</option>
            <option value="magelang">Magelang</option>
          </select><br />
          <!-- Tujuan -->
          <label>Tujuan</label>
          <select class="browser-default" name="tujuan">
            <option value="" disabled selected>Pilih kota tujuan</option>
            <option value="yogyakarta">Yogyakarta</option>
            <option value="semarang">Semarang</option>
            <option value="magelang">Solo</option>
            <option value="surabaya">Surabaya</option>
            <option value="magelang">Magelang</option>
          </select><br>
          <!-- tanggal pergi -->
          <div class="row">
            <div class="input-field col s6">
              <input name="tgl_pergi" placeholder="Tangal Pergi" id="first_name" type="date" class="validate" />
              <label for="first_name" style="color: white;font-size: 15px;">Tanggal Pergi</label>
            </div>
            <!-- tanggal pulang -->
            <div class="input-field col s6">
              <input name="tgl_pulang" id="last_name" type="date" class="validate" />
              <label for="last_name" style="color: white;font-size: 15px;">Tanggal Pulang</label>
            </div>
          </div>
          <!-- alamat -->
          <label for="last_name">Alamat</label><br>
          <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>

          <!-- Armada -->
          <label>Armada</label>
          <select class="browser-default" name="armada">
            <option value="" disabled selected>Pilih Armada</option>
            <option value="VVIP">VVIP</option>
            <option value="VIP">VIP</option>
            <option value="SuperExecutive">Super Excutive</option>
            <option value="Executive">Excutive</option>
            <option value="Patas">Patas Toilet</option>
          </select><br>

          <!-- Jumlah Penumpang -->
          <label>Jumlah Penumpang</label>
          <select class="browser-default" name="jml_penumpang">
            <option value="" disabled selected>Pilih Jumlah Penumpang</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select><br>

          <!-- pilih seat -->
          <label>Pilih Seat</label>
          <!-- seat -->
          <div class="card-panel" id="Seat">
            <div class="row">
              <div class="col s1">1</div>
              <div class="col s1">3</div>
              <div class="col s1">5</div>
              <div class="col s1">7</div>
              <div class="col s1">9</div>
              <div class="col s1">11</div>
              <div class="col s1">13</div>
              <div class="col s1">15</div>
              <div class="col s1">17</div>
              <div class="col s1">19</div>
              <div class="col s1">21</div>
              <div class="col s1">23</div>
            </div>
            <div class="row">
              <div class="col s1">2</div>
              <div class="col s1">4</div>
              <div class="col s1">6</div>
              <div class="col s1">8</div>
              <div class="col s1">10</div>
              <div class="col s1">12</div>
              <div class="col s1">14</div>
              <div class="col s1">16</div>
              <div class="col s1">18</div>
              <div class="col s1">20</div>
              <div class="col s1">22</div>
              <div class="col s1">24</div>
            </div>
          </div>
          <!-- end seat -->

      </div>
      <!-- <div class="submit-button"> -->
        <a class="waves-effect waves-light btn">
          <input type="submit" value="Pesan Tiket">
        </a>
      <!-- </div> -->
      </form>
    </div>
    <!-- end form -->
  </div>
  <!-- end panel card -->
  </div>
  <!-- end container -->
</body>

</html>