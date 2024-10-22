<?php
session_start();

$root = '/Gurieli/';
$current_page = basename($_SERVER['PHP_SELF']);

// Language Selection
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'eng'; 
}

$lang = $_SESSION['lang'];

// Include the language file
include_once($_SERVER['DOCUMENT_ROOT'] . $root . 'lang/' . $lang . '.php');

// Translation function
function t($key) {
    global $lang_array;
    return isset($lang_array[$key]) ? $lang_array[$key] : $key;
}

// Determine the class for the language
$font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>
        
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?= $root ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= $root ?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/footer.css">
    <meta property="og:image" content="<?php echo $root?>assets/imgs/agriculture.jpg">
    <meta property="og:title" content="Gurieli - Tea">
</head>
<body>
<header class="navbar <?= $font_class ?>">
    <div class="logo"><a href="<?= $root ?>"><img src="<?= $root ?>assets/imgs/logo-light-gurieli.png" alt=""></a></div>
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span> 
    </div>

    <div class="lang-switch header-lang">
        <a href="?lang=eng" class="<?= $lang == 'eng' ? 'active' : '' ?>">ENG</a>
        <a href="?lang=geo" class="<?= $lang == 'geo' ? 'active' : '' ?>">GEO</a>
    </div>

    <nav class="nav ">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="<?= $root ?>" class="<?= $current_page == 'index.php' ? 'active' : '' ?>"><?=t('HOME')?></a>
            </li>
            <li class="nav-item">
                <a href="#" class="<?= $current_page == 'about.php' ? 'active' : '' ?>"> <?php echo t('OUR_HISTORY')?></a>
               
                <ul class="dropdown">
                    <li class="dropdown-item">
                        <a href="<?= $root ?>pages/gurieli-history.php" class="<?= $current_page == 'gurieli-history.php' ? 'active' : '' ?>"><?php echo t('HystoryMenu')?></a>
                    </li>
                    <li class="dropdown-item">
                        <a href="<?= $root ?>pages/resources.php" class="<?= $current_page == 'resources.php' ? 'active' : '' ?>"><?php echo t('Plantations-Rresources')?></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="<?= $current_page == 'products.php' ? 'active' : '' ?>"><?php echo t('PRODUCTS')?></a>
                <ul class="dropdown">
                    <li class="dropdown-item">
                        <a href="#"><?php echo t('HOT_BREW_TEA')?></a>
                        <ul class="child-list">
                            <li><a href="<?= $root ?>pages/classic.php" class="<?= $current_page == 'classic.php' ? 'active' : '' ?>"><?php echo t('GURIELI_CLASSIC')?></a></li>
                            <li><a href="<?= $root ?>pages/prince-gurieli.php" class="<?= $current_page == 'prince-gurieli.php' ? 'active' : '' ?>"><?php echo t('PREMIUM_PRINCE_GURIELI')?></a></li>
                            <li><a href="<?= $root ?>pages/special-editions.php" class="<?= $current_page == 'special-editions.php' ? 'active' : '' ?>"><?php echo t('SPECIAL_EDITIONS')?></a></li>
                        </ul>
                    </li>
                    <li class="dropdown-item">
                        <a href="<?= $root ?>pages/iced-tea.php" class="<?= $current_page == 'iced-tea.php' ? 'active' : '' ?>"><?php echo t('ICED_TEA')?></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= $root ?>pages/news.php" class="<?= $current_page == 'news.php' ? 'active' : '' ?>"><?php echo t('NEWS')?></a>
            </li>
            <li class="nav-item">
                <a href="<?= $root ?>pages/export.php" class="<?= $current_page == 'export.php' ? 'active' : '' ?>"><?php echo t('EXPORT')?></a>
            </li>
            <li class="nav-item">
                <a href="<?= $root ?>pages/contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>"><?php echo t('CONTACT')?></a>
            </li>
        </ul>
    </nav>
</header>

<script src="<?= $root ?>/assets/scripts/header.js"> </script>

