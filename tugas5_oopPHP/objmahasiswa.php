<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $mataKuliah = $_POST['mataKuliah'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $universitas, $mataKuliah, $nilai);

    echo "
    <!doctype html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>tugasOOP_php_msib6</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
    </head>
    <h1 class='text-center my-5'>Output</h1>
    <div class='container'>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>NIM</th>
                    <th scope='col'>Nama</th>
                    <th scope='col'>Universitas</th>
                    <th scope='col'>Mata Kuliah</th>
                    <th scope='col'>Nilai</th>
                    <th scope='col'>Grade</th>
                    <th scope='col'>Predikat</th>
                    <th scope='col'>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>1</th>
                    <td> $mahasiswa->nim </td>
                    <td> $mahasiswa->nama </td>
                    <td> $mahasiswa->universitas </td>
                    <td> $mahasiswa->mataKuliah </td>
                    <td> $mahasiswa->nilai </td>
                    <td> $mahasiswa->grade </td>
                    <td> $mahasiswa->predikat </td>
                    <td> $mahasiswa->status </td>

                </tr>

            </tbody>
        </table>
    </div>
    <body>
   
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script>


    </body>

    </html>
    ";
}
