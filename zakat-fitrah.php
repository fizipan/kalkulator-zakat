<?php
require 'functions.php';

if (isset($_POST["hitung"])) {

    $jumlah = $_POST["jumlah"];
}

?>

<div class="container-fluid">
    <div class="dashboard-heading mb-4">
        <h2>Zakat Fitrah</h2>

        <?php if (isset($_POST["hitung"])) : ?>
            <div class="alert alert-success alert-dismissible fade show w-50" role="alert">Zakat Fitrah
                <strong>Rp. <?= number_format(zakatFitrah($jumlah)) . ",-";  ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>

    </div>
    <div class="dashboard-content">
        <form action="" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jumlah">Jumlah Orang</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" autofocus autocomplete="off" placeholder="Jumlah Orang" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="HargaBeras">Harga Beras <span class="text-danger">&#40;Dalam Rp&#41;</span></label>
                        <input type="text" name="HargaBeras" id="HargaBeras" class="form-control" value="Rp. <?= number_format(40000) . ",-"; ?>" disabled>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success d-block px-4" name="hitung">Bayar zakat</button>
        </form>
    </div>
</div>