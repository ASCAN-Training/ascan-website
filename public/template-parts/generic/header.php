<header class="header--on-top">
    <div class="container-main">
        <div class="header-inner">
            <a href="/" class="header__logo default-outline">
                <img src="/image/ascan-training-logo.svg" alt="Logo">
            </a>
            <?php //include('navigation.php') ?>
            <?php
            $add_class = 'btn-primary--small';
            $title = 'Join the Waitlist';
            include(__DIR__ . '/../includes/button-typeform.php');
            $title = null;
            $add_class = null;
            ?>
            <!--<a href="" class="header__cta">
                Try for free
                <span class="icon">
                    <svg><use xlink:href="#lines"></use></svg>
                </span>
            </a>-->
            <!--
            <button type="button" aria-label="Toggle mobile menu" class="burger">
                <?php //include(__DIR__ . '/../includes/burger.php') ?>
            </button>
        -->
        </div>
    </div>
    <?php include('mobile-menu.php') ?>
</header>