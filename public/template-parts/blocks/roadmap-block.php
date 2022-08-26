<?php
$roadmap_cards = array(
    (object)[
        'img_url' => '/image/roadmap/roadmap1.svg',
        'img_alt' => 'Why we launched the ASCAN Training',
        'title' => 'Why we launched the ASCAN Training',
        'content' => 'We believe Web3/NFTs will change the world forever and should be accessible for everyone - and want to make the entry hurdle as small as possible. Web3 is about communities and sharing so we fight for avoiding exclusivity and want to give as many people as possible the oppertunity to take part and thrive.'
    ],
    (object)[
        'img_url' => '/image/roadmap/roadmap2.svg',
        'img_alt' => 'For whom we created it',
        'title' => 'For whom we created it',
        'content' => "ASCAN Training is for everyone who thought about getting into NFTs, Crypto or Web3 but didn't do the final step yet for one reason or another. Getting your first NFT will help the user to get a foot in the door and from there is free to discover all the possibilities the space has to offer. We are certain everyone can find his place here and is welcomed with open arms."
    ],
    (object)[
        'img_url' => '/image/roadmap/roadmap3.svg',
        'img_alt' => 'How we will do it',
        'title' => 'How we will do it',
        'content' => "Our beautifully designed, interactive learning course guides the user safely through every step nessecary to access the world of NFTs. After completing the course the user will get a free NFT as a reward, a beautiful memory of his first web3 experience which also functions as an entry token for our ASCAN Academy where we will teach some more in depth topics which will help the user navigate and discover the space."
    ]
)
?>
<div class="roadmap roadmap-count-<?php echo count($roadmap_cards) ?>">
    <?php
    foreach ($roadmap_cards as $key => $card) {
        include(__DIR__ . '/../cards/roadmap-card.php');
    }
    ?>
</div>