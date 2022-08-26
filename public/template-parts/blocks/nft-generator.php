<?php
$stages = array(
    (object)[
        'title' => 'Prototype',
        'part_name' => null,
        'folder_name' => '',
        'parts_count' => null
    ],
    (object)[
        'title' => 'Flame',
        'part_name' => 'flame.png',
        'folder_name' => 'flame',
        'parts_count' => 3
    ],
    (object)[
        'title' => 'Fins',
        'part_name' => 'fins.png',
        'folder_name' => 'fins',
        'parts_count' => 4
    ],
    (object)[
        'title' => 'Nosecone',
        'part_name' => 'nosecone.png',
        'folder_name' => 'nosecone',
        'parts_count' => 4
    ],
    (object)[
        'title' => 'Window',
        'part_name' => 'window.png',
        'folder_name' => 'window',
        'parts_count' => 4
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
                         class=""
                         data-colored-folder="<?php echo $stage->folder_name ?>"
                         alt="Shuttle prototype part">
                <?php } ?>
            <?php } ?>
        </div>
        <div class="colored" data-base-url="./image/shuttle/colored">
            <?php foreach ($stages as $key => $stage) { ?>
                <img
                        src=""
                        data-colored-parts="<?php echo $stage->parts_count ?>"
                        alt="Shuttle colored part <?php echo $key ?>">
            <?php } ?>
        </div>
        <div class="pointers">
            <img src="./image/shuttle/skeleton/pointers/1.png" alt="Shuttle pointer">
            <img src="./image/shuttle/skeleton/pointers/2.png" alt="Shuttle pointer">
            <img src="./image/shuttle/skeleton/pointers/3.png" alt="Shuttle pointer">
            <img src="./image/shuttle/skeleton/pointers/fins.png" alt="Shuttle pointer">
            <img src="./image/shuttle/skeleton/pointers/flame.png" alt="Shuttle pointer">
            <img src="./image/shuttle/skeleton/pointers/nosecone.png" alt="Shuttle pointer">
            <img src="./image/shuttle/skeleton/pointers/window.png" alt="Shuttle pointer">
        </div>
        <img src="./image/shuttle/shuttle-skeleton.png" alt="Shuttle skeleton">
        <div class="parts-selector">
            <button aria-label="Select part variation" type="button"
                    class="parts-selector__button parts-selector__button--prev disabled icon">
                <svg>
                    <use xlink:href="#arrow-short"></use>
                </svg>
            </button>
            <button aria-label="Select part variation" type="button"
                    class="parts-selector__button parts-selector__button--next icon">
                <svg>
                    <use xlink:href="#arrow-short"></use>
                </svg>
            </button>
        </div>
    </div>
</div>