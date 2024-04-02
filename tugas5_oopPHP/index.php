<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tugasOOP_php_msib6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mt-5">Form Mahasiswa</h1>
    <div class="container">
        <form action="objMahasiswa.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nim" name="nim">
                <label for="nim">NIM:</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="nama" name="nama">
                <label for="nama">Nama:</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="universitas" name="universitas">
                <label for="universitas">universitas:</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="mataKuliah" name="mataKuliah" aria-label="Floating label select example">
                    <option selected>PILIH MATA KULIAH</option>
                    <option value="php">PHP</option>
                    <option value="javascript">Javascript</option>
                    <option value="laravel">Laravel</option>
                </select>
                <label for="mataKuliah">mataKuliah</label>
            </div>

            <div class="form-floating mb-3">

                <input class="form-control" type="text" id="nilai" name="nilai">
                <label for="nilai">Nilai:</label>
            </div>

            <input type="submit" class="mt-5 btn btn-primary" value="Submit">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>