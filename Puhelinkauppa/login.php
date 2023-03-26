<!DOCTYPE html>
<html lang="en">
<?php
include 'system/init.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puhelinkauppa &horbar; Login</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/customCSS.css">
    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;1,700&family=Roboto+Mono:ital,wght@0,400;1,300&display=swap" rel="stylesheet">


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container text-uppercase">
            <a id="nav-teksti-iso" class="navbar-brand" href="./index.php">Puhelinkauppa</a>
        </div>
    </nav>

    <div id="content-teksti-pieni">
        <div id="login">
            <h4 class="text-center text-dark pt-5">Kirjaudu sisään</h4>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="system/login_auth.php" method="post">
                                <h6 class="text-center text-white ">jatkaaksesi ADMIN sivulle...</h6>
                                <div class="form-group">
                                    <label for="tunnus" class="text-white">Tunnus:</label><br>
                                    <input class="form-control" type="text" name="tunnus" placeholder="Tunnus" id="tunnus" required>
                                </div>
                                <div class="form-group">
                                    <label for="salasana" class="text-white">Salasana:</label><br>
                                    <input class="form-control" type="password" name="salasana" placeholder="Salasana" id="salasana" required><br>
                                </div>
                                <input type="submit" name="login_success" class="btn btn-primary btn-md" value="Kirjaudu sisään">
                        </div>
                        </form>
                        <hr>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="./index.php" class="btn btn-secondary " id="content-teksti-pieni">
                                &larr; Palaa tuotteisiin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>