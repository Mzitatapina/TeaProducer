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
        <section class="produtc-page-bg" style="background-image: url(<?= $root ?>assets/imgs/products-imgs/products-1-bg.jpg);"></section>

        <section class="product-page mb-60 main-products ">
            <div class="product-page-heading">
                <h2 class="heading"><?= t('classic1')?></h2>
            </div>
            <div class="product-content-txt" id="classic-product">
                <p class="txt">
                    <?= t('classic2')?>
                </p>
            </div>

            <div class="product-page-heading subtitle mt-60">
                <h2 class="heading"><b><?= t('classic3')?></b></h2>
            </div>

            <!-- product cards  -->
            <div class="card-container products">
                <div class="card" data-popup="popup1">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL BLACK');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 80 gr'); ?></p>
                </div>
                <div class="card" data-popup="popup2">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL GREEN');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 80 gr'); ?></p>
                </div>
                <div class="card" data-popup="popup3">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('BLACK & BERGAMOT');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 80 gr'); ?></p>
                </div>
                <div class="card" data-popup="popup4">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('GEORGIAN BERRY');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 80 gr'); ?></p>
                </div>
                <div class="card" data-popup="popup5">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('FOREST FRUIT');?></h3>
                    <p class="txt"><?= t('Loose leaf tea, Vol. 80 gr'); ?></p>
                </div>
            </div>





            <div class="product-content-txt">
                <p class="txt">
                    <?= t('classic4')?>
                </p>
            </div>
            <div class="product-page-heading subtitle mt-60">
                <h2 class="heading"><b><?= t('classic5')?></b></h2>
            </div>


            <div class="card-container products">
                <div class="card" data-popup="popup6">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black2.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL BLACK');?></h3>
                    <p class="txt"><?= t('Tea bags, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup7">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green2.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL GREEN');?></h3>
                    <p class="txt"><?= t('Tea bags, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup8">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot2.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('BLACK & BERGAMOT');?></h3>
                    <p class="txt"><?= t('Tea bags, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup9">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry2.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('GEORGIAN BERRY');?></h3>
                    <p class="txt"><?= t('Tea bags, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup10">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit2.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('FOREST FRUIT');?></h3>
                    <p class="txt"><?= t('Tea bags, 25 pcs'); ?></p>
                </div>
            </div>

            

            <div class="product-content-txt">
                <p class="txt">
                <?= t('classic6')?>
                </p>
            </div>
            <div class="product-page-heading subtitle mt-60">
                <h2 class="heading"><b><?= t('classic7')?></b></h2>
            </div>

                <div class="card-container products">
                <div class="card" data-popup="popup11">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black3.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL BLACK');?></h3>
                    <p class="txt"><?= t('Pyramid bags, 20 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup12">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green3.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL GREEN');?></h3>
                    <p class="txt"><?= t('Pyramid bags, 20 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup13">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot3.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('BLACK & BERGAMOT');?></h3>
                    <p class="txt"><?= t('Pyramid bags, 20 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup14">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry3.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('GEORGIAN BERRY');?></h3>
                    <p class="txt"><?= t('Pyramid bags, 20 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup15">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit3.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('FOREST FRUIT');?></h3>
                    <p class="txt"><?= t('Pyramid bags, 20 pcs'); ?></p>
                </div>
            </div>

            <div class="product-page-heading subtitle mt-60">
                <h2 class="heading"><b><?= t('classic8')?></b></h2>
            </div>



            <div class="card-container products">
                <div class="card" data-popup="popup16">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black4.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL BLACK');?></h3>
                    <p class="txt"><?= t('Bags in sachets, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup17">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green4.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('TRADITIONAL GREEN');?></h3>
                    <p class="txt"><?= t('Bags in sachets, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup18">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot4.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('BLACK & BERGAMOT');?></h3>
                    <p class="txt"><?= t('Bags in sachets, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup19">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry4.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('GEORGIAN BERRY');?></h3>
                    <p class="txt"><?= t('Bags in sachets, 25 pcs'); ?></p>
                </div>
                <div class="card" data-popup="popup20">
                    <img src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit4.png" alt="Gurieli tea">
                    <h3 class="heading product-title"><?= t('FOREST FRUIT');?></h3>
                    <p class="txt"><?= t('Bags in sachets, 25 pcs'); ?></p>
                </div>
            </div>




            <!-- Popups -->
            <div id="popup1" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL BLACK')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup1');?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, vol. 80 gr.')?></p>
                    </div>
                </div>
            </div>

            <div id="popup2" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL GREEN')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup2');?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, vol. 80 gr.')?></p>
                    </div>
                </div>
            </div>

            <div id="popup3" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('BLACK & BERGAMOT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup3');?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, vol. 80 gr.')?></p>
                    </div>
                </div>
            </div>

            <div id="popup4" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('GEORGIAN BERRY')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup4');?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, vol. 80 gr.')?></p>
                    </div>
                </div>
            </div>

            <div id="popup5" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('FOREST FRUIT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup5');?></p>
                        <p class="heading popup-gr"><?= t('Loose leaf tea, vol. 80 gr.')?></p>
                    </div>
                </div>
            </div>

            <div id="popup6" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black2.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL BLACK')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup6');?></p>
                        <p class="heading popup-gr"><?= t('Tea bags, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup7" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green2.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL GREEN')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup7');?></p>
                        <p class="heading popup-gr"><?= t('Tea bags, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup8" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot2.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('BLACK & BERGAMOT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup8');?></p>
                        <p class="heading popup-gr"><?= t('Tea bags, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup9" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry2.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('GEORGIAN BERRY')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup9');?></p>
                        <p class="heading popup-gr"><?= t('Tea bags, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup10" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit2.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('FOREST FRUIT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup10');?></p>
                        <p class="heading popup-gr"><?= t('Tea bags, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup11" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black3.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL BLACK')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup11');?></p>
                        <p class="heading popup-gr"><?= t('Pyramid bags, 20 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup12" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green3.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL GREEN')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup12');?></p>
                        <p class="heading popup-gr"><?= t('Pyramid bags, 20 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup13" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot3.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('BLACK & BERGAMOT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup13');?></p>
                        <p class="heading popup-gr"><?= t('Pyramid bags, 20 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup14" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry3.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('GEORGIAN BERRY')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup14');?></p>
                        <p class="heading popup-gr"><?= t('Pyramid bags, 20 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup15" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit3.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('FOREST FRUIT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup15');?></p>
                        <p class="heading popup-gr"><?= t('Pyramid bags, 20 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup16" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-black4.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL BLACK')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup16');?></p>
                        <p class="heading popup-gr"><?= t('Bags in sachets, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup17" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/traditional-green4.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('TRADITIONAL GREEN')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup18');?></p>
                        <p class="heading popup-gr"><?= t('Bags in sachets, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup18" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/black&bergamot4.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('BLACK & BERGAMOT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup18');?></p>
                        <p class="heading popup-gr"><?= t('Bags in sachets, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup19" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/georgian-berry4.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('GEORGIAN BERRY')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup19');?></p>
                        <p class="heading popup-gr"><?= t('Bags in sachets, 25 pcs')?></p>
                    </div>
                </div>
            </div>

            <div id="popup20" class="popup">
                <div class="popup-content">
                    <span class="close"><img src="<?= $root ?>assets/imgs/icons/close-popup.png" alt="Gurieli tea"></span>
                    <img class="popup-img" src="<?= $root ?>assets/imgs/products-imgs/classic/forest-fruit4.png" alt="Gurieli tea">
                    <div class="popup-text">
                        <h3 class="heading product-popup-title"><?= t('FOREST FRUIT')?></h3>
                        <h4 class="heading popup-page-title"><?= t('Gurieli');?></h4>
                        <p class="txt"><?= t('classicpopup20');?></p>
                        <p class="heading popup-gr"><?= t('Bags in sachets, 25 pcs')?></p>
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