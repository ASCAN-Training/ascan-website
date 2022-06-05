<section>
    <div class="container-main">
        <div class="safe-start__heading">
            <h2 class="section-title title-animation">Safe start into your NFT journey</h2>
            <p class="section-subtitle section-subtitle--center">The free NFT you will earn after completing the course
                comes with plenty of utility
                which will help you navigate and ensure a safe start into your NFT journey.</p>
        </div>
        <div class="safe-start__listing ordered-list">
            <?php
            $title = 'ASCAN Academy';
            $content = "Free access to the ASCAN Academy";
            $btn_title = 'About Academy';
            $btn_url = 'https://google.com/';
            include(__DIR__ . '/../cards/numbered-card.php');
            ?>
            <?php
            $title = 'Discord Community ';
            $content = "Free access to our Discord Community Server";
            $btn_title = 'Our Discord';
            $btn_url = 'https://google.com/';
            include(__DIR__ . '/../cards/numbered-card.php');
            ?>
            <?php
            $title = 'Eligible for free Airdrops';
            $content = "Chance for more free NFTs with more access";
            unset($btn_title);
            unset($btn_url);
            include(__DIR__ . '/../cards/numbered-card.php');
            ?>
        </div>
    </div>
</section>