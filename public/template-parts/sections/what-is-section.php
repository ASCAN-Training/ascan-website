<?php
$cards = array(
    (object)[
        'img_url' => 'image/what-is/what-is1.svg',
        'img_alt' => 'Get into NFT’s Easy',
        'title' => 'Get into NFT’s Easy',
        'content' => 'No more endless videos, blogs and scrolling through information on loaded and complicated websites',
    ],
    (object)[
        'img_url' => 'image/what-is/what-is2.svg',
        'img_alt' => 'Step by Step Guide',
        'title' => 'Step by Step Guide',
        'content' => 'Our training is designed to guide you safely through every step to be prepared for getting your first NFT',
    ],
    (object)[
        'img_url' => 'image/what-is/what-is3.svg',
        'img_alt' => 'NFT as Reward',
        'title' => 'NFT as Reward',
        'content' => 'You will receive a beautiful and free NFT as a reward to always have a great memory of your first minting experience',
    ]
)
?>
<section>
    <div class="container-main">
        <div class="what-is-ascan">
            <h2 class="section-title title-animation">What is the ASCAN Training?</h2>
            <div class="scroll-snap">
                <div class="what-is-ascan__listing scroll-snap__elements">
                    <?php
                    foreach ($cards as $key => $card) {
                        $img_url = $card->img_url;
                        $img_alt = $card->img_alt;
                        $title = $card->title;
                        $content = $card->content;
                        include(__DIR__ . '/../cards/what-is-card.php');
                    }
                    ?>
                </div>
                <div class="scroll-snap__indicators">
                    <?php
                    foreach ($cards as $key => $card) { ?>
                        <button type="button" aria-label="Select <?php echo $key + 1 ?> slide"
                                class="scroll-snap__indicator <?php echo $key === 0 ? 'active' : '' ?>"></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>