<?php
    $root = '/Gurieli/'; 
    $current_page = basename($_SERVER['PHP_SELF']);
    include_once($_SERVER['DOCUMENT_ROOT'] . $root . 'lang/' . $lang . '.php');
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>


<footer class="footer fade-in <?= $font_class ?>" style="background-image: url('<?php echo $root; ?>assets/imgs/footer-bg.png');">
    <p class="footer-descr"> <?= t('footer1');?></p>
    <button class="btn-light"><a href="<?php echo $root?>/pages/contact.php"><?= t('footer2');?></a></button>
    <div class="footer-statistics">
        <div class="statistic-wrap">
            <div class="statistic-item">
                <h4>2010</h4>
                <p><?= t('footer3');?></p>
            </div>
            <div class="statistic-item">
                <h4>650, 000</h4>
                <p><?= t('footer4');?></p>
            </div>  
        </div>
        <div class="statistic-wrap">
            <div class="statistic-item">
                <h4>150, 000</h4>
                <p><?= t('footer5');?></p> 
            </div>
            <div class="statistic-item">
                <h4>120, 000</h4> 
                <p><?= t('footer6');?></p>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo $root;?>assets/scripts/animate.js"></script>
</body>
</html>