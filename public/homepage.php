<!DOCTYPE html>
<html lang="ua">

<?php include('template-parts/head.php') ?>


<body>
<canvas class="grad"></canvas>
<!--<div class="flying-light">
    <span></span>
</div>-->
<div class="main-wrapper">
    <?php include('template-parts/generic/header.php') ?>

    <main>
        <?php include('template-parts/sections/hero-section.php') ?>
        <?php

        $cards = array(
            (object)[
                'lottie_name' => 'chest',
                'lottie_alternate' => true,
                'title' => 'Get into NFT’s Easy',
                'content' => 'No more endless videos, blogs and scrolling through information on loaded and complicated websites',
            ],
            (object)[
                'lottie_name' => 'rocket',
                'lottie_alternate' => false,
                'title' => 'Step by Step Guide',
                'content' => 'Our training is designed to guide you safely through every step to be prepared for getting your first NFT',
            ],
            (object)[
                'lottie_name' => 'flag',
                'lottie_alternate' => false,
                'title' => 'NFT as Reward',
                'content' => 'You will receive a beautiful and free NFT as a reward to always have a great memory of your first minting experience',
            ]
        );
        include('template-parts/sections/what-is-section.php')
        ?>
        <?php include('template-parts/sections/why-get-section.php') ?>
        <?php include('template-parts/sections/simple-cta-section.php') ?>
        <?php include('template-parts/sections/our-training-section.php') ?>
        <?php include('template-parts/sections/how-to-start-section.php') ?>
        <?php include('template-parts/sections/benefits-section.php') ?>
        <?php include('template-parts/sections/safe-start-section.php') ?>
        <?php include('template-parts/sections/faq-section.php') ?>
        <?php include('template-parts/sections/decorated-cta-section.php') ?>
    </main>

    <?php include('template-parts/generic/footer.php') ?>

</div>


<?php include('template-parts/svg-container.php') ?>


<script defer src="js/app.js" type="text/javascript"></script>

</body>

</html>