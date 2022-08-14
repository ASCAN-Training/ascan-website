<section>
    <div class="container-main">
        <div class="benefits">
            <div class="benefits__main">
                <h2 class="section-title section-title--left title-animation">
                    <?php
                    $value = 'Your';
                    include(__DIR__ . '/../includes/attention.php')
                    ?>
                    <?php
                    $value = 'benefits';
                    include(__DIR__ . '/../includes/draw-underline.php')
                    ?>
                    of graduating the ASCAN Training
                </h2>
                <p class="section-subtitle">Upon completing the Training you will be confident and know everything about how to
                    move safely in the NFT Space and Discover the world of web3. You will be</p>
                <div class="benefits__actions">
                    <?php
                    $btn_type = 'primary';
                    $title = 'Launch Training';
                    include(__DIR__ . '/../includes/button.php')
                    ?>
                    <?php
                    $btn_type = 'tertiary';
                    $title = 'Discover WEB3';
                    include(__DIR__ . '/../includes/button.php')
                    ?>
                </div>
            </div>
            <div class="benefits__decor">
                <?php  include(__DIR__ . '/../svg/illustrations/rocket-illustration.php') ?>
            </div>
        </div>
    </div>
</section>