<?php 
    include 'header.php';
    $text_sub = query("SELECT * FROM text_sub");
?>

    <!-- banner part start-->
    <section class="banner_part wow fadeInDown" data-wow-duration="2s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">Komisi Pemilihan Umum</h5>
                            <h1 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="1.5s">Kota Prabumulih</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <div class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
        <img src="img/bg3.png">
    </div>

    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                        <h2>Hasil Pemilu / Pilkada <br> KPU Kota Prabumulih</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php $i = 1; ?>
                <?php foreach ($text_sub as $text_sub): ?>
                    <?php if ($text_sub['judul'] != "Pilkada 2023" && $text_sub['judul'] != "Pemilu 2024"): ?>
                        <div class="col-lg-4 col-sm-6">
                            <a href="menu.php?tipe=<?= $text_sub['judul'] ?>">
                                <div class="bg-<?= $i ?> single_popular_place wow fadeInUp pb-5" data-wow-duration="1s" data-wow-delay="<?= $text_sub['durasi'] ?>s">
                                    <h1><?= $text_sub['judul'] ?></h1>
                                    <img src="<?= $text_sub['icon'] ?>" alt="">
                                </div>
                            </a>
                        </div>
                    <?php endif ?>

                    <?php if ($text_sub['judul'] == "Pilkada 2023" || $text_sub['judul'] == "Pemilu 2024"): ?>
                        <div class="col-lg-4 col-sm-6">
                            <a href="file.php?tipe=<?= $text_sub['judul'] ?>&menu=">
                                <div class="bg-<?= $i ?> single_popular_place wow fadeInUp pb-5" data-wow-duration="1s" data-wow-delay="<?= $text_sub['durasi'] ?>s">
                                    <h1><?= $text_sub['judul'] ?></h1>
                                    <img src="<?= $text_sub['icon'] ?>" alt="">
                                </div>
                            </a>
                        </div>
                    <?php endif ?>
                <?php $i++; ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- use sasu part end-->

<?php include 'footer.php'; ?>