<footer>
    <div class="container-main">
        <div class="footer__menu">
            <a href="/" class="header__logo">
                <img src="/image/logo.svg" alt="Logo">
            </a>
            <?php include('navigation.php') ?>
            <a href="" class="header__cta">
                Try for free
                <span class="icon">
                    <svg><use xlink:href="#lines"></use></svg>
                </span>
            </a>
        </div>
        <?php include(__DIR__ . '/../blocks/footer-subscribe.php') ?>
        <div class="footer__navigation">
            <?php include('navigation.php') ?>
        </div>
        <div class="footer__bottom">
            <div class="footer__socials">
                <p>Follow our updates:</p>
                <div class="footer__socials__listing">
                    <?php include(__DIR__ . '/../includes/socials.php') ?>
                </div>
            </div>
            <nav class="footer__tech-links">
                <ul>
                    <li><a href="/">Copyright Notice</a></li>
                    <li><a href="/">Terms of Service</a></li>
                    <li><a href="/">Privacy Policy</a></li>
                </ul>
            </nav>
        </div>
    </div>
</footer>