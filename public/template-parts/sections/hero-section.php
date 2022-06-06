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
                    <svg class="clip-svg" aria-hidden="true">
                        <clipPath id="notepad-card-clippath" clipPathUnits="objectBoundingBox"><path d="M0,0.045 C0,0.02,0.021,0,0.047,0 H0.953 C0.979,0,1,0.02,1,0.045 V0.134 H0.965 C0.946,0.134,0.93,0.149,0.93,0.168 C0.93,0.186,0.946,0.201,0.965,0.201 H1 V0.268 H0.965 C0.946,0.268,0.93,0.283,0.93,0.302 C0.93,0.32,0.946,0.335,0.965,0.335 H1 V0.402 H0.965 C0.946,0.402,0.93,0.417,0.93,0.436 C0.93,0.454,0.946,0.469,0.965,0.469 H1 V0.536 H0.965 C0.946,0.536,0.93,0.551,0.93,0.57 C0.93,0.588,0.946,0.603,0.965,0.603 H1 V0.67 H0.965 C0.946,0.67,0.93,0.685,0.93,0.704 C0.93,0.722,0.946,0.737,0.965,0.737 H1 V0.804 H0.965 C0.946,0.804,0.93,0.819,0.93,0.838 C0.93,0.856,0.946,0.871,0.965,0.871 H1 V0.955 C1,0.98,0.979,1,0.953,1 H0.047 C0.021,1,0,0.98,0,0.955 V0.045"></path></clipPath>
                    </svg>
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