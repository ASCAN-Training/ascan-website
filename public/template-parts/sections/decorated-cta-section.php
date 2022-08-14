<section>
    <div class="container-main">
        <div class="decorated-cta tile-bg">
            <h2 class="section-title title-animation">
                <?php
                $value = 'Ready';
                $class = 'attention--left';
                include(__DIR__ . '/../includes/attention.php')
                ?>
                to get into the
                <?php
                $value = 'NFT';
                include(__DIR__ . '/../includes/draw-underline.php')
                ?>
                space? Start your journey now!
            </h2>
            <?php
            $btn_type = 'primary';
            $title = 'Launch the ASCAN Training';
            include(__DIR__ . '/../includes/button.php')
            ?>
            <div class="decorated-cta__decor">
                <?php  include(__DIR__ . '/../svg/illustrations/sit-illustration.php') ?>
            </div>
            <div class="decorated-cta__rocks">
                <?php  include(__DIR__ . '/../svg/illustrations/rocks.php') ?>
            </div>
        </div>
    </div>
</section>