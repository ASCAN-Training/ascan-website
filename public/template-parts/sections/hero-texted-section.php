<section class="hero-texted-section">
    <div class="container-main">
        <div class="hero hero-texted">
            <div class="hero__content">
                <h1 class="title-animation">
                    <?php
                    $value = 'Our goal';
                    include(__DIR__ . '/../includes/highlight-ellipse.php')
                    ?>
                    is to make Web3/NFT accessible
                    to everyone
                    <span class="parallax-scene bubble-w-image bubble-w-image--green bubble-w-image--200">
                    <img data-depth="1.5" src="image/simple-cta/simple-cta4.svg" alt="much more">
                </span>
                </h1>
                <div class="hero__actions hero__actions--column">
                    <p>We are Web3/NFT enthusiasts with the strong belief that NFTs will immensely re-shape the world as we know it, and change the way people interact with - and operate in - the internet</p>
                    <?php
                    $btn_type = 'primary';
                    $title = 'Start education';
                    include(__DIR__ . '/../includes/button.php')
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-texted__decor">
        <?php  include(__DIR__ . '/../svg/illustrations/about-us-illustration.php') ?>
    </div>
    <div class="hero-texted__rocks">
        <?php  include(__DIR__ . '/../svg/illustrations/about-us-rocks.php') ?>
    </div>
</section>