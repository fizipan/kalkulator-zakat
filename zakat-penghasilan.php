<?php
require 'functions.php';

if (isset($_POST["hitung"])) {

    $pendapatan = $_POST["pendapatan"];
    $pendapatanLain = $_POST["pendapatanLain"];
    $hutang = $_POST["hutang"];
}

?>


<div class="container-fluid">
    <div class="dashboard-heading mb-4">
        <h2>Zakat Penghasilan</h2>

        <?php if (isset($_POST["hitung"])) : ?>
            <div class="alert alert-success alert-dismissible fade show w-50" role="alert">Zakat Penghasilan
                <strong>Rp. <?= number_format(zakatHasil($pendapatan, $pendapatanLain, $hutang)) . ",-";  ?></strong>
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
                        <label for="Pendapatan">Pendapatan Perbulan</label>
                        <input type="number" name="pendapatan" id="Pendapatan" class="form-control" required placeholder="Masukkan angka tanpa titik pemisah" autofocus autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pendapatan">Pendapatan Lain</label>
                        <span class="text-danger">Optional</span>
                        <input type="number" name="pendapatanLain" id="PendapatanLain" class="form-control" value="0">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hutang">Hutang / Cicilan</label>
                        <span class="text-danger">Optional</span>
                        <input type="number" name="hutang" id="hutang" class="form-control" value="0">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success d-block px-4" name="hitung">Hitung zakat</button>
        </form>
    </div>
</div>