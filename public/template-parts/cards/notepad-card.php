<div class="notepad-card">
    <img src="<?php echo $img_url ?>" alt="<?php echo $img_alt ?>" class="notepad-card__icon">
    <h5 class="notepad-card__title fz-28-20"><?php echo $title ?></h5>
    <p class="notepad-card__content"><?php echo $content ?></p>
    <div class="notepad__rings">
        <?php for ($i = 0; $i < 6; $i++) { ?>
            <div class="ring"></div>
        <?php } ?>
    </div>
</div>