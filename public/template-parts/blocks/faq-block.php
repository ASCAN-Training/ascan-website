<?php
$questions = array(
    (object)[
        'title' => 'Is ASCAN Training really free?',
        'content' => "We’re proud to offer you an entirely free educational experience as well as complimentary material to find your place in the web3 community. You can complete the course in its entirety without spending a single cent, though you will need to cover what’s known as a “gas fee” to mint your graduation NFT (more on this during the course)."
    ],
    (object)[
        'title' => 'What can I do with my NFT after completing the course?',
        'content' => "Our NFT is what’s known as a soul-bound token. This means you won’t be able to sell it, though you will be able to use it to gain access to our community, as well as several other perks from allied projects down the line."
    ],
    (object)[
        'title' => 'Where can I learn more about web3 when I’m done with ASCAN?',
        'content' => "We’re constantly working on expanding our knowledge resources for our community, and working on partnerships with other educational projects. Besides that, we’ll also offer some useful pointers to explore each of our lessons further with trusted curated resources to your heart’s content."
    ]
)
?>
<div class="faq">
    <?php foreach ($questions as $key => $question) { ?>
        <div class="faq__question <?php echo $key === 0 ? 'active' : '' ?>">
            <button data-question="<?php echo $key ?>" class="faq__question__button" type="button"
                    aria-label="Expand question" aria-expanded="<?php echo $key === 0 ? 'true' : 'false' ?>">
                <?php echo $question->title ?>
                <span class="icon"></span>
            </button>
            <div data-answer="<?php echo $key ?>" aria-hidden="<?php echo $key === 0 ? 'false' : 'true' ?>" class="faq__question__content">
                <p><?php echo $question->content ?></p>
            </div>
        </div>
    <?php } ?>
</div>