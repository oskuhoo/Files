<!DOCTYPE html>
<html lang="en">
<?php
include 'system/init.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puhelinkauppa</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm p-0">
        <div class="container text-uppercase">
            <a id="nav-teksti-iso" class="navbar-brand" href="./index.php">Puhelinkauppa</a>
            <div id="nav-teksti-pieni" class="collapse navbar-collapse show d-flex justify-content-lg-end ">
                <ul class="navbar-nav d-inline">
                    <li class="nav-item btn btn-dark">
                        <a class="nav-link" href="./login.php">Admin</a>
                    </li>
                    <li class="nav-item btn btn-dark">
                        <a class="nav-link" href="./ostoskori.php">Ostoskori </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
    if (isset($_SESSION['tuotteet'])) {
        if (count($_SESSION['tuotteet']) == 1) {
            echo '<div id="nav-teksti-pieni" class="alert alert-info m-0 p-0 text-center" role="alert">
                Ostoskorissa on tuote!
            </div>';   
        }else if (count($_SESSION['tuotteet']) > 0) {
            echo '<div id="nav-teksti-pieni" class="alert alert-info m-0 p-0 text-center" role="alert">
                Ostoskorissa on tuotteita!
            </div>';   
        }
    }
    ?>


    <!-- Sivun sisältö -->
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT DISTINCT malli FROM tuotteet";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $mallit = $stmt->fetchAll();
            ?>
            <div class="col-lg-3">
                <h1 id="content-teksti-iso" class="my-4 text-uppercase">Mallit</h1>
                <div id="content-teksti-pieni" class="list-group">

                    <?php foreach ($mallit as $malli) : ?>
                        <div class="list-group-item"><?php echo $malli["malli"]; ?></div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- Tuotekortit -->
            <div class="col-lg-9">
                <div class="row mt-4">
                    <?php
                    foreach ($tuotteet as $tuote) :
                    ?>

                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <div><img class="card-img-top " src="<?php echo $tuote["kuva"]; ?>" alt="<?php echo $tuote["nimi"]; ?>"></div>
                                <div id="tuote-teksti" class="card-body">
                                    <h4 class="card-title text-center p-2 border-secondary border-bottom" style="font-style: italic; font-weight: bold;">
                                        <div class="text-dark text-decoration-none "><?php echo $tuote["nimi"]; ?></div>
                                    </h4>
                                    <p class="card-text text-left text-nowrap" id="kuvaus">
                                        <?php echo $tuote["kuvaus"]; ?>
                                    </p>
                                    <h5 class="text-center text-muted"><?php echo $tuote["hinta"]; ?><span>&euro;</span></h5>
                                </div>

                                <div id="content-teksti-pieni" class="container p-3 text-center">
                                    <form class="form-submit" method="post" action="index.php?action=addcart">
                                        <button type="submit" class="btn btn-dark text-uppercase">Lisää koriin</button>
                                        <input type="hidden" name="koodi" value="<?php echo $tuote['koodi'] ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div> <!-- Tuotekorttien loppu -->

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

</html>