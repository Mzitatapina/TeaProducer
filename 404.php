<?php
    $pageTitle = '404 - GURIELI';
    include 'includes/inside-header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/slider.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/styles.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/styles/home.css">
</head>
<body>
    <h1 style="text-align: center; padding-top: 30vh; padding-bottom: 30px; ">404 - Page Not Found</h1>
    <button class="btn-dark" style="margin: 0 auto; display: block; padding-bottom: 30vh;">
                <a href="#" style="text-align: center;">Go to the main page</a>
    </button>
    
    <?php include 'includes/footer.php';?> 
    <script src="<?php echo $root;?>assets/scripts/header.js"></script>
</body>
</html>

