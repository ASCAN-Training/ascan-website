
<section>
    <div class="container-main">
        <div class="what-is-ascan">
            <h2 class="section-title title-animation">What is the ASCAN Training?</h2>
            <div class="scroll-snap">
                <div class="what-is-ascan__listing scroll-snap__elements">
                    <?php
                    foreach ($cards as $key => $card) {
                        $title = $card->title;
                        $content = $card->content;
                        $lottie_name = $card->lottie_name;
                        $lottie_alternate = $card->lottie_alternate ? 'true' : 'false';
                        $lottie_renderer = isset($card->lottie_renderer) ? $card->lottie_renderer : 'canvas';
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