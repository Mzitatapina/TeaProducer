<?php
    $root = dirname(__DIR__) . '/'; 
    $current_page = basename($_SERVER['PHP_SELF']); 
    $pageTitle = 'NEWS - GURIELI'; 
    include $root . 'includes/inside-header.php';
?>
<head>
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/news.css">
    <link rel="stylesheet" href="<?php echo $root?>assets/styles/about.css">
</head>

<section class="news-section"> 
    <h2 class="news heading">NEWS</h2>
    <div class="news-cards">
        <div class="news-card">
            <div class="news-card-img"><div class="news-card-img"><img src="<?php echo $root?>assets/imgs/news/news.png" alt="news 1"></div></div>
            <div class="news-txts">
                <span class="news-date">Mar, 16, 2023</span> 
                <h3 class="news-title">Boost your conversion rate</h3>
                <p class="news-txt txt">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium
                    praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                </p>
                <a href="#" class="news-read-more">READ MORE</a>
            </div>
        </div>

        <div class="news-card">
            <div class="news-card-img"><img src="<?php echo $root?>assets/imgs/news/news.png" alt="news 1"></div>
            <div class="news-txts">
                <span class="news-date">Mar, 16, 2023</span> 
                <h3 class="news-title">Boost your conversion rate</h3>
                <p class="news-txt txt">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium
                    praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                </p>
                <a href="#" class="news-read-more">READ MORE</a>
            </div>
        </div>

        <div class="news-card">
            <div class="news-card-img"><img src="<?php echo $root?>assets/imgs/news/news.png" alt="news 1"></div>
            <div class="news-txts">
                <span class="news-date">Mar, 16, 2023</span> 
                <h3 class="news-title">Boost your conversion rate</h3>
                <p class="news-txt txt">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium
                    praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                </p>
                <a href="#" class="news-read-more">READ MORE</a>
            </div>
        </div>
        <div class="news-card">
            <div class="news-card-img"><img src="<?php echo $root?>assets/imgs/news/news.png" alt="news 1"></div>
            <div class="news-txts">
                <span class="news-date">Mar, 16, 2023</span> 
                <h3 class="news-title">Boost your conversion rate</h3>
                <p class="news-txt txt">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium
                    praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                </p>
                <a href="#" class="news-read-more">READ MORE</a>
            </div>
        </div>
        <div class="news-card">
            <div class="news-card-img"><img src="<?php echo $root?>assets/imgs/news/news.png" alt="news 1"></div>
            <div class="news-txts">
                <span class="news-date">Mar, 16, 2023</span> 
                <h3 class="news-title">Boost your conversion rate</h3>
                <p class="news-txt txt">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium
                    praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                </p>
                <a href="#" class="news-read-more">READ MORE</a>
            </div>
        </div>

        <div class="news-card">
            <div class="news-card-img"><img src="<?php echo $root?>assets/imgs/news/news.png" alt="news 1"></div>
            <div class="news-txts">
                <span class="news-date">Mar, 16, 2023</span> 
                <h3 class="news-title">Boost your conversion rate</h3>
                <p class="news-txt txt">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium
                    praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.
                </p>
                <a href="#" class="news-read-more">READ MORE</a>
            </div>
        </div>

    </div>
</section>

<script src="<?php echo $root;?>assets/scripts/animate.js"></script>
<?php
    $root = dirname(__DIR__) . '/'; 
    include $root . 'includes/footer.php';
?>
