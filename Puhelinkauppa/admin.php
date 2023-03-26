<!DOCTYPE html>
<html lang="en">
<?php
include 'system/init.php';
?>
<?php
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === FALSE) {
    header("Location:index.php");
    exit;
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puhelinkauppa &horbar; ADMIN</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/customCSS.css">
    <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;1,700&family=Roboto+Mono:ital,wght@0,400;1,300&display=swap" rel="stylesheet">


</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container text-uppercase">
            <a id="nav-teksti-iso" class="navbar-brand" href="./admin.php">Puhelinkauppa &horbar; Admin</a>
            <div id="nav-teksti-pieni" class="collapse navbar-collapse show ">
            </div>
            <a href="./admin_lisaa_tuote.php" class="btn btn-success" id="content-teksti-pieni">Lisää tuote</a>
            <a href="system/logout.php" class="btn btn-danger" id="content-teksti-pieni" style="margin-left: 10px;">Kirjaudu ulos</a>

        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
            <div id="nav-teksti-pieni" style="font-weight: bold;" class="py-2 pb-sm-2 text-center text-uppercase">Tuotteita yhteensä: <?= $stmt->rowCount() ?></div>
                <div class="table-responsive">
                    <table class="table table-striped" id="content-teksti-pieni">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>nimi</th>
                                <th>hinta</th>
                                <th>malli</th>
                                <th>kuva</th>
                                <th>kuvaus</th>
                                <th>koodi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tuotteet as $tuote) : ?>
                                <tr>
                                    <td><?= $tuote['id'] ?></td>
                                    <td><?= $tuote['nimi'] ?></td>
                                    <td><?= $tuote['hinta'] ?></td>
                                    <td><?= $tuote['malli'] ?></td>
                                    <td><?= $tuote['kuva'] ?></td>
                                    <td><?= $tuote['kuvaus'] ?></td>
                                    <td><?= $tuote['koodi'] ?></td>
                                    <td><a onclick="return oletkoVarma()" href="poista_tuote.php?id=<?php echo $tuote['id'] ?>" class="btn btn-danger">Poista</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p id="content-teksti-pieni" class="m-0 text-center text-white text-uppercase">Copyright &copy; Puhelinkauppa <?php echo date("Y"); ?></p>
        </div>
    </footer>

</body>

<script>
    function oletkoVarma() {
        if (confirm("Oletko varma, että haluat poistaa tuotteen?")) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>