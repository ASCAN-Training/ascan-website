<?php
$cards = array(
    (object)[
        'btn_url' => 'https://google.com/',
        'btn_title' => 'About Academy',
        'title' => 'ASCAN Academy',
        'content' => 'Free access to the ASCAN Academy',
    ],
    (object)[
        'btn_url' => 'https://google.com/',
        'btn_title' => 'Our Discord',
        'title' => 'Discord Community ',
        'content' => 'Free access to our Discord Community Server',
    ],
    (object)[
        'btn_url' => false,
        'btn_title' => false,
        'title' => 'Eligible for free Airdrops',
        'content' => 'Chance for more free NFTs with more access',
    ]
)
?>
<section>
    <div class="container-main">
        <div class="safe-start__heading">
            <h2 class="section-title title-animation">Safe start into your NFT journey</h2>
            <p class="section-subtitle section-subtitle--center">The free NFT you will earn after completing the course
                comes with plenty of utility
                which will help you navigate and ensure a safe start into your NFT journey.</p>
        </div>
        <div class="scroll-snap">
            <div class="safe-start__listing ordered-list scroll-snap__elements">
                <?php
                foreach ($cards as $card) {
                    $title = $card->title;
                    $content = $card->content;
                    $btn_title = $card->btn_title;
                    $btn_url = $card->btn_url;
                    include(__DIR__ . '/../cards/numbered-card.php');
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
</section>