<?php
$members = array(
    (object)[
        'img_url' => '/image/member-image.jpg',
        'img_alt' => 'team member',
        'name' => 'Alex K.',
        'description' => '“NFT-guru more than 4 years already”'
    ],
    (object)[
        'img_url' => '/image/member-image.jpg',
        'img_alt' => 'team member',
        'name' => 'Alex K.',
        'description' => '“NFT-guru more than 4 years already”'
    ],
    (object)[
        'img_url' => '/image/member-image.jpg',
        'img_alt' => 'team member',
        'name' => 'Alex K.',
        'description' => '“NFT-guru more than 4 years already”'
    ],
    (object)[
        'img_url' => '/image/member-image.jpg',
        'img_alt' => 'team member',
        'name' => 'Alex K.',
        'description' => '“NFT-guru more than 4 years already”'
    ],
    (object)[
        'img_url' => '/image/member-image.jpg',
        'img_alt' => 'team member',
        'name' => 'Alex K.',
        'description' => '“NFT-guru more than 4 years already”'
    ],
    (object)[
        'img_url' => '/image/member-image.jpg',
        'img_alt' => 'team member',
        'name' => 'Alex K.',
        'description' => '“NFT-guru more than 4 years already”'
    ]
)
?>
<section class="team-section">
    <div class="container-main">
        <div class="team-box">
            <h2 class="section-title title-animation">
                <?php
                $value = 'Designed';
                $class = 'attention--left';
                include(__DIR__ . '/../includes/attention.php')
                ?>
                by
                <?php
                $value = 'professionals';
                include(__DIR__ . '/../includes/highlight-ellipse.php')
                ?>
                to guide you safely through your
                <?php
                $value = 'journey';
                unset($class);
                include(__DIR__ . '/../includes/attention.php')
                ?>
            </h2>
            <div class="team-members">
                <?php include(__DIR__ . '/../svg/ellipse-path.php'); ?>
                <?php foreach ($members as $member) { ?>
                    <?php include(__DIR__ . '/../cards/team-member.php'); ?>
                <?php } ?>
            </div>
            <div class="scroll-snap">
                <div class="scroll-snap__elements team-member__scrollsnap">
                    <?php foreach ($members as $member) { ?>
                        <?php include(__DIR__ . '/../cards/team-member.php'); ?>
                    <?php } ?>
                </div>
                <div class="scroll-snap__indicators">
                    <?php
                    foreach ($members as $key => $member) { ?>
                        <button type="button" aria-label="Select <?php echo $key + 1 ?> slide"
                                class="scroll-snap__indicator <?php echo $key === 0 ? 'active' : '' ?>"></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>