<section>
    <div class="container-main">
        <div class="simple-cta">
            <h3 class="title-simple-animation">
                <?php
                $value = 'NFTs';
                $class = 'attention--left';
                include(__DIR__ . '/../includes/attention.php')
                ?>
                are
                <img src="image/simple-cta/simple-cta1.svg" alt="nft are">
                <br>
                <?php
                $value = 'much more';
                include(__DIR__ . '/../includes/draw-underline.php')
                ?>
                <img src="image/simple-cta/simple-cta2.svg" alt="much more">
                than just
                <img src="image/simple-cta/simple-cta3.svg" alt="than just">
                pictures
            </h3>
            <?php
            $btn_type = 'primary';
            $title = 'Start education';
            include(__DIR__ . '/../includes/button.php')
            ?>
        </div>
    </div>
</section>