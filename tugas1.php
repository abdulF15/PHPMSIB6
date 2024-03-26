<?php
// home
$nama = "Abdul Fatah";
$posting = "Mahasiswa yang sedang dalam proses pembelajaran menjadi Fullstack Web Developer";

// profile
$universitas = "Mahasiswa Teknik Informatika di Universitas Indraprasta PGRI";
$minat = "Minat dan Hobi: Coding, Desain UI/UX";
$skill = "Keahlian Khusus: Pengembangan Perangkat Lunak, Frontend Development, Backend Development, Desain Web";
$tujuan = "Tujuan Hidup: Menjadi seorang Fullstack Developer yang handal dan berkontribusi dalam menciptakan solusi teknologi yang inovatif untuk permasalahan dunia nyata.";
$quote = 'Kutipan Favorit: " Belajar adalah proses seumur hidup. Jadilah penikmatnya. " - Albert Einstein';

// contact
$email = "aafattahh@gmail.com";
$telp = "nomor telepon: 0851 5881 5065";
$linkedin = 'LinkedIn: <a href="https://www.linkedin.com/in/abdul-fatah-74593529a/" target="_blank">linkedin.com/in/abdul-fatah/</a>';
$github = 'GitHub: <a href="https://www.github.com/abdulf15" target="_blank">github.com/abdulf15</a> ';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abdul Fatah-TUgas1-PHP-MSIB6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 col-md-7">
        <div className="card mt-4">
            <div className="card-header">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>

                    </div>
                </nav>
            </div>
            <div class="card-body" style="border:1px solid grey; ">
                <div class="tab-content" id="nav-tabContent card-body" style="padding:10px 15px">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="card mb-3">
                            <img src="https://source.unsplash.com/1200x600/?university" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $nama ?></h5>
                                <p class="card-text"><?= $posting ?></p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                        <div class="card-mb-3 d-flex" style="gap:10px;">
                            <img src="https://source.unsplash.com/300x400/?programmer" class="img-thumbnail">

                            <div style="margin:auto">
                                <h2 style="text-align:center"><?= $nama ?></h2>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><?= $universitas ?></li>
                                    <li class="list-group-item"> <?= $minat ?> </li>
                                    <li class="list-group-item"><?= $skill ?></li>
                                    <li class="list-group-item"><?= $tujuan ?></li>
                                    <li class="list-group-item"><?= $quote ?></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                        <h2 style="text-align:center">Contact</h2>
                        <ul class="list-group">
                            <li class="list-group-item"><?= $email ?></li>
                            <li class="list-group-item"><?= $telp ?></li>
                            <li class="list-group-item"><?= $linkedin ?> </li>

                            <li class="list-group-item"><?= $github ?></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>