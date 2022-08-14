<!DOCTYPE html>
<html lang="ua">

<?php include('template-parts/head.php') ?>


<body>
<canvas class="grad"></canvas>
<div class="main-wrapper">
    <?php include('template-parts/generic/header.php') ?>

    <main>
        <?php include('template-parts/sections/hero-texted-section.php') ?>
        <?php include('template-parts/sections/roadmap-section.php') ?>
        <?php

        $cards = array(
            (object)[
                'lottie_name' => 'pointer',
                'lottie_alternate' => false,
                'title' => 'Free Education',
                'content' => 'Our core principle is that knowledge and information should be free and accessible to everyone',
            ],
            (object)[
                'lottie_name' => 'hands',
                'lottie_alternate' => false,
                'title' => 'Inclusivity',
                'content' => 'We want to give everyone interested a fair opportunity to take part in Web3 and NFTs',
            ],
            (object)[
                'lottie_name' => 'faces',
                'lottie_alternate' => false,
                'title' => 'Community',
                'content' => 'Only together and through the exchange of experiences and information, we can grow',
            ]
        );
        include('template-parts/sections/what-is-section.php')
        ?>
        <?php include('template-parts/sections/team-section.php') ?>
        <?php include('template-parts/sections/discover-web3.php') ?>
        <?php include('template-parts/sections/cta-litepaper.php') ?>
    </main>

    <?php include('template-parts/generic/footer.php') ?>

</div>


<?php include('template-parts/svg-container.php') ?>


<script defer src="js/app.js" type="text/javascript"></script>

</body>

</html>