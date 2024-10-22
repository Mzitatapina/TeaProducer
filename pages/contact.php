<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'CONTACT - GURIELI'; 
    include $root . 'includes/inside-header.php';
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>

<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/contact.css">
</head>
    <div class="<?= $font_class ?>">
    <div class="slider-container fade-in">
        <div class="content-slider" style="background-image: url(<?= $root ?>assets/imgs/contact-bg.svg)">
            <div class="content contact">
                <h2 class="heading page-title"><?= t('CONTACT'); ?></h2>
                <div class="gurieli-contacts">
                    <div class="contact-items">
                        <div class="icon-boxs">
                        <h3 class="heading"><?= t('contact1'); ?></h3>
                            <div class="icon-box">
                                <img src="<?php echo $root?>assets/imgs/icons/map.png" alt="Gurieli">
                                <a href="https://www.google.com/maps?sca_esv=a705397e3bbcc753&rlz=1C1GCEA_enRO1062GE1129&output=search&q=56+%E1%83%92%E1%83%98%E1%83%9D%E1%83%A0%E1%83%92%E1%83%98+%E1%83%AD%E1%83%A7%E1%83%9D%E1%83%9C%E1%83%93%E1%83%98%E1%83%93%E1%83%94%E1%83%9A%E1%83%98%E1%83%A1+%E1%83%A5%E1%83%A3%E1%83%A9%E1%83%90,+%E1%83%97%E1%83%91%E1%83%98%E1%83%9A%E1%83%98%E1%83%A1%E1%83%98+0180&source=lnms&fbs=AEQNm0D1KhSBtjORE61V5COUFERKef6nhC0izrEMrNBPAzdcWys8DT9CbMB0ox6d-R_pVPB8rZMG4ZHyf5exHFxT8gkD-Z4ShnRGtzeI5chvKoSC6LnZNfi9io2KaDnqHhGwcPWva-vx2gjn2UGvO5kKtfVuuca1uuvhLldceSlw27tillbYZ7qjxG__ahGHmTaXWiphaykXAngqMEHJKYNOiSnMyhLaCkkaXXeaNKA-mzwP4njzPyam4VwQ_HLoZjSjIaiMjYfX&entry=mc&ved=1t:200715&ictx=111" target="_blank" class="heading" class="heading"><?= t('contact2'); ?></a>
                            </div>
                            <div class="icon-box">  
                                <img src="<?php echo $root?>assets/imgs/icons/phone.png" alt="Phone">
                                <a href="tel:032 2 22 63 20" target="_blank" class="heading">032 2 22 63 20</a>
                            </div>
                            <div class="icon-box">
                                <img src="<?php echo $root?>assets/imgs/icons/mail.png" alt="Mail">
                                <a href="mailto:feedback@gurieli.com.ge" target="_blank" class="heading" class="heading">feedback@gurieli.com.ge</a>
                            </div>
                            <h3 class="heading factory"><?= t('contact3'); ?></h3>
                            <div class="icon-box">
                                <img src="<?php echo $root?>assets/imgs/icons/map.png" alt="Gurieli">
                                <a href="https://www.google.com/maps?sca_esv=a705397e3bbcc753&rlz=1C1GCEA_enRO1062GE1129&output=search&q=%E1%83%A1%E1%83%90%E1%83%A5%E1%83%90%E1%83%A0%E1%83%97%E1%83%95%E1%83%94%E1%83%9A%E1%83%9D,+%E1%83%9D%E1%83%96%E1%83%A3%E1%83%A0%E1%83%92%E1%83%94%E1%83%97%E1%83%98,+%E1%83%99%E1%83%9D%E1%83%A1%E1%83%A2%E1%83%90%E1%83%95%E1%83%90%E1%83%A1+%E1%83%A5%E1%83%A3%E1%83%A9%E1%83%90+92,+3500&source=lnms&fbs=AEQNm0D1KhSBtjORE61V5COUFERKef6nhC0izrEMrNBPAzdcWys8DT9CbMB0ox6d-R_pVPB8rZMG4ZHyf5exHFxT8gkD-Z4ShnRGtzeI5chvKoSC6LnZNfi9io2KaDnqHhGwcPWva-vx2gjn2UGvO5kKtfVuuca1uuvhLldceSlw27tillbYZ7qjxG__ahGHmTaXWiphaykXAngqMEHJKYNOiSnMyhLaCkkaXXeaNKA-mzwP4njzPyam4VwQ_HLoZjSjIaiMjYfX&entry=mc&ved=1t:200715&ictx=111" target="_blank" class="heading"><?= t('contact4'); ?></a>
                            </div>    
                        </div>
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2976.931634086916!2d44.786673476077766!3d41.74356747125686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4044729743f1d88b%3A0xb296414686d25b!2zNTYg4YOS4YOY4YOd4YOg4YOS4YOYIOGDreGDp-GDneGDnOGDk-GDmOGDk-GDlOGDmuGDmOGDoSDhg6Xhg6Phg6nhg5AsIOGDl-GDkeGDmOGDmuGDmOGDoeGDmCAwMTgw!5e0!3m2!1ska!2sge!4v1729381838701!5m2!1ska!2sge" width="100%" height="100%" style="border:0;" allowfullscreen=""  referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="right-bar">
            <div class="social-icons">
                <a href="https://www.facebook.com/gurieliclassic/" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/gurieli/" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/instagram.png" alt="Instagram"></a>
                <a href="https://www.linkedin.com/company/gurieli-tea" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/linkedin.png" alt="LinkedIn"></a>
                <a href="https://www.youtube.com/channel/UC3Gypm3Bkl_Hc9NzkHfMfyA/videos" target="_blank" class="icon"><img src="<?= $root ?>assets/imgs/icons/youtube.png" alt="YouTube"></a>
            </div>
        </div>
    </div>

</div>
    <script src="<?php echo $root;?>assets/scripts/sliders.js"></script>

    <?php
        $root = dirname(__DIR__) . '/'; 
        include $root . 'includes/footer.php';
    ?>
