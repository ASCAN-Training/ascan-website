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
        <div class="footer__bottom">
            <div class="footer__socials">
                <p>Follow our updates:</p>
                <div class="footer__socials__listing">
                    <?php
                    $socials = array(
                        (object)[
                            'icon' => 'image/socials/twitter.svg',
                            'alt' => 'Twitter',
                            'link' => 'https://google.com/'
                        ],
                        (object)[
                            'icon' => 'image/socials/fb.svg',
                            'alt' => 'Facebook',
                            'link' => 'https://google.com/'
                        ],
                        (object)[
                            'icon' => 'image/socials/insta.svg',
                            'alt' => 'Instagram',
                            'link' => 'https://google.com/'
                        ],
                        (object)[
                            'icon' => 'image/socials/tg.svg',
                            'alt' => 'Telegram',
                            'link' => 'https://google.com/'
                        ]
                    );
                    foreach ($socials as $social) { ?>
                        <a href="<?php echo $social->link ?>" target="_blank" rel="nofollow" class="social-button">
                            <img src="<?php echo $social->icon ?>" alt="<?php echo $social->alt ?>">
                        </a>
                    <?php } ?>
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