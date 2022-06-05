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
        <?php include('template-parts/sections/what-is-section.php') ?>
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