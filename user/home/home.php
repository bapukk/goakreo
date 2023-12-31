<?php
include '../../function.php';
$event = query('SELECT * FROM event');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="home.css">
    <title>Goa Kreo</title>
</head>

<body>
    <div class="container">
        <div class="header" id="header">
            <a href="#home" id="logo">GOA <span style="color: #333;">KREO</span></a>
            <nav class="navbar">
                <ul class="nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#event">Event</a></li>
                    <li><a href="../spot/spot.php">Spot</a></li>
                    <li><a href="../contact/contact.php">Contact</a></li>
                </ul>
            </nav>
            <a href="#" id="line-menu"><i data-feather="menu"></i></a>
        </div>
        <!-- ----------------------- content --------------------------->
        <!-- ------------------------ home ----------------------------->
        <div class="wisata" id="home">
            <!-- <h2>Wisata Goa Kreo</h2> -->
        </div>
        <div class="hero">
            <div class="about-about">
                <div class="heading">
                    <div class="desc">
                        <img src="../asset/gbr.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h4>Apa itu Goa Kreo?</h4>
                        <p>Goa Kreo merupakan objek wisata terkenal yang berlokasi dikota Semarang. Didalam kawasan
                            wisata Goa Kreo terdapat kera yang menjadi ikon dan daya tarik bagi wisatawan. Goa Kreo
                            terletak ditengah waduk jatibarang
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="about">
            <div class="about-about">
                <div class="legend">
                    <div class="desa">
                        <h4>Legenda Goa Kreo</h4>
                        <p>Dikisahkan saat sunan kalijaga bersama 4 santrinya diutus keselatan yaitu dijatingaleh
                            semarang untuk mencari kayu jati yang akan digunakkan sebagai tiang masjid agung Demak.
                            disaat para santri akan menebang kayu jati disitu ada kawanan 4 monyet
                            (kuning,merah,hitam,putih). Kawanan monyet tidak setuju dengan penebangan tersebut, lalu
                            terjadi perkelahian yang dimenangkan sunan kalijaga. Akhirnya kawanan monyet ikut membantu 4
                            santri menebang pohon jati, kemudian kayu tersebut dihanyutkan kesungai namun tersangkut.
                            Dari situlah sunan kalijaga menemukan ada goa dan bertapa meminta petunjuk agar kayu ini
                            dapat jalan. setelah sunan kalijaga mendapat petunjuk dan kayu itu bisa
                            berjalan(hanyut),sunan kalijaga melanjutkan perjalanan pulang. Namun 4 monyet itu meminta
                            ikut ke daerah demak tapi tidak diperbolehkan dan disuruh menjaga(kreo). Maka jadilah Gua
                            Kreo. Kata "Kreo" berasal dari Mangreho yang berarti penjaga.
                        </p>
                    </div>
                    <div class="desa">
                        <img src="../asset/gbr.jpeg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <div class="atas2" id="event"></div>
        <div class="atas">
            <h4>EVENT</h4>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php foreach ($event as $even): ?>
                        <div class="card swiper-slide card-1">
                            <div class="image-content">
                                <span class="overlay"></span>
                                <div class="card-image">
                                    <img src="../../img/<?= $even['gambar']; ?>" alt="" class="card-image">
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="judul">
                                    <h4 class="name">
                                        <?= $even['nama']; ?>
                                    </h4>
                                </div>
                                <div class="ygy">
                                    <p>
                                        <?= $even['deskripsi']; ?>
                                    </p>
                                </div>

                                <button class="btn" id="<?= $even['id']; ?>">Read More</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <?php foreach ($event as $even): ?>
            <div class="popup" id="popup<?= $even['id']; ?>">
                <div class="popup-content">
                    <div class="popup-img">
                        <img src="../../img/<?= $even['gambar']; ?>" alt="monkey">
                        <img src="../../img/<?= $even['gambar']; ?>" alt="monkey1">
                        <img src="../../img/<?= $even['gambar']; ?>" alt="monkey2">
                    </div>
                    <div class="popup-header">
                        <h2>
                            <?= $even['nama']; ?>
                        </h2>
                    </div>
                    <div class="popup-des">
                        <h3>tanggal :
                            <?= $even['tanggal']; ?>
                        </h3>
                    </div>
                    <div class="popup-text">
                        <p>
                            <?= $even['deskripsi']; ?>
                        </p>
                    </div>
                    <input type="button" class="btn popup-btn" id="<?= $even['id']; ?>" value="CLOSE">
                </div>
            </div>
        <?php endforeach; ?>
        <div class="footer">
            <p> Copyright &copy; Team Almithali</p>
        </div>
    </div>
    <script>
        feather.replace();
    </script>
    <script src="swiper-bundle.min.js"></script>
    <script src="home.js"></script>
</body>

</html>