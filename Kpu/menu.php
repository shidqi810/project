<?php
    include 'header.php';
    $tipe = $_GET['tipe'];

    $spasi = str_replace(' ', '', $tipe);

    $cek = substr($tipe, 0, 6);
?>

    <!-- banner part start-->
    <section class="banner_part wow fadeInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><!-- <?= $tipe ?> --></h5>
                            <h3 class=" text-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <?= $tipe ?>
                                <!-- <?php foreach ($text_sub as $text_sub): ?>
                                    <?php if ($tipe == $text_sub['judul']): ?>
                                        <?= $text_sub['sub_text'] ?>
                                    <?php endif ?>
                                <?php endforeach ?> -->
                            </h3>

                            <!-- untuk pilkada
                                Menyajikan hasil pilkada Walikota Dan Gubernur <br> Kota Prabumulih
                             -->

                            <!-- untuk pilkada
                                Menyajikan hasil pilkada Walikota Dan Gubernur <br> Kota Prabumulih
                             -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <h2>Hasil <?= $tipe ?> <br> KPU Kota Prabumulih</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <?php if ($cek == "Pemilu"): ?>
                    <div class="col-lg-4 col-sm-6">
                        <a href="file.php?menu=DPR&tipe=<?= $tipe ?>">
                            <div class="bg-1 single_popular_place wow fadeInUp pb-5" data-wow-duration="1s" data-wow-delay="0.7s">
                                <h1>DPR-D</h1>
                                <img src="img/gedung_dpr.png" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a href="file.php?menu=DPD&tipe=<?= $tipe ?>">
                            <div class="bg-2 single_popular_place wow fadeInUp pb-5" data-wow-duration="1s" data-wow-delay="1.1s">
                                <h1>DPD</h1>
                                <img src="img/gedung_dpd.png" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a href="file.php?menu=Presiden&tipe=<?= $tipe ?>">
                            <div class="bg-4 single_popular_place wow fadeInUp pb-5" data-wow-duration="1s" data-wow-delay="1.7s">
                                <h1>Presiden</h1>
                                <img src="img/gedung_presiden.png" alt="">
                            </div>
                        </a>
                    </div>
                <?php endif ?>

                <?php if ($cek != "Pemilu"): ?>
                    <div class="col-lg-4 col-sm-6">
                        <a href="file.php?menu=Walikota&tipe=<?= $tipe ?>">
                            <div class="bg-5 single_popular_place wow fadeInUp pb-5" data-wow-duration="1s" data-wow-delay="0.7s">
                                <h1>Walikota</h1>
                                <img src="img/gedung_walikota.png" alt="">
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <a href="file.php?menu=Gubernur&tipe=<?= $tipe ?>">
                            <div class="bg-6 single_popular_place wow fadeInUp pb-5" data-wow-duration="1s" data-wow-delay="1.1s">
                                <h1>Gubernur</h1>
                                <img src="img/gedung_gubernur.png" alt="">
                            </div>
                        </a>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>