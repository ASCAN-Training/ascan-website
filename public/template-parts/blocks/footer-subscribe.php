<div class="footer-subscribe">
    <div class="footer-subscribe__description">
        <h2 class="footer-subscribe__title section-title section-title--no-center section-title--left title-animation">
            <?php
            $value = "Let's";
            $class = 'attention--left';
            include(__DIR__ . '/../includes/attention.php')
            ?>
            Stay
            <?php
            $value = 'in Touch!';
            include(__DIR__ . '/../includes/draw-underline.php')
            ?>
        </h2>
        <p>
            There is still a lot to learn about web3 after completing our course! If you’re interested in getting involved and finding a path in this sprawling ecosystem, how about you join our community?
        </p>
    </div>

    <div class="footer-subscribe__main">
        <div class="subscribe-success">
            <h5>Congratulations!</h5>
            <p>You have successfully subscribed for ASCAN updates</p>
            <div class="subscribe-progress" >
                <div class="counter" data-target="100">
                    <span class="value">0</span>%
                </div>
                <?php include(__DIR__ . '/../svg/load.php') ?>
            </div>
        </div>
        <div class="subscribe-initial">
            <p>
                Sign up to our newsletter to receive ASCAN updates, new learning resources and exclusive content straight to your inbox.
            </p>
            <form action="#" class="subscribe-form">
                <?php
                $value = 'newsletter';
                $name = 'tag';
                $type = 'text';
                include(__DIR__ . '/../includes/inputs/hidden-input.php')
                ?>
                <label class="default-input">
                    <input type="email" name="email" required placeholder="Enter your email">
                </label>
                <button type="submit" class="btn btn-primary btn-primary--simple">
                    <span class="value">Send</span>
                </button>
            </form>
        </div>
    </div>
</div>