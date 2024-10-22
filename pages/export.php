<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'EXPORT - GURIELI'; 
    include $root . 'includes/inside-header.php';
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/export.css">
</head>

    <div class="slider-container <?= $font_class ?>" style="height: auto;">
        <div class="content-slider export" style="background-image: url(<?= $root ?>assets/imgs/contact-bg.svg)">
            <div class="content">
                <div>
                    <img src="<?= $root ?>assets/imgs/gurieli-continents.png" alt="export gurieli img">
                </div>
                <div class="country-chain mt-60 mb-60">
                    <div class="box">
                        <div class="circle circle-1"></div>
                        <h3><?= t('export1'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export2'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export3'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export4'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export5'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export6'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export7'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export8'); ?></h3>
                    </div>
                    <div class="box">
                        <div class="circle"></div>
                        <h3><?= t('export9'); ?></h3>
                    </div>
                </div>

                <div class="export-txts">
                    <h3 class="heading"><?= t('export10'); ?></h3>
                    <p class="txt"><?= t('export11'); ?>
                    </p>
                    
                </div> 

            </div>
        </div>

    </div>
    <script src="<?php echo $root;?>assets/scripts/sliders.js"></script>
    

    <?php
        $root = dirname(__DIR__) . '/'; 
        include $root . 'includes/footer.php';
    ?>


