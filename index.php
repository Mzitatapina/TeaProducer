<!--  t('HISTORY_DESCRIPTION')  translation kay  -->

<?php
    $pageTitle = 'GURIELI';
    include 'includes/header.php';
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/home.css">
</head>
<body class="home <?= $font_class ?>">





        <div class="video-container" id="videoContainer">
            <video autoplay muted loop id="bgVideo">
                <source src="https://mzitatapina.github.io/tester3/12.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="content" style="display: flex; flex-direction: column; gap: 20px;">
                <img src="<?php echo $root;?>assets/imgs/white-logo-gurieli.svg" alt="Gurieli logo">
                <button id="hideButton">START JOURNEY</button>
            </div>
        </div>



    <div class="slider-container" id="slider1">
        <div class="left-bar">
            <div class="bullets">
                <div class="bullet active"></div>
                <div class="bullet"></div>
                <div class="bullet"></div>
                <div class="bullet"></div>
            </div>
            <div class="lang-switch">
                <a href="?lang=eng" class="<?= $lang == 'eng' ? 'active' : '' ?>">ENG</a>
                <a href="?lang=geo" class="<?= $lang == 'geo' ? 'active' : '' ?>">GEO</a>
            </div>
        </div>

     

        <div class="content-slider" style="background-image: url(<?= $root ?>assets/imgs/agriculture.jpg)">
            <div class="content active">
                <h4 class="small-desc"> <?=t('GEORGIAN_TRADITION')?>  </h4>
                
                <h1 class="heading"><?=t('TEA_MAKING_CULTURE')?>   </h1>
                <p class="description"><?=t('FROM_THE_BEGINNING')?></p>
                <button class="btn-light"><a href="<?= $root ?>pages/gurieli-history.php"> <?=t('READ_MORE')?> </a></button>
            </div>
        </div>

        <div class="right-bar">
            <div class="social-icons">
                <a href="https://www.facebook.com/gurieliclassic/" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/gurieli/" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/instagram.png" alt="Instagram"></a>
                <a href="https://www.linkedin.com/company/gurieli-tea/" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/linkedin.png" alt="LinkedIn"></a>
                <a href="https://www.youtube.com/channel/UC3Gypm3Bkl_Hc9NzkHfMfyA/videos" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/youtube.png" alt="YouTube"></a>
            </div>
        </div>
        <img class="born-in-georgia" src="<?= $root ?>assets/imgs/born-in-georgia.png" alt="born in georgia tea"></a>
    </div>


    <!-- home about content  -->
    <section class="home-about fade-in">
        <div class="home-about-img"><img src="<?= $root ?>assets/imgs/home-about.png"> </div>
        <div class="about-content fade-in"> 
            <h2 class="heading">
                <?= t('guriely-hystory')  ?>
            </h2>
            <p class="txt">
                <?= t('home-about')  ?>
            </p>
            <button class="btn-dark">
                <a href="<?= $root ?>pages/gurieli-history.php"> <?= t('READ_MORE')  ?></a>
            </button>
        </div>
    </section>
    

    <!-- home product slider  -->
    <div class="home-product-slider fade-in">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product1.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading"> <?= t('TRADITIONAL BLACK'); ?></h3>
                    <p class="txt"><?= t('Available in different');?><br> <?= t('gurieli-edition'); ?></p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product2.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading">  <?= t('TRADITIONAL GREEN'); ?></h3>
                    <p class="txt"><?= t('Available in different');?><br>  <?= t('gurieli-edition'); ?></p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product3.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading"> <?= t('EARL GREY'); ?></h3>
                    <p class="txt"><?= t('Available in different');?><br> <?= t('gurieli-edition'); ?></p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product4.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading"> <?= t('ALPINE BERRY'); ?></h3>
                    <p class="txt"><?= t('Available in different');?> <br> <?= t('gurieli-edition'); ?></p>
                </div>
                
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product5.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading"> <?= t('TRADITIONAL BLACK'); ?></h3>
                    <p class="txt"><?= t('Available in different');?> <br> <?= t('gurieli-edition'); ?></p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product6.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading"> <?= t('TRADITIONAL GREEN'); ?></h3>
                    <p class="txt"><?= t('Available in different');?>  <br> <?= t('gurieli-edition'); ?></p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product7.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading"> <?= t('EARL GREY'); ?></h3>
                    <p class="txt"><?= t('Available in different');?>  <br> <?= t('gurieli-edition'); ?></p>
                </div>
                <div class="swiper-slide">
                    <img src="<?= $root ?>assets/imgs/products-imgs/home-products/product8.png" alt="GURIELI TEA" class="slide-img">
                    <h3 class="heading"> <?= t('ALPINE BERRY'); ?></h3>
                    <p class="txt"><?= t('Available in different');?>  <br> <?= t('gurieli-edition'); ?></p>
                </div>
            </div>
            <!-- Arrows -->
            <div class="swiper-button-next">
                <img src="<?= $root ?>assets/imgs/icons/prew-swipper.png" alt="Next">
            </div>
            <div class="swiper-button-prev">
                <img src="<?= $root ?>assets/imgs/icons/prew-swipper.png" alt="Previous">
            </div>
        </div>
    </div>
   

    <!-- RESOURCES -->
    <section class="home-resources">
        <div class="about-content fade-in"> 
            <h2 class="heading"><?= t('our-resources'); ?> </h2>
            <p class="txt">
                <?= t('our-resources-description');?>
            </p>
            <button class="btn-dark">
                <a href="<?= $root ?>pages/resources.php"><?= t('READ_MORE')  ?></a>
            </button>
        </div>
        <div class="home-about-img"><img src="<?= $root ?>assets/imgs/resources-bg.png"> </div>
    </section>

    <?php include 'includes/footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo $root;?>assets/scripts/sliders.js"></script>
    <script> 
  
  document.addEventListener('DOMContentLoaded', function() {
    if (!sessionStorage.getItem('videoShown')) {
        const videoContainer = document.getElementById('videoContainer');
        document.body.style.overflowY = 'hidden';

        document.getElementById('hideButton').addEventListener('click', function() {
            videoContainer.classList.add('fade-out');

            videoContainer.addEventListener('animationend', function() {
                videoContainer.style.display = 'none';
                document.body.style.overflowY = 'auto';
                
                sessionStorage.setItem('videoShown', 'true');
            });
        });


        document.body.addEventListener('click', function() {
            videoContainer.classList.add('fade-out');

            videoContainer.addEventListener('animationend', function() {
                videoContainer.style.display = 'none';
                document.body.style.overflowY = 'auto';
                
                sessionStorage.setItem('videoShown', 'true');
            });
        });



    } else {
        document.body.style.overflowY = 'auto';
        const videoContainer = document.getElementById('videoContainer');
        videoContainer.style.display = 'none'; 
    }
});




    </script>
</body>
</html>
