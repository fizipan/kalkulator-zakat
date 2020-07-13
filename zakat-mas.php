<?php
require 'functions.php';

if (isset($_POST["hitung"])) {

    $jumlah = $_POST["jumlah"];
}

?>

<div class="container-fluid">
    <div class="dashboard-heading mb-4">
        <h2>Zakat Mas</h2>

        <?php if (isset($_POST["hitung"])) : ?>
            <div class="alert alert-success alert-dismissible fade show w-50" role="alert">Zakat Penghasilan
                <strong>Rp. <?= number_format(zakatMas($jumlah)) . ",-";  ?></strong>
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
                        <label for="jumlah">Jumlah Emas yang dimiliki <span class="text-danger">&#40;Dalam gram&#41;</span></label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required autofocus autocomplete="off" placeholder="Masukkan jumlah">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="emasSaatIni">Harga Emas Saat Ini</label>
                        <input type="text" name="emasSaatIni" id="emasSaatIni" class="form-control" value="Rp. <?= number_format(932176) . ",-"; ?>" disabled>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nisab">Nishab <span class="text-danger">&#40;85 gram&#41;</span></label>
                        <input type="text" name="nisab" id="nisab" class="form-control" value="Rp. <?= number_format(79234960) . ",-"; ?>" disabled>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success d-block px-4" name="hitung">Bayar zakat</button>
        </form>
    </div>
</div>