<footer>
    <div class="container-main">
        <div class="footer__menu">
            <a href="/" class="header__logo default-outline">
                <img src="/image/logo.svg" alt="Logo">
            </a>
            <!-- Temporary commented START -->
            <?php //include('navigation.php') ?>
            <!--<a href="" class="header__cta">
                Try for free
                <span class="icon">
                    <svg><use xlink:href="#lines"></use></svg>
                </span>
            </a>-->
            <!-- Temporary commented END -->
            <?php
            $title = null;
            include(__DIR__ . '/../includes/button-typeform.php')
            ?>
        </div>
        <?php include(__DIR__ . '/../blocks/footer-subscribe.php') ?>
        <div class="footer__bottom">
            <div class="footer__socials">
                <p>Follow our updates:</p>
                <div class="footer__socials__listing">
                    <?php include(__DIR__ . '/../includes/socials.php') ?>
                </div>
            </div>
            <nav class="footer__tech-links">
                <ul>
                    <li><a href="/copyright-notice.html">Copyright Notice</a></li>
                    <li><a href="/terms-of-service.html">Terms of Service</a></li>
                    <li><a href="/privacy-police.html">Privacy Policy</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="footer-lottie">

    </div>
</footer>