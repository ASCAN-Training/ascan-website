<section>
    <div class="container-main">
        <div class="hero">
            <div class="hero__content">
                <h1 class="title-animation">Learn the ropes
                    <?php
                    $value = 'of web3';
                    include(__DIR__ . '/../includes/draw-underline.php')
                    ?>
                    in
                    <?php
                    $value = 'just';
                    include(__DIR__ . '/../includes/attention.php')
                    ?>
                    <br>a few lessons!
                </h1>
                <div class="hero__actions">
                    <?php
                    //$btn_type = 'primary';
                    //$title = 'Join the Waitlist';
                    //include(__DIR__ . '/../includes/button.php')
                    include(__DIR__ . '/../includes/button-typeform.php')//
                    ?>
                    <p>We set out to build the simplest possible introduction to crypto, you’ll learn only the stuff you need to get started.</p>
                </div>
                <div class="hero__cards">
                    <?php
                    $img_url = 'image/notepad-cards/notepad-img1.svg';
                    $img_alt = 'img';
                    $title = '1,023';
                    $content = 'Candidates<br>in training';
                    include(__DIR__ . '/../cards/notepad-card.php')
                    ?>
                    <?php
                    $img_url = 'image/notepad-cards/notepad-img2.svg';
                    $img_alt = 'img';
                    $title = '349';
                    $content = 'Spaceships launched';
                    include(__DIR__ . '/../cards/notepad-card.php')
                    ?>
                    <?php
                    $img_url = 'image/notepad-cards/notepad-img3.svg';
                    $img_alt = 'img';
                    $title = '$0';
                    $content = 'Yes, our Training is completely free!';
                    include(__DIR__ . '/../cards/notepad-card.php')
                    ?>
                </div>
            </div>
            <div class="hero__illustration">
                <?php  include(__DIR__ . '/../svg/illustrations/hero-illustration.php') ?>
            </div>
        </div>
    </div>
</section>