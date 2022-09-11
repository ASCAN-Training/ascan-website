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
                'title' => 'Get into NFTs Quickly',
                'content' => 'No more techy videos, long blog posts or scrolling through complex information on maze-like websites.',
            ],
            (object)[
                'lottie_name' => 'rocket',
                'lottie_alternate' => false,
                'title' => 'Step-by-Step Learning',
                'content' => 'Our training is designed to help you navigate each stage of your journey to be prepared to mint your first NFT.',
            ],
            (object)[
                'lottie_name' => 'flag',
                'lottie_alternate' => false,
                'title' => 'Your First NFT, for Free!',
                'content' => 'What better reward for completing this journey than your very first NFT? This free token will represent your very first steps towards contribution.',
            ]
        );
        include('template-parts/sections/what-is-section.php')
        ?>
        <?php /*include('template-parts/sections/why-get-section.php')*/ ?>
        <?php include('template-parts/sections/simple-cta-section.php') ?>
        <?php /*include('template-parts/sections/our-training-section.php')*/ ?>
        <?php include('template-parts/sections/how-to-start-section.php') ?>
        <?php /*include('template-parts/sections/benefits-section.php')*/ ?>
        <?php /*include('template-parts/sections/safe-start-section.php')*/ ?>
        <?php include('template-parts/sections/faq-section.php') ?>
        <?php include('template-parts/sections/decorated-cta-section.php') ?>
    </main>

    <?php include('template-parts/generic/footer.php') ?>

</div>


<?php include('template-parts/svg-container.php') ?>


<script defer src="js/app.js" type="text/javascript"></script>
<script defer async src="//embed.typeform.com/next/embed.js"></script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script defer src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#818BD5",
        "text": "#fff"
    },
    "button": {
      "background": "#1B1F2C"
    }
  },
  "showLink": false,
  "content": {
    "message": "This website uses cookies. By continuing to use the website, you consent to the use of cookies.",
    "dismiss": "Ok!"
  }
})});
</script>


</body>

</html>