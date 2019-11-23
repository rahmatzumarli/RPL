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
    <link
      href="https://fonts.googleapis.com/css?family=Public+Sans&display=swap"
      rel="stylesheet"
    />
    <!-- For icon -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Login Page</title>
  </head>

  <body>
    <div class="container" id="container-login">
      <div class="row" id="card-login">
        <div class="icon-user" id="icon-user">
          <i class="large material-icons">
            account_circle
          </i>
        </div>
        <form class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input id="username" type="text" class="validate" />
              <label for="username" style="color: white;">Username</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" type="password" class="validate" />
              <label for="password" style="color: white;">Password</label>
            </div>
          </div>

          <div class="row" style="text-align: center;">
            <a class="waves-effect waves-light btn">
              Sign in
            </a>
          </div>
          <div class="" style="text-align: center;color: white;">
            <a href="register.php">Do not have account? Sign Up now</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
