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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,400;1,700&family=Roboto+Mono:ital,wght@0,400;1,300&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm p-0">
        <div class="container text-uppercase">
            <a id="nav-teksti-iso" class="navbar-brand" href="./index.php">Puhelinkauppa</a>
            <div id="nav-teksti-pieni" class="collapse navbar-collapse show d-flex justify-content-lg-end">
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

    <!-- Ostoskorin sisältö -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped" id="content-teksti-pieni">

                        <thead>
                            <tr>
                                <th>Kuva</th>
                                <th>Nimi</th>
                                <th>Hinta</th>
                                <th>Määrä</th>
                                <th>Tapahtuma</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (!isset($_SESSION['tuotteet'])) {
                            header("Location:ostoskori.php?action=emptyall");
                        }
                        ?>
                            <?php foreach ($_SESSION['tuotteet'] as $key => $tuote) : ?>
                                <tr>
                                    <td><img src="<?php echo $tuote['kuva'] ?>" width="50"></td>
                                    <td><?php echo $tuote['nimi'] ?></td>
                                    <td><?php echo $tuote['hinta'] ?>&euro;</td>
                                    <td><?php echo $tuote['qty'] ?></td>
                                    <td><a href="ostoskori.php?action=empty&koodi=<?php echo $key ?>" class="btn btn-danger">Poista</a></td>
                                </tr>
                                <?php 
                                    $yhteishinta = $yhteishinta + $tuote['hinta'] * $tuote['qty'];
                                ?>
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="5" align="right">
                                    <h4>Yhteensä: <?php echo number_format($yhteishinta * $currentQty, 2) ?>&euro;</h4>
                                    <?php if (count($_SESSION['tuotteet']) > 0) {
                                        echo '<a href="ostoskori.php?action=emptyall" class="btn btn-danger">Tyhjennä ostoskori</a>';
                                    }
                                    ?>
                                </td>
                            </tr>
                    </table>

                </div>
                <a href="./index.php" class="btn btn-dark" id="content-teksti-pieni">
                    &larr; Palaa tuotteisiin
                </a>
                <?php if (count($_SESSION['tuotteet']) > 0) {
                    echo '<button type="button" class="btn btn-success" id="ostotapahtumaBtn">
                            Seuraava &rarr;
                        </button>';
                }
                ?>
            </div>
            <!-- Modal -->
            <div id="ostoTapahtuma" class="modal container">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close d-flex justify-content-end ">&times;</span>
                    <p>
                    <h4 class="mt-2 text-center">Kiitos tilauksesta!</h4>
                    <hr>Tämä on näyttö, ja ideana on yksinkertaisesti näyttää tietokannan yhdistämistä nettisivuun,
                    joten mitään oikeaa maksutapahtumaa ei tehdä.
                    <hr>
                    <p class="text-black-50">Painamalla "Jatka" nappulaa, ostoskori tyhjenee.<br>Painamalla X tai ruudun ulkopuolelle, voit palata takaisin ostoskoriin.</p>
                    </p>
                    <a href="ostoskori.php?action=emptyall" class="btn btn-success text-uppercase" id="content-teksti-pieni">Jatka</a>
                </div>

            </div>
        </div>
    </div>


    <script>
        var modal = document.getElementById("ostoTapahtuma");
        var btn = document.getElementById("ostotapahtumaBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>


</body>

</html>