<div class="mobile-menu">
    <div class="mobile-menu__inner">
        <?php include('navigation.php') ?>
        <div class="mobile-menu__actions">
            <?php
            $btn_type = 'primary';
            $title = 'Try for free';
            include(__DIR__ . '/../includes/button.php')
            ?>
        </div>
        <div class="mobile-menu__socials">
            <?php include(__DIR__ . '/../includes/socials.php') ?>
        </div>
    </div>
</div>
<div class="overlay"></div>