<?php
$list_items = array(
    (object)[
        'title' => 'Possibilitys',
        'content' => "Own your AssetsYes, you really OWN your assets. If you own an nft it is only yours and it can't be taken away from you."
    ],
    (object)[
        'title' => 'Security',
        'content' => "If stored properly NFTs are as secure as it gets and can't get stolen or lost. With a safe wallet setup you are at no risk of losing your collected assets.   "
    ],
    (object)[
        'title' => 'Membership',
        'content' => "NFTs can be used to verify memberships for various scenarios. For example communities, events (tickets) and for services."
    ],
    (object)[
        'title' => 'Accessibility',
        'content' => "Taking artworks as an example, instead of only viewable and tradable in galleries, they can be accessed and displayed from everywhere in the world."
    ],
    (object)[
        'title' => 'Transparency and Authenticity',
        'content' => "With the Blockchain technology NFT transactions are effortlessly trackable. Ensuring authenticity, creatorship and ownership of the Asset."
    ],
    (object)[
        'title' => 'Investments and Royalties',
        'content' => "Because NFT is a technology with room to grow, it can be a valuable investment. Copyright royalties allow for a long-term income stream for creators, such as artists and many others."
    ]
)
?>
<section>
    <div class="container-main">
        <div class="discover-web3">
            <div class="discover-web3__decor">
                <h2 class="section-title section-title--left title-animation">Discover Web3</h2>
                <div class="discover-web3__illustration">
                    <?php  include(__DIR__ . '/../svg/illustrations/discover-illustration.php') ?>
                </div>
            </div>
            <div class="discover-web3__content">
                <ol class="ordered-list">
                    <?php foreach ($list_items as $item) { ?>
                        <li>
                            <?php
                            $title = $item->title;
                            $content = $item->content;
                            include(__DIR__ . '/../tiles/why-get-tile.php');
                            ?>
                        </li>
                    <?php } ?>
                </ol>
            </div>
        </div>
    </div>
</section>