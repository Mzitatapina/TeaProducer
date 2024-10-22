<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'ICED TEA - GURIELI'; 
    include $root . 'includes/inside-header.php'; 
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/products.css">
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/about.css">
</head>

    <!-- start slider section  -->
    <body class="iced-tea <?= $font_class ?>"> 
        <section style="padding: 0; padding-top: 60px; ">
            <div class="fade-in produtc-page-bg" style="background-image: url(<?= $root ?>assets/imgs/products-imgs/iced-bg.png); height: 80vh;"></div>
         </section>

        <section class="product-page mb-60 main-products fade-in">
            <div class="product-page-heading">
                <h2 class="heading"><?= t('ICED_TEA');?></h2>
            </div>
            <div class="product-content-txt" id="classic-product" style="margin-top: 0;">
                <p class="txt">
                    <?= t('iced1');?>
                    <br> <br>
                    <?= t('iced2');?>
                </p>
            </div>

     

            <!-- product cards  -->
            <div class="card-container products mb-60">
                <div class="card" data-popup="popup1">
                    <img src="<?= $root ?>assets/imgs/products-imgs/iced-tea/atami.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('Peach');?></h3>
                    <p class="txt"><?= t('ICED_TEA');?></p> 
                </div>
                <div class="card" data-popup="popup2">
                    <img src="<?= $root ?>assets/imgs/products-imgs/iced-tea/jollo.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('Raspberry & vanilla');?></h3>
                    <p class="txt"><?= t('ICED_TEA');?></p>
                </div>
                <div class="card" data-popup="popup3">
                    <img src="<?= $root ?>assets/imgs/products-imgs/iced-tea/pitna.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('Mint');?></h3>
                    <p class="txt"><?= t('ICED_TEA');?></p>
                </div>
                <div class="card" data-popup="popup4">
                    <img src="<?= $root ?>assets/imgs/products-imgs/iced-tea/feixo.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('Feijoa');?></h3>
                    <p class="txt"><?= t('ICED_TEA');?></p>
                </div>
                <div class="card" data-popup="popup4">
                    <img src="<?= $root ?>assets/imgs/products-imgs/iced-tea/cherry.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('CHERRY');?></h3>
                    <p class="txt"><?= t('ICED_TEA');?></p>
                </div>
            </div>


          


    


            <!-- Popups -->
            <div id="popup1" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/iced-tea/atami.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('Peach');?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt">
                            <?php echo t('icedPopup1');?>
                        </p>
                        <p class="heading popup-gr"><?= t('Vol. 0.5 l'); ?></p>
                    </div>
                </div>
            </div>

            <div id="popup2" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/iced-tea/jollo.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('Raspberry & vanilla');?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt">
                            <?php echo t('icedPopup2');?>
                        </p>
                        <p class="heading popup-gr"><?= t('Vol. 0.5 l'); ?></p>
                    </div>
                </div>
            </div>

            <div id="popup3" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/iced-tea/pitna.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('Mint');?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt">
                            <?php echo t('icedPopup3');?>
                        </p>
                        <p class="heading popup-gr"><?= t('Vol. 0.5 l'); ?></p>
                    </div>
                </div>
            </div>

            <div id="popup4" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/iced-tea/feixo.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('Feijoa');?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt">
                            <?php echo t('icedPopup4');?>
                        </p>
                        <p class="heading popup-gr"><?= t('Vol. 0.5 l'); ?></p>
                    </div>
                </div>
            </div>

            <div id="popup5" class="popup">
                <div class="popup-content">
                    <span class="close"> <img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/iced-tea/cherry.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('CHERRY');?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt">
                            <?php echo t('icedPopup5');?>
                        </p>
                        <p class="heading popup-gr"><?= t('Vol. 0.5 l'); ?></p>
                    </div>
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