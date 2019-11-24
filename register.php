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
  <title>Register Page</title>
</head>

<body>
  <div class="container" id="container-login">
    <!-- icon login card -->
    <div class="row" id="card-register">
      <div class="icon-user" id="icon-user">
        <i class="large material-icons">
          account_circle
        </i>
      </div>
      <!-- end icon login card -->

      <!-- Name, username, password -->
      <form class="col s12" action="registerproses.php" method="post">
        <div class="row">
          <div class="input-field col s12">
            <input id="name" name="name" type="text" class="validate" />
            <label for="name" style="color: white;">Name</label>
          </div>
        </div>
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
        <!-- button sign in -->
        <div class="row" style="text-align: center;">
          <a class="waves-effect waves-light btn">
            <input type="submit" value="Sign Up">
          </a>
        </div>
        <div class="" style="text-align: center;">
          <a href="login.php">Have an account? Sign In now</a>
        </div>
      </form>
      <!-- Name, username, password -->
    </div>
  </div>
</body>

</html>