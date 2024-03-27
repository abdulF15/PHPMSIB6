<?php
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$product = isset($_POST['product']) ? $_POST['product'] : '';
$jumlah_beli = isset($_POST['beli']) ? intval($_POST['beli']) : 0; // Convert to integer
$submit = isset($_POST['submit']) && !empty($_POST['submit']);

if ($submit) {
    $harga_satuan = 0;
    $total_belanja = 0;
    $diskon = 0;
    $ppn = 0;
    $harga_bersih = 0;

    // Harga satuan berdasarkan produk
    switch ($product) {
        case 'kulkas':
            $harga_satuan = 2000000;
            break;
        case 'mesincuci':
            $harga_satuan = 1500000;
            break;
        case 'ac':
            $harga_satuan = 3000000;
            break;
        case 'tv':
            $harga_satuan = 2500000;
            break;
        default:
            $harga_satuan = 0;
    }

    // Menghitung total belanja
    $total_belanja = $jumlah_beli * $harga_satuan;

    // Menghitung diskon
    $diskon = 0.2 * $total_belanja;

    // Menghitung PPN
    $ppn = 0.1 * ($total_belanja - $diskon);

    // Menghitung harga bersih
    $harga_bersih = ($total_belanja - $diskon) + $ppn;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abdul Fatah-TUgas1-PHP-MSIB6</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="card ml-3 float-start" style="width:300px;">
        <div class="card-body">
            <h5 class="card-title">SOAL FORM BELANJA</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">HARGA SATUAN: IF/SWITCHCASE</h6>
            <p class="card-text">TOTAL BELANJA : JUMLAHBELI + HARGA SATUAN</p>
            <p class="card-text">DISKON: 20% + TOTAL BELANJA</p>
            <p class="card-text">PPN: 10% + (TOTAL BELANJA-DISKON)</p>
            <p class="card-text">HARGA BERSIH : (TOTAL BELANJA - DISKON) + PPN</p>
        </div>
    </div>
    <div class="container col-md-6 " style="margin-top: -300px;">
        <form method="POST">
            <h1 class="text-center mb-5">FORM BELANJA</h1>
            <div class="form-group row">
                <label for="nama" class="col-3 col-form-label">Nama Pelanggan</label>
                <div class="col-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="product" class="col-3 col-form-label">Product Pilihan</label>
                <div class="col-9">
                    <select id="product" name="product" class="custom-select">
                        <option value="">-- PILIH PRODUCT --</option>
                        <option value="kulkas">Kulkas</option>
                        <option value="mesincuci">Mesin Cuci</option>
                        <option value="ac">AC</option>
                        <option value="tv">TV</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="beli" class="col-3 col-form-label">Jumlah Beli</label>
                <div class="col-9">
                    <input id="beli" name="beli" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-3 col-9">
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    <input type="reset" value="reset" class="btn btn-danger">
                </div>
        </form>

    </div>
    <?php if ($submit) : ?>
        <div class="mt-5">
            <h1 class="text-center mb-5">Hasil Output : </h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Jumlah Beli</th>
                        <th scope="col">Harga Satuan</th>
                        <th scope="col">Total Belanja</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">PPN</th>
                        <th scope="col">Harga Bersih</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">1</th>
                        <td><?= $nama ?></td>
                        <<td><?= $product ?></td>
                            <td><?= $jumlah_beli ?></td>
                            <td><?= $harga_satuan ?></td>
                            <td><?= $total_belanja ?></td>
                            <td><?= $diskon ?></td>
                            <td><?= $ppn ?></td>
                            <td><?= $harga_bersih ?></td>
                    </tr>

                </tbody>
            </table>
        </div>
    <?php endif; ?>


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>

</html>