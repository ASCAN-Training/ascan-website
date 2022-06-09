<?php
$menu_items = array('Home', 'About', 'Training', 'Academy', ' FAQ', 'Support or Contact')
?>
<nav>
    <ul>
        <?php foreach ($menu_items as $menu_item) { ?>
            <li>
                <a href="/about.html">
                    <?php echo $menu_item ?>
                    <span class="icon">
                        <?php include(__DIR__.'/../svg/menu-hover.php') ?>
                    </span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>