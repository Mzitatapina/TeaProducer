<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'HISTORY OF GURIELI'; 
    include $root . 'includes/inside-header.php';
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>
<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/about.css">
</head>

<section class="history-section about <?= $font_class ?>">
    <div class="about-head-img"><img src="<?php echo $root?>assets/imgs/about/gurieli-about-1.png" alt="gurieli history"></div>
    <h1 class="heading history-heading fade-in"><?= t('history'); ?></h1>
    <div class="history-txt fade-in">
        <p class="txt">
            <?= t('history1'); ?>
        </p>
        <p class="txt">
            <?= t('history2'); ?>
        </p>
    </div>
    
    <div class="about-first-bg" style="background-image: url(<?php echo $root?>assets/imgs/about/gurieli-about-2.png);">
        <div>
            <p class="txt mb-60">
            <?= t('history3'); ?>
            </p>
        </div>
    </div>

    <div class="history-txt mt-60 fade-in" style="margin-top: 60px;">
        <p class="txt">
        <?= t('history4'); ?>
        </p>
        <p class="txt">
        <?= t('history5'); ?>
        </p>
    </div>
</section>






    <div style="width: 100%; background-repeat: no-repeat; background-image: url(<?php echo $root?>assets/imgs/about/gurieli-about-3.png); background-size: cover; height: 100vh;" class="about-sec-bg"></div>







<?php
    $root = dirname(__DIR__) . '/'; 
    include $root . 'includes/footer.php';
?>
