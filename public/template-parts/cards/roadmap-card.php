<div class="roadmap-card tile-bg">
    <div class="roadmap-card__image">
        <img src="<?php echo $card->img_url ?>" alt="<?php echo $card->img_alt ?>">
    </div>
    <div class="roadmap-card__divider"></div>
    <div class="roadmap-card__main">
        <span class="roadmap-card__page">0<?php echo $key + 1 ?></span>
        <h3 class="roadmap-card__title fz-36-24"><?php echo $card->title ?></h3>
        <p class="roadmap-card__content"><?php echo $card->content ?></p>
    </div>
</div>