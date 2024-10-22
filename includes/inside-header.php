<?php
    session_start();
    
    $root = '/Gurieli/';
    
    // Get current page filename
    $current_page = basename($_SERVER['PHP_SELF']);
    
    // Determine active pages
    $is_products_active = in_array($current_page, ['products.php', 'hot-brew-tea.php', 'prince-gurieli.php', 'special-editions.php', 'classic.php', 'iced-tea.php']);
    $is_hot_brew_tea_active = in_array($current_page, ['hot-brew-tea.php', 'prince-gurieli.php', 'special-editions.php', 'classic.php']);
    $is_gurieli_history_active = in_array($current_page, ['gurieli-history.php', 'resources.php']);
    
    // Language selection
    if (isset($_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang'];
    }

    // Default language
    if (!isset($_SESSION['lang'])) {
        $_SESSION['lang'] = 'eng'; // default to Georgian
    }

    $lang = $_SESSION['lang'];

    // Include language file
    include_once($_SERVER['DOCUMENT_ROOT'] . $root . 'lang/' . $lang . '.php');

    // Translation function
    function t($key) {
        global $lang_array;
        return isset($lang_array[$key]) ? $lang_array[$key] : $key;
    }

    // Determine class for the language
    $font_class = ($lang == 'geo') ? 'georgian-font' : 'default-font';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="<?php echo $root?>assets/imgs/agriculture.jpg">
    <meta property="og:title" content="Gurieli - Tea">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?= $root ?>/assets/styles/header.css">
    <link rel="stylesheet" href="<?= $root ?>/assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/footer.css">
</head>
<body>
<header class="navbar inside-nav <?= $font_class ?>" style="padding-left: 0 !important;">
    <div class="header-left">
        <div class="lang-switch header-lang-desktop">
            <a href="?lang=eng" class="<?= $lang == 'eng' ? 'active' : '' ?>">ENG</a>
            <a href="?lang=geo" class="<?= $lang == 'geo' ? 'active' : '' ?>">GEO</a>
        </div>    
        <div class="logo" style="display: flex; align-items: center;">
             <a href="<?= $root ?>"><img src="<?= $root ?>assets/imgs/gurieli-dark-logo.svg" alt="Logo"></a>
        </div>
    </div>
  
    <div class="menu-toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span> 
        <span class="bar"></span>
    </div> 

    <div class="lang-switch header-lang">
        <a href="?lang=eng" class="<?= $lang == 'eng' ? 'active' : '' ?>">ENG</a>
        <a href="?lang=geo" class="<?= $lang == 'geo' ? 'active' : '' ?>">GEO</a>
    </div>
    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-item <?= $current_page == 'index.php' ? 'active' : '' ?>">
                <a href="<?= $root ?>"><?=t('HOME')?></a>
            </li>

            <li class="nav-item <?= $is_gurieli_history_active || $current_page == 'about.php' ? 'active' : '' ?>">
                <a href="#"><?php echo t('OUR_HISTORY')?></a>
                <ul class="dropdown">
                    <li class="dropdown-item <?= $current_page == 'gurieli-history.php' ? 'active' : '' ?>">
                        <a href="<?= $root ?>pages/gurieli-history.php"> <?php echo t('HystoryMenu')?> </a>
                    </li>
                    <li class="dropdown-item <?= $current_page == 'resources.php' ? 'active' : '' ?>">
                        <a href="<?= $root ?>pages/resources.php"><?php echo t('Plantations-Rresources')?></a>
                    </li>
                </ul>
            </li>


            <li class="nav-item <?= $is_products_active ? 'active' : '' ?>">
                <a href="#"><?php echo t('PRODUCTS')?></a>
                <ul class="dropdown">
                    <li class="dropdown-item <?= $is_hot_brew_tea_active ? 'active' : '' ?>">
                        <a href="#"><?php echo t('HOT_BREW_TEA')?></a>
                        <ul class="child-list">
                            <li>
                                <a href="<?= $root ?>pages/classic.php" class="<?= $current_page == 'classic.php' ? 'active' : '' ?>"><?php echo t('GURIELI_CLASSIC')?></a>
                            </li>
                            <li>
                                <a href="<?= $root ?>pages/prince-gurieli.php" class="<?= $current_page == 'prince-gurieli.php' ? 'active' : '' ?>"><?php echo t('PREMIUM_PRINCE_GURIELI')?></a>
                            </li>
                            <li>
                                <a href="<?= $root ?>pages/special-editions.php" class="<?= $current_page == 'special-editions.php' ? 'active' : '' ?>"><?php echo t('SPECIAL_EDITIONS')?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown-item <?= $current_page == 'iced-tea.php' ? 'active' : '' ?>">
                        <a href="<?= $root ?>pages/iced-tea.php"><?php echo t('ICED_TEA')?></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="<?= $root ?>pages/news.php" class="<?= $current_page == 'news.php' ? 'active' : '' ?>"><?php echo t('NEWS')?></a>
            </li>

            <li class="nav-item <?= $current_page == 'export.php' ? 'active' : '' ?>">
                <a href="<?= $root ?>pages/export.php"><?php echo t('EXPORT')?></a>
            </li>
            <li class="nav-item <?= $current_page == 'contact.php' ? 'active' : '' ?>">
                <a href="<?= $root ?>pages/contact.php"><?php echo t('CONTACT')?></a>
            </li>
        </ul>
    </nav>
</header>

<script src="<?= $root ?>/assets/scripts/header.js"></script>
