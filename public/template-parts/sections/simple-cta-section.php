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
                <span class="img-in-text"><img src="image/simple-cta/simple-cta1.svg" alt="nft are"></span>
                <br>
                <?php
                $value = 'much more';
                include(__DIR__ . '/../includes/draw-underline.php')
                ?>
                <span class="img-in-text"><img src="image/simple-cta/simple-cta2.svg" alt="much more"></span>
                than just
                <span class="img-in-text"><img src="image/simple-cta/simple-cta3.svg" alt="than just"></span>
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