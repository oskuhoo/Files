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
            <a id="nav-teksti-iso" class="navbar-brand" href="./admin.php">Puhelinkauppa &horbar; admin</a>
            <div id="nav-teksti-pieni" class="collapse navbar-collapse show ">
            </div>
            <a href="./admin.php" class="btn btn-secondary " id="content-teksti-pieni">
                &larr; Palaa takaisin
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h3 id="content-teksti-iso" class="my-4 text-uppercase">Ohjeet</h3>
                <div id="content-teksti-pieni" class="list-group">
                    <div style="font-weight: normal; line-height: 1.5;" class="list-group-item badge text-wrap "><div class="pb-3"><u>Nimi</u></div>Tuotteen nimi</div>
                    <div style="font-weight: normal; line-height: 1.5;" class="list-group-item badge text-wrap "><div class="pb-3"><u>Hinta</u></div>Tuotteen hinta numerona</div>
                    <div style="font-weight: normal; line-height: 1.5;" class="list-group-item badge text-wrap "><div class="pb-3"><u>Malli</u></div>Tuotteen mallin nimi merkkijonona</div>
                    <div style="font-weight: normal; line-height: 1.5;" class="list-group-item badge text-wrap "><div class="pb-3"><u>Kuva</u></div>Muotoa 'kuvat/nimi.jpg'</div>
                    <div style="font-weight: normal; line-height: 1.5;" class="list-group-item badge text-wrap "><div class="pb-3"><u>Kuvaus</u></div>Tuotteen kuvaus. Erottamalla tiedot ENTERillä kuvauksesta tulee siisti</div>
                    <div style="font-weight: normal; line-height: 1.5;" class="list-group-item badge text-wrap "><div class="pb-3"><u>Koodi</u></div>Koodi voi olla, mikä tahansa uniikki sarja, esim. tuotteeseen liittyvä. Kunhan se ei ole sama toisen koodin kanssa.</div>
                </div>
            </div>

            <div class="col-lg-9 d-flex flex-column">
                <div class="row mt-4 ">
                    <form id="content-teksti-iso" class="d-flex d-block flex-column" name="lisaa_tuote_form" action="admin_insert.php" onsubmit="return validateForm()" method="post">
                        Nimi <input type="text" name="nimi"><br>
                        Hinta <input type="text" name="hinta"><br>
                        Malli <input type="text" name="malli" placeholder="Esim. Samsung, iPhone..."><br>
                        Kuva <input type="text" name="kuva" placeholder="kuvat/[kuvan nimi].jpg"><br>
                        Kuvaus <textarea type="text" name="kuvaus" style="height: 200px;" ></textarea><br>
                        Koodi <input type="text" name="koodi" placeholder="PT101, PT102, PT[malli]...">
                        <br>
                        <br>
                        <input class="btn btn-success " type="submit" value="Lisää tuote"><br>
                    </form>

                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <footer class="py-5 bg-dark ">
        <div class="container">
            <p id="content-teksti-pieni" class="m-0 text-center text-white text-uppercase">Copyright &copy; Puhelinkauppa <?php echo date("Y"); ?></p>
        </div>
    </footer>

    <script>
        function validateForm() {
            var koodi = document.forms["lisaa_tuote_form"]["koodi"].value;
            if (koodi == "") {
                alert("Tuotteen koodia ei voi jättää tyhjäksi.");
                return false;
            }
        }
    </script>

</body>

</html>