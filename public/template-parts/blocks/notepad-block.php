<?php
$modules = array(
    (object)[
        'title' => 'Welcome to the Training Station',
        'content' => "The ASCAN Training is your safest, easiest and quickest way to get your first NFT. We will take you on an exciting journey and guide you briefly through every single step you need to know to get your first NFT at no risk. And the best thing is: you will not only learn, but actually take action by doing practical tasks. No more boring videos, articles and blogs. Getting your first NFT can be that easy, and it's completely free!"
    ],
    (object)[
        'title' => '2Welcome to the Training Station',
        'content' => "2The ASCAN Training is your safest, easiest and quickest way to get your first NFT. We will take you on an exciting journey and guide you briefly through every single step you need to know to get your first NFT at no risk. And the best thing is: you will not only learn, but actually take action by doing practical tasks. No more boring videos, articles and blogs. Getting your first NFT can be that easy, and it's completely free!"
    ],
    (object)[
        'title' => '3Welcome to the Training Station',
        'content' => "3The ASCAN Training is your safest, easiest and quickest way to get your first NFT. We will take you on an exciting journey and guide you briefly through every single step you need to know to get your first NFT at no risk. And the best thing is: you will not only learn, but actually take action by doing practical tasks. No more boring videos, articles and blogs. Getting your first NFT can be that easy, and it's completely free!"
    ],
    (object)[
        'title' => '4Welcome to the Training Station',
        'content' => "4The ASCAN Training is your safest, easiest and quickest way to get your first NFT. We will take you on an exciting journey and guide you briefly through every single step you need to know to get your first NFT at no risk. And the best thing is: you will not only learn, but actually take action by doing practical tasks. No more boring videos, articles and blogs. Getting your first NFT can be that easy, and it's completely free!"
    ],
    (object)[
        'title' => '5Welcome to the Training Station',
        'content' => "5The ASCAN Training is your safest, easiest and quickest way to get your first NFT. We will take you on an exciting journey and guide you briefly through every single step you need to know to get your first NFT at no risk. And the best thing is: you will not only learn, but actually take action by doing practical tasks. No more boring videos, articles and blogs. Getting your first NFT can be that easy, and it's completely free!"
    ],
    (object)[
        'title' => '6Welcome to the Training Station',
        'content' => "6The ASCAN Training is your safest, easiest and quickest way to get your first NFT. We will take you on an exciting journey and guide you briefly through every single step you need to know to get your first NFT at no risk. And the best thing is: you will not only learn, but actually take action by doing practical tasks. No more boring videos, articles and blogs. Getting your first NFT can be that easy, and it's completely free!"
    ]
)
?>
<div class="notepad">
    <div class="notepad-page tile-bg tile-bg--no-border notepad-left">
        <div class="notepad__rings">
            <?php for ($i = 0; $i < 12; $i++) { ?>
                <div class="ring"></div>
            <?php } ?>
        </div>
        <div class="notepad__page-name">Training Information</div>
        <?php foreach ($modules as $key => $module) { ?>
            <div data-module="<?php echo $key ?>"
                 class="notepad__page-content <?php echo $key === 0 ? 'active' : '' ?>">
                <h3 class="notepad__page-title fz-36-24"><?php echo $module->title ?></h3>
                <div class="notepad__page-description"><?php echo $module->content ?></div>
            </div>
        <?php } ?>
    </div>
    <div class="notepad-page tile-bg tile-bg--no-border notepad-right">
        <div class="notepad__rings notepad__rings--left">
            <?php for ($i = 0; $i < 12; $i++) { ?>
                <div class="ring"></div>
            <?php } ?>
        </div>
        <div class="notepad__page-name">Module content</div>
        <?php foreach ($modules as $key => $module) { ?>
            <button class="notepad__button <?php echo $key === 0 ? 'active' : '' ?>" type="button"
                    aria-label="Select module" data-module="<?php echo $key ?>">
                <?php echo $key + 1 ?>. Module <?php echo $key + 1 ?>
                <span class="icon">
                    <svg><use xlink:href="#eye"></use></svg>
                </span>
            </button>
        <?php } ?>
    </div>
</div>