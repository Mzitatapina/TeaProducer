<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'SPECIAL EDDITIONS - GURIELI'; 
    include $root . 'includes/inside-header.php';
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>
<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/about.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap');
        @import url("//cdn.web-fonts.ge/fonts/bpg-ucnobi/css/bpg-ucnobi.min.css");

        .n-home-product-slider {
            height: 640px;
            width: 90%;
            max-width: 1400px;
            position: relative;
            display: flex;
            align-items: flex-end;
            margin: 0 auto;
        }

   

        .n-home-product-slider::before {
            left: 0;
            border-top-right-radius: 50px;
        }

        .n-home-product-slider::after {
            right: 0;
            border-top-left-radius: 50px;
        }

        .n-home-product-slider * {
            user-select: none;
            position: relative;
            z-index: 2;
        }

        .swippper-container {
            width: 100%;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .swiper-slide {
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: left;
            opacity: 1 !important;
            visibility: visible !important;
        }

        .swiper-slide img {
            width: 50%;
            height: auto;
        }

        .swiper-slide .n-content {
            width: 50%;
            height: 380px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding-bottom: 80px;
        }
        /* Alternating styles */
  
        .n-home-product-slider .heading {
            font-size: 26px;
            margin-bottom: 15px;
            color: white;
        }

        .swiper-button-next, .swiper-button-prev {
            color: transparent;
            position: absolute;
            top: 80%;
            transform: translateY(-50%);
            z-index: 3;
        }

        .swiper-button-next {
            right: -47px;
            transform: rotate(180deg);
        }


        .swiper-button-prev {
            left: -47px;
        }

        .swiper-button-next img,
        .swiper-button-prev img {
            width: 30px; 
            height: 30px;
        }

        .swiper-slide img {
            max-height: 500px;
            max-width: 250px;
        }
        .slider-headings * {
            margin: 0;
        }

        /* Styles for static text on the sides */
        .static-left, .static-right {
            position: absolute;
            bottom: -160px;
            transform: translateY(-50%);
            color: white;
            font-size: 16px;
            z-index: 3;
            width: 40%;
            text-align: justify;
        }
        .static-left {
            left: 0;
        }

        .static-right {
            right: 0;
            text-align: right;
        }

        .slider-headings p {
            font-family: "Pinyon Script", cursive;
            font-size: 36px;
            color: white;
            padding: 0;
        }
        .georgian-font .slider-headings p {
            font-family: "BPG Ucnobi", sans-serif !important;
            font-size: 26px !important;
        } 

        .georgian-font .slider-description p {
            font-weight: 400;
        }

        .sp-editions {
            height: 100vh; 
            width: 100%; 
            background-size: cover;
            background-repeat: no-repeat;
        }
        .sp-editions::after {
            content: '';
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.3);
            position: absolute;
            left: 0;
            top: 0;
        }
        .slider-description p{
            color: white;
            font-weight: 600;
            width: auto;
            margin-top: 5px;
            font-size: 16px;
            line-height: 28px;
        }
        .slider-description p span {
            font-weight: 400;
        }


        /* rustaveli section  */
        .rustaveli-imgs {
            display: flex;
            width: 100%;
            max-width: 1400px;
            justify-content: space-evenly;
            gap: 10px;
            margin: 0 auto;
            flex-wrap: wrap;
        }
        section.rustaveli img {
            width: 130px;
            height: auto;
        }

        
        @media (min-width: 1040px) and (max-width: 1500px) {
            .sp-editions {
                min-height: 900px;
                background-color: rgba(0, 0, 0, 0.5);
            }
            .sp-editions::after {
                min-height: 900px;
            }
            .static-left, .static-right {
                bottom: -220px;
                height: 130px;
            }
        }

    
    
        @media only screen and (min-width: 1270px) {
            .swiper-slide:nth-child(even) {
            flex-direction: row-reverse;
            text-align: right;
        }
        .n-home-product-slider::before, .n-home-product-slider::after {
            content: '';
            position: absolute;
            top: 80%;
            transform: translateY(-50%);
            width: 550px;
            height: 253px;
            background-color: rgba(0, 0, 0, 0.6);
            
        }

        }

        /* 1270 >  */
        @media only screen and (max-width: 1270px) {
        .n-home-product-slider::before {
            content: '';
            position: absolute;
            top: 80%;
            transform: translateY(-50%);
            width: 550px;
            height: 253px;
            background-color: rgba(0, 0, 0, 0.6);
            
        }
          .static-left, .static-right {
            display: none;
          }
        }
        @media only screen and (max-width: 1000px) {
            .n-home-product-slider::before,  .n-home-product-slider::after  {
                display: none;
            }
            .n-home-product-slider .heading {
                font-size: 16px;
            }
            .swiper-button-next, .swiper-button-prev {
                top: 105%;
            }
            .swiper-button-next {
                right: 50px;
            }
            .swiper-button-prev {
                left: 50px;
                top: calc(105% + 25px);
            }
        }
        @media only screen and (max-width: 500px) {
            .n-home-product-slider .n-content {
                height: auto;
                padding-bottom: 0;
            }
            .n-home-product-slider p {
                padding: 0;
            }
            .n-home-product-slider {
                height: 80%;
                width: 100%;
            }
            .n-home-product-slider .heading {
                margin-bottom: 0;
            }
        }

        
    </style>

    <section class="sp-editions fade-in  <?= $font_class ?>" style="background-image: url(<?php echo $root . 'assets/imgs/agriculture.jpg' ?> );">
        <div class="n-home-product-slider">
            <!-- Left static text -->
            <div class="static-left">
                <p><?= t('limitedTxt1');?></p>
            </div>

            <!-- Right static text -->
            <div class="static-right">
                <p><?= t('limitedTxt2');?></p>
            </div>

            <div class="swippper-container fade-in">
                <div class="swiper-wrapper">
                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/r.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('TRADITIONAL BLACK');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p><?= t('VOLUME - 100gr1');?></p> </li>
                                    <li><p><?= t('LimitedIngredients1');?></p> </li>
                                    <li><p> <?= t('FORMAT - Loose Leaf1');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/u.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('TRADITIONAL GREEN');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr2'); ?></p> </li>
                                    <li><p><?= t('LimitedIngredients2')?></p></li>
                                    <li><p><?= t('FORMAT - Loose Leaf2');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/s.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('EARL GREY');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr1');?></p> </li>
                                    <li><p><?= t('LimitedIngredients3');?></p> </li>
                                    <li><p> <?= t('FORMAT - Loose Leaf1');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            
                        <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/t.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('limitedDescr4');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr2'); ?></p> </li>
                                    <li><p><?= t('LimitedIngredients4')?></p></li>
                                    <li><p><?= t('FORMAT - Loose Leaf2');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/a.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('limitedDescr5');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr1');?></p> </li>
                                    <li><p><?= t('LimitedIngredients5');?></p> </li>
                                    <li><p> <?= t('FORMAT - Loose Leaf1');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/v.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('limitedDescr6');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr2'); ?></p> </li>
                                    <li><p><?= t('LimitedIngredients6')?></p></li>
                                    <li><p><?= t('FORMAT - Loose Leaf2');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/e.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('limitedDescr7');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr1');?></p> </li>
                                    <li><p><?= t('LimitedIngredients7');?></p> </li>
                                    <li><p> <?= t('FORMAT - Loose Leaf1');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/l.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('limitedDescr8');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr2'); ?></p> </li>
                                    <li><p><?= t('LimitedIngredients8')?></p></li>
                                    <li><p><?= t('FORMAT - Loose Leaf2');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/l.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('limitedDescr8');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr1');?></p> </li>
                                    <li><p><?= t('LimitedIngredients8');?></p> </li>
                                    <li><p> <?= t('FORMAT - Loose Leaf1');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide fade-in">
                        <img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/i.png" alt="GURIELI TEA">
                        <div class="n-content">
                            <div class="slider-headings">
                                <h3 class="heading"><?= t('limitedDescr9');?></h3>
                                <p class="txt"><?= t('rustaveli');?></p>
                            </div>
                            <div class="slider-description">
                                <ul>
                                    <li><p> <?= t('VOLUME - 100gr2'); ?></p> </li>
                                    <li><p><?= t('LimitedIngredients9')?></p></li>
                                    <li><p><?= t('FORMAT - Loose Leaf2');?></p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Navigation Arrows -->
            <div class="swiper-button-next">
                <img src="<?= $root ?>assets/imgs/icons/prew-swipper.png" alt="Next">
            </div>
            <div class="swiper-button-prev">
                <img src="<?= $root ?>assets/imgs/icons/prew-swipper.png" alt="Previous">
            </div>
        </div>
    </section>

    <section class="rustaveli mt-60 mb-60 fade-in">
        <div class="rustaveli-imgs">
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/r.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/u.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/s.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/t.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/a.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/v.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/e.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/l.png" alt=""></div>
            <div><img src="<?= $root ?>assets/imgs/products-imgs/sp-editions/i.png" alt=""></div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const swiper = new Swiper('.swippper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            slidesPerGroup: 1,
            loopedSlides: 1,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            grabCursor: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2000000, 
                disableOnInteraction: false,
            },
            speed: 800,
            breakpoints: {
                1270: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    slidesPerGroup: 2,
                    loopedSlides: 2,
                }
            }
        });
    </script>


<?php
    $root = dirname(__DIR__) . '/'; 
    include $root . 'includes/footer.php';
?>
