<section>
    <div class="container-main">
        <div class="hero">
            <div class="hero__content">
                <h1 class="title-animation">Get your first
                    <?php
                    $value = 'free NFT';
                    include(__DIR__ . '/../includes/draw-underline.php')
                    ?>
                    with
                    <?php
                    $value = 'the';
                    include(__DIR__ . '/../includes/attention.php')
                    ?>
                    ASCAN Training
                </h1>
                <div class="hero__actions">
                    <?php
                    $btn_type = 'primary';
                    $title = 'Start education';
                    include(__DIR__ . '/../includes/button.php')
                    ?>
                    <p>Storytelling in business has<br>become a field in its own right<br>as industries have grown</p>
                </div>
                <div class="hero__cards">
                    <?php
                    $img_url = 'image/notepad-cards/notepad-img1.svg';
                    $img_alt = 'img';
                    $title = '1,023';
                    $content = 'ASCANS<br>graduated';
                    include(__DIR__ . '/../cards/notepad-card.php')
                    ?>
                    <?php
                    $img_url = 'image/notepad-cards/notepad-img2.svg';
                    $img_alt = 'img';
                    $title = '349';
                    $content = 'Space explorers trained';
                    include(__DIR__ . '/../cards/notepad-card.php')
                    ?>
                    <?php
                    $img_url = 'image/notepad-cards/notepad-img3.svg';
                    $img_alt = 'img';
                    $title = '0$';
                    $content = 'Yes, our Training is completely free!';
                    include(__DIR__ . '/../cards/notepad-card.php')
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>