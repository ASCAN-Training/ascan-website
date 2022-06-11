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