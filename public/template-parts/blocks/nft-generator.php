<?php
$stages = array(
    (object)[
        'title' => 'Prototype',
        'part_name' => null
    ],
    (object)[
        'title' => 'Flame',
        'part_name' => 'flame.png'
    ],
    (object)[
        'title' => 'Fins',
        'part_name' => 'fins.png'
    ],
    (object)[
        'title' => 'Nosecone',
        'part_name' => 'nosecone.png'
    ],
    (object)[
        'title' => 'Window',
        'part_name' => 'window.png'
    ],
)
?>
<div data-current-stage="0" data-stages="<?php echo count($stages) ?>" class="nft-generator">
    <div class="nft-generator__controls">
        <button aria-label="Prev NFT stage" type="button" class="nft-generator__controls__arrow left icon">
            <svg>
                <use xlink:href="#arrow"></use>
            </svg>
        </button>
        <div class="nft-generator__controls__pagination">
            <?php foreach ($stages as $key => $stage) { ?>
                <div
                        class="pagination-pip <?php echo $key === 0 ? 'active' : '' ?>"
                >
                    <span class="progress"></span>
                </div>
            <?php } ?>
        </div>
        <button aria-label="Next NFT stage" type="button" class="nft-generator__controls__arrow right icon">
            <svg>
                <use xlink:href="#arrow"></use>
            </svg>
        </button>
    </div>
    <div class="nft-generator__heading">
        <div class="nft-generator__progress">
            Trait: <span class="bold"><span class="white current-stage">01</span>/0<?php echo count($stages) ?></span>
        </div>
        <div class="nft-generator__state">
            <?php foreach ($stages as $key => $stage) { ?>
                <span class="bold green <?php echo $key === 0 ? 'active' : '' ?>"><?php echo $stage->title ?></span>
            <?php } ?>
        </div>
    </div>
    <div class="nft-generator__shuttle">
        <div class="skeleton">
            <?php foreach ($stages as $key => $stage) { ?>
                <?php if ($stage->part_name) { ?>
                    <img data-stage="<?php echo $key ?>"
                         src="./image/shuttle/skeleton/<?php echo $stage->part_name ?>"
                         class="active"
                         alt="Shuttle prototype part">
                <?php } ?>
            <?php } ?>
        </div>
        <div class="colored">
            <?php foreach ($stages as $key => $stage) { ?>
                <?php if ($stage->part_name) { ?>
                    <img data-stage="<?php echo $key ?>"
                         src="./image/shuttle/colored/<?php echo $stage->part_name ?>"
                         alt="Shuttle colored part">
                <?php } ?>
            <?php } ?>
        </div>
        <img src="./image/shuttle/shuttle-skeleton.png" alt="Shuttle skeleton">
    </div>
</div>