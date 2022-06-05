<div class="numbered-card tile-bg">
    <h4 class="numbered-card__title fz-28-24"><?php echo $title ?></h4>
    <p class="numbered-card__content"><?php echo $content ?></p>
    <?php
    if (isset($btn_url) && $btn_title) {
        $btn_type = 'secondary';
        $title = $btn_title;
        include(__DIR__ . '/../includes/button.php');
    }
    ?>
</div>