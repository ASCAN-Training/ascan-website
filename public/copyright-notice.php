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
        <section>
            <div class="container-main">
                <div class="get-in-touch">
                    <div class="get-in-touch__heading">
                        <h1 class="section-title title-animation">
                            <?php
                            $value = 'Copyright';
                            $class = 'attention--left';
                            include('template-parts/includes/attention.php')
                            ?>
                            Notice
                        </h1>
                    </div>
                    <br>
                    <div class="content">
                        <p>Here comes the copyright content!</p>
                    </div>

                </div>
            </div>


        </section>
    </main>

    <?php include('template-parts/generic/footer.php') ?>

</div>


<?php include('template-parts/svg-container.php') ?>


<script defer src="js/app.js" type="text/javascript"></script>

</body>

</html>