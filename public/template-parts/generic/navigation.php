<?php
$menu_items = array(
    (object)[
        'title' => 'Home',
        'url' => '/',
        'target' => ''
    ],
    (object)[
        'title' => 'About',
        'url' => '/about',
        'target' => ''
    ],
    (object)[
        'title' => 'Training',
        'url' => '#',
        'target' => ''
    ],
    (object)[
        'title' => 'Academy',
        'url' => '#',
        'target' => ''
    ],
    (object)[
        'title' => 'FAQ',
        'url' => '#',
        'target' => ''
    ],
    (object)[
        'title' => 'Support or Contact',
        'url' => '/support',
        'target' => ''
    ]
)
?>
<nav>
    <ul>
        <?php foreach ($menu_items as $menu_item) { ?>
            <li>
                <a href="<?php echo $menu_item->url ?>" target="<?php echo $menu_item->target ?>">
                    <?php echo $menu_item->title ?>
                    <span class="icon">
                        <?php include(__DIR__ . '/../svg/menu-hover.php') ?>
                    </span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>