<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Kalkulator Zakat</title>
</head>

<div class="page-dashboard">
    <div class="d-flex" id="wrapper">
        <!-- sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
                <h3>Kalkulator Zakat</h3>
            </div>
            <div class="list-group list-group-flush">
                <a href="?halaman=zakat" class="list-group-item list-group-item-action">
                    Apa Itu Zakat ?
                </a>
                <a href="?halaman=penghasilan" class="list-group-item list-group-item-action">
                    Zakat Penghasilan
                </a>
                <a href="?halaman=mal" class="list-group-item list-group-item-action">
                    Zakat Mal
                </a>
                <a href="?halaman=mas" class="list-group-item list-group-item-action">
                    Zakat Mas
                </a>
                <a href="?halaman=fitrah" class="list-group-item list-group-item-action">
                    Zakat Fitrah
                </a>
            </div>
        </div>



        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light navbar-zakat fixed-top">
                <div class="container-fluid">
                </div>
            </nav>
            <div class="section-content">
                <?php if (isset($_GET["halaman"])) {
                    if ($_GET["halaman"] === 'zakat') {
                        include 'apa-itu-zakat.php';
                    } elseif ($_GET["halaman"] === 'penghasilan') {
                        include 'zakat-penghasilan.php';
                    } elseif ($_GET["halaman"] === 'mal') {
                        include 'zakat-mal.php';
                    } elseif ($_GET["halaman"] === 'mas') {
                        include 'zakat-mas.php';
                    } elseif ($_GET["halaman"] === 'fitrah') {
                        include 'zakat-fitrah.php';
                    }
                } else {
                    include 'apa-itu-zakat.php';
                } ?>
            </div>
        </div>
    </div>
</div>


<body>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>
</body>

</html>