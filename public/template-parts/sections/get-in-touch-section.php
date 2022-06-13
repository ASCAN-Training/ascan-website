<section>
    <div class="container-main">
        <div class="get-in-touch">
            <div class="get-in-touch__heading">
                <h1 class="section-title title-animation">
                    <?php
                    $value = 'Support';
                    $class = 'attention--left';
                    include(__DIR__ . '/../includes/attention.php')
                    ?>
                    or Contact
                </h1>
                <p class="section-subtitle">
                    We are Web3/NFT enthusiasts with the strong belief that NFTs will immensely re-shape the world as we
                    know
                    it, and change
                </p>
            </div>
            <div class="get-in-touch__main">
                <form action="#" class="get-in-touch__form">
                    <h3 class="get-in-touch__form__title fz-36-24">Get in touch</h3>
                    <div class="get-in-touch__form__fields">
                        <?php
                        $label = '<span class="green">Hey!</span> My first name is';
                        $placeholder = 'Name';
                        $type = 'text';
                        $required = true;
                        include(__DIR__ . '/../includes/inputs/input.php')
                        ?>
                        <?php
                        $label = 'Get in touch with me at ';
                        $placeholder = 'Your email';
                        $type = 'email';
                        $required = true;
                        include(__DIR__ . '/../includes/inputs/input.php')
                        ?>
                        <?php
                        $label = 'Add comment';
                        $placeholder = 'Add comment';
                        $type = 'text';
                        $required = true;
                        include(__DIR__ . '/../includes/inputs/input.php')
                        ?>
                        <?php
                        $label = 'By the way, how was your day? 😜';
                        $placeholder = 'Add comment';
                        $type = 'text';
                        $required = true;
                        include(__DIR__ . '/../includes/inputs/input.php')
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>