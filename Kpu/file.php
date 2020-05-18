<?php 
    include 'header.php';
    $tipe = $_GET['tipe'];
    $menu = $_GET['menu'];

    $file = query("SELECT * FROM file");
    $text_sub = query("SELECT * FROM text_sub");

    $spasi = str_replace(' ', '', $tipe);
?>

    <!-- banner part start-->
    <section class="banner_part wow fadeInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"><?= $tipe ?></h5>
                            <h3 class=" text-white wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                                <?php foreach ($text_sub as $text_sub): ?>
                                    <?php if ($tipe == $text_sub['judul']): ?>
                                        <?= $text_sub['sub_text'] ?>
                                    <?php endif ?>
                                <?php endforeach ?>
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

    <div class="container">
        <?php $i = 1; ?>
        <?php foreach ($file as $file): ?>
            <?php if ($tipe == $file['judul'] && $menu == $file['menu']): ?>

                <?php if ( ($tipe != "Pilkada 2023") && ($tipe != "Pemilu 2024") ): ?>

                    <?php if ($tipe == "Pemilu 2019"): ?>
                        <a href="hasil/<?= $menu . $spasi . $i ?>.pdf" class="btn btn-success mt-5 mb-5">download</a>
                        <br>
                        <?php $i++; ?>
                    <?php endif ?>

                    <?php if ($tipe != "Pemilu 2019"): ?>
                        <a href="hasil/<?= $menu . $spasi ?>.pdf" class="btn btn-success mt-5 mb-5">download</a>
                        <br>
                    <?php endif ?>
                    <img class="shadow mb-5" src="<?= $file['foto'] ?>">
                <?php endif ?>

                <?php if ( ($tipe == "Pilkada 2023") || ($tipe == "Pemilu 2024") ): ?>
                    <div class="row justify-content-center px-3 mb-3">
                        <img class="mb-5 wow fadeIn" data-wow-duration="3s" src="<?= $file['foto'] ?>">
                    </div>
                <?php endif ?>
            <?php endif ?>
        <?php endforeach ?>
    </div>

<?php include 'footer.php'; ?>