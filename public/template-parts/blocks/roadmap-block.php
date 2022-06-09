<?php
$roadmap_cards = array(
    (object)[
        'img_url' => '/image/roadmap/roadmap-1.svg',
        'img_alt' => 'roadmap 1',
        'title' => 'Why we launched ASCAN Training',
        'content' => 'We believe Web3/NFTs will change the world forever, and should be accessible to everyone — and want to make the entry hurdle as small as possible. Web3 is about communities and sharing, so we fight for avoiding exclusivity and want to give as many people as possible the opportunity to take part and thrive.'
    ],
    (object)[
        'img_url' => '/image/roadmap/roadmap-1.svg',
        'img_alt' => 'roadmap 1',
        'title' => 'Why we launched ASCAN Training',
        'content' => 'We believe Web3/NFTs will change the world forever, and should be accessible to everyone — and want to make the entry hurdle as small as possible. Web3 is about communities and sharing, so we fight for avoiding exclusivity and want to give as many people as possible the opportunity to take part and thrive.'
    ],
    (object)[
        'img_url' => '/image/roadmap/roadmap-1.svg',
        'img_alt' => 'roadmap 1',
        'title' => 'Why we launched ASCAN Training',
        'content' => 'We believe Web3/NFTs will change the world forever, and should be accessible to everyone — and want to make the entry hurdle as small as possible. Web3 is about communities and sharing, so we fight for avoiding exclusivity and want to give as many people as possible the opportunity to take part and thrive.'
    ],
    (object)[
        'img_url' => '/image/roadmap/roadmap-1.svg',
        'img_alt' => 'roadmap 1',
        'title' => 'Why we launched ASCAN Training',
        'content' => 'We believe Web3/NFTs will change the world forever, and should be accessible to everyone — and want to make the entry hurdle as small as possible. Web3 is about communities and sharing, so we fight for avoiding exclusivity and want to give as many people as possible the opportunity to take part and thrive.'
    ]
)
?>
<div class="roadmap">
    <?php
    foreach ($roadmap_cards as $key => $card) {
        include(__DIR__ . '/../cards/roadmap-card.php');
    }
    ?>
</div>