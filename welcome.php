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
    <title>Welcome Page</title>
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="nav-wrapper" id="navbarWelcome">
            <a href="#" class="brand-logo">BUSCO</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- form  -->

    <body>
        <div class="container" id="welcome-form">
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="input-field col s12">
                        <select>
                            <option value="" disabled selected>Asal</option>
                            <option value="1">Klaten</option>
                            <option value="2">Magelang</option>
                            <option value="3">Surabaya</option>
                            <option value="3">Malang</option>
                            <option value="3">Semarang</option>
                            <option value="3">Pagaralam</option>
                            <option value="3">Purwokerto</option>
                        </select>
                        <label>Materialize Select</label>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col s12">
                            This is an inline input field:
                            <div class="input-field inline">
                                <input id="email_inline" type="email" class="validate">
                                <label for="email_inline">Email</label>
                                <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
    <!-- end form  -->

</body>

</html>