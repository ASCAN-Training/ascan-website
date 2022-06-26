<?php
$socials = array(
    (object)[
        'link' => 'http://google.com',
        'img_url' => '/image/socials/fb.svg',
        'img_alt' => 'Facebook'
    ],
    (object)[
        'link' => 'http://google.com',
        'img_url' => '/image/socials/twitter.svg',
        'img_alt' => 'Twitter'
    ],
    (object)[
        'link' => 'http://google.com',
        'img_url' => '/image/socials/tg.svg',
        'img_alt' => 'Telegram'
    ],
    (object)[
        'link' => 'http://google.com',
        'img_url' => '/image/socials/insta.svg',
        'img_alt' => 'Instagram'
    ]
);
?>
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
                <div class="get-in-touch__form-wrapper">
                    <div class="get-in-touch__tab"></div>
                    <form action="#" class="get-in-touch__form">
                        <img src="/image/icons/email-icon.svg" alt="Email icon" class="get-in-touch__form__icon">
                        <h3 class="get-in-touch__form__title fz-36-24">Get in touch</h3>
                        <div class="get-in-touch__form__fields">
                            <?php
                            $value = 'support';
                            $name = 'tag';
                            $type = 'text';
                            include(__DIR__ . '/../includes/inputs/hidden-input.php')
                            ?>
                            <?php
                            $label = '<span class="green">Hey!</span> My first name is*';
                            $placeholder = 'Name';
                            $name = 'fname';
                            $type = 'text';
                            $required = true;
                            include(__DIR__ . '/../includes/inputs/input.php')
                            ?>
                            <?php
                            $label = 'My last name is*';
                            $placeholder = 'Last name';
                            $name = 'lname';
                            $type = 'text';
                            $required = true;
                            include(__DIR__ . '/../includes/inputs/input.php')
                            ?>
                            <?php
                            $label = 'Get in touch with me at*';
                            $placeholder = 'Your email';
                            $name = 'email';
                            $type = 'email';
                            $required = true;
                            include(__DIR__ . '/../includes/inputs/input.php')
                            ?>
                            <?php
                            $label = 'Subject*';
                            $placeholder = 'Select right point';
                            $name = 'subject';
                            $required = true;
                            $options = array(
                                (object)[
                                    'title' => 'Education',
                                    'value' => 'Education',
                                ],
                                (object)[
                                    'title' => 'Work Proposal',
                                    'value' => 'Work Proposal',
                                ],
                                (object)[
                                    'title' => 'Partner Offer',
                                    'value' => 'Partner Offer',
                                ]
                            );
                            include(__DIR__ . '/../includes/inputs/select.php');
                            ?>
                            <?php
                            $label = 'Message*';
                            $placeholder = 'Add message';
                            $name = 'message';
                            $type = 'text';
                            $required = true;
                            include(__DIR__ . '/../includes/inputs/input.php')
                            ?>
                            <?php
                            $label = 'Additional Details';
                            $placeholder = 'Add comment';
                            $name = 'adddet';
                            $type = 'text';
                            $required = false;
                            include(__DIR__ . '/../includes/inputs/input.php')
                            ?>
                        </div>
                        <div class="get-in-touch__form__actions">
                            <button type="submit" class="btn btn-secondary btn-secondary--filled">
                                <span class="value"> Get in Touch</span>
                            </button>
                            <?php
                            $label = 'I here by accept all terms and conditions';
                            $name = 'terms';
                            $type = 'text';
                            $required = true;
                            include(__DIR__ . '/../includes/inputs/checkbox.php')
                            ?>
                        </div>
                        <div class="get-in-touch__form__contacts">
                            <p class="block-title">Or use our email:</p>
                            <a href="mailto:Ascanmxka@mail.ru" class="block-content">Ascanmxka@mail.ru</a>
                        </div>
                    </form>
                </div>
                <div class="get-in-touch__socials">
                    <?php foreach ($socials as $social) {
                        $link = $social->link;
                        $img_url = $social->img_url;
                        $img_alt = $social->img_alt;
                        include(__DIR__ . '/../includes/big-social-tab.php');
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>