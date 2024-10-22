<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'PLANTATIONS - GURIELI'; 
    include $root . 'includes/inside-header.php';
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>
<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/about.css">
</head>
<div  class="<?= $font_class ?>"> 
<section class="history-section about">

<section class="about-statistics" style="padding: 0;">
    <div class="guria" style="background-image: url(<?php echo $root?>assets/imgs/about/gurieli-about-4.png);">
        <div class="guria-txts mb-60">
            <h4 clas="fade-in">West Georgia</h4>
            <h1>guria</h1>
        </div>
    </div>
    <div class="about-statistics-wrap fade-in">
        <p class="txt">
            <?= t('resources1'); ?>
         <br> <br>
            <?= t('resources2'); ?>
        </p>
  

        <div class="about-statistic-bg mt-60 fade-in" style="background-image: url(<?php echo $root?>assets/imgs/about/gurieli-about-5.png);">
            <h2>   <?= t('resources3'); ?></h2>
        </div>
        <div class="statistics-items mb-60 mt-60">
            <div class="statistic-item">
                <h4 class="number">120,000</h4>
                <p>   <?= t('resources4'); ?></p>
            </div>    
            <div class="statistic-item">
                <h4 class="number">650,000</h4>
                <p>   <?= t('resources5'); ?></p>
            </div>
            <div class="statistic-item">
                <h4 class="number">150,000</h4>
                <p>   <?= t('resources6'); ?></p>
            </div>
        </div>
    </div>
</section>


<secttion >
<div class="awards"  style="background-image: url(<?php echo $root?>assets/imgs/about/awards.png); ">
        <div class="awards-txts mt-60 fade-in">
            <h3 class="heading">   <?= t('resources7'); ?></h3>
            <p class="txt">   
                <?= t('resources8'); ?>
                <br> <br>
                <?= t('resources9'); ?>
             </p>
        </div>
        <div class="awards-txts private-labels mb-60" >
            <h3 class="heading">   <?= t('resources10'); ?></h3>
            <p class="txt">   <?= t('resources11'); ?>
                <br> <br>
                <?= t('resources12'); ?><br>  feedback@gurieli.com.ge
             </p>
        </div>
    </div>
</secttion>

</div>

<script src="<?php echo $root;?>assets/scripts/animate.js"></script>
<?php
    $root = dirname(__DIR__) . '/'; 
    include $root . 'includes/footer.php';
?>
