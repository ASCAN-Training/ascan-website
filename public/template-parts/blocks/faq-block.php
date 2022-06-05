<?php
$questions = array(
    (object)[
        'title' => 'Is the ASCAN Training really completely free?',
        'content' => "Description of the number. People always pay attention to numbers. They are a powerful visual anchor.  Description of the number. People always pay attention to numbers. Description of the number. People always pay attention to numbers. They are a powerful visual anchor."
    ],
    (object)[
        'title' => 'What can I do with the free NFT after completing the ASCAN Training?',
        'content' => "Description of the number. People always pay attention to numbers. They are a powerful visual anchor.  Description of the number. People always pay attention to numbers. Description of the number. People always pay attention to numbers. They are a powerful visual anchor."
    ],
    (object)[
        'title' => 'What are the mentors on course?',
        'content' => "DescriptDescription of the number. People always pay attention to numbers. They are a powerful visual anchor.  Description of the number. People always pay attention to numbers. Description of the number. People always pay attention to numbers. They are a powerful visual anchor.ion of the number. People always pay attention to numbers. They are a powerful visual anchor.  Description of the number. People always pay attention to numbers. Description of the number. People always pay attention to numbers. They are a powerful visual anchor."
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