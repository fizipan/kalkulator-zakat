<?php
require 'functions.php';

if (isset($_POST["hitung"])) {

    $nilaiEmas = $_POST["nilaiEmas"];
    $uang = $_POST["uang"];
    $aset = $_POST["aset"];
    $hutang = $_POST["hutang"];
}

?>
<div class="container-fluid">
    <div class="dashboard-heading mb-4">
        <h2>Zakat Mal</h2>

        <?php if (isset($_POST["hitung"])) : ?>
            <div class="alert alert-success alert-dismissible fade show w-50" role="alert">Zakat Penghasilan
                <strong>Rp. <?= number_format(zakatMal($nilaiEmas, $uang, $aset, $hutang)) . ",-";  ?></strong>
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
                        <label for="nilaiEmas">Nilai Emas atau Perak <span class="text-danger">&#40;RP&#41;</span></label>
                        <input type="number" name="nilaiEmas" id="nilaiEmas" class="form-control" required autocomplete="off" autofocus placeholder="Masukkan angka tanpa titik pemisah">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="uang">Uang atau Tabungan</label>
                        <input type="number" name="uang" id="uang" class="form-control" value="0">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="aset">Kendaraan, Rumah, atau aset lain</label>
                        <input type="number" name="aset" id="aset" class="form-control" value="0">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="hutang">Hutang / Cicilan</label>
                        <input type="number" name="hutang" id="hutang" class="form-control" value="0">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success d-block px-4" name="hitung">Bayar zakat</button>
        </form>
    </div>
</div>