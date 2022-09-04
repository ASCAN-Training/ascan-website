<?php
$socials = array(
    (object)[
        'icon' => 'image/socials/twitter.svg',
        'alt' => 'Twitter',
        'link' => 'https://twitter.com/ascantraining'
    ]
);
foreach ($socials as $social) { ?>
    <a href="<?php echo $social->link ?>" target="_blank" rel="nofollow" class="social-button">
        <img src="<?php echo $social->icon ?>" alt="<?php echo $social->alt ?>">
    </a>
<?php } ?>