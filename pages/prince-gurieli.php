<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'CLASSIC'; 
    include $root . 'includes/inside-header.php';
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/products.css">
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/about.css">
</head>

    <!-- start slider section  -->
    <body class="<?= $font_class ?>"> 
        <section class="produtc-page-bg" style="background-image: url(<?= $root ?>assets/imgs/products-imgs/product-bg.png);"></section>

        <section class="product-page mb-60 main-products ">
            <div class="product-page-heading">
                <h2 class="heading" style="margin-bottom: 0;"><?= t('prncegurieli1');?></h2>
            </div>
            <div class="product-page-heading subtitle mb-60">
                <h2 class="heading" style="margin-top: 0;"><?= t('prncegurieli2');?></h2>
            </div>

            <!-- product cards  -->
            <div class="card-container products">
                <div class="card" data-popup="popup1">
                    <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli1.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL BLACK');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                </div>
                <div class="card" data-popup="popup2">
                    <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli2.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL GREEN');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                </div>
                <div class="card" data-popup="popup3">
                    <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli3.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('EARL GREY');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                </div>
                <div class="card" data-popup="popup4">
                    <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli4.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('ALPINE BERRY');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                </div>
            </div>


            <div class="product-content-txt" style="margin-bottom: 40px;">
                <p class="txt">
                <?= t('prncegurieli3');?>
                </p>
            </div>




            <!-- traditional tea cards  -->
            <div class="card-container products mb-60 mt-60">
                <div class="card" data-popup="popup5">
                <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli5.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL BLACK');?></h3>
                    <p class="txt"><?= t('Pyramids, 40 gr');?></p>
                </div>
                <div class="card" data-popup="popup6">
                <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli6.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL GREEN');?></h3>
                    <p class="txt"><?= t('Pyramids, 40 gr');?></p>
                </div>
                <div class="card" data-popup="popup7">
                <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli7.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('EARL GREY');?></h3>
                    <p class="txt"><?= t('Pyramids, 40 gr');?></p>
                </div>
                <div class="card" data-popup="popup8">
                <img src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli8.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('ALPINE BERRY');?></h3>
                    <p class="txt"><?= t('Pyramids, 40 gr');?></p>
                </div>
            </div>



            <!-- Popups -->
            <div id="popup1" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli1.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL BLACK');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup1'); ?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                    </div>
                </div>
            </div>

            <div id="popup2" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli2.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL GREEN');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup2'); ?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                    </div>
                </div>
            </div>

            <div id="popup3" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli3.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('EARL GREY');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup3'); ?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                    </div>
                </div>
            </div>

            <div id="popup4" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli4.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('ALPINE BERRY');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup4'); ?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, Vol. 100 gr');?></p>
                    </div>
                </div>
            </div>






            <!-- traditional tea popups  -->
            <div id="popup5" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli5.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL BLACK');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup5'); ?> </p>
                        <p class="heading popup-gr"><?= t('Pyramids, 40 gr');?></p>
                    </div>
                </div>
            </div>
            <div id="popup6" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli6.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL GREEN');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup6'); ?></p>
                        <p class="heading popup-gr"><?= t('Pyramids, 40 gr');?></p>
                    </div>
                </div>
            </div>
            <div id="popup7" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli7.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('EARL GREY');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup7'); ?></p>
                        <p class="heading popup-gr"><?= t('Pyramids, 40 gr');?></p>
                    </div>
                </div>
            </div>
            <div id="popup8" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/prince/prince-gurieli8.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('ALPINE BERRY');?></h3>
                        <h4 class="heading popup-page-title"><?= t('prncegurieli1');?></h4>
                        <p class="txt"><?= t( 'princePopup8'); ?></p>
                        <p class="heading popup-gr"><?= t('Pyramids, 40 gr');?></p>
                    </div>
                </div>
            </div>
        </section>    

        <script src="<?php echo $root;?>assets/scripts/products.js"></script>

        <?php
            $root = dirname(__DIR__) . '/'; 
            include $root . 'includes/footer.php';
        ?>
    </body>