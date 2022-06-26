<div class="footer-subscribe">
    <h3 class="footer-subscribe__title section-title section-title--no-center section-title--left title-animation">
        <?php
        $value = 'Subscribe';
        $class = 'attention--left';
        include(__DIR__ . '/../includes/attention.php')
        ?>
        and be the first who knows about
        <?php
        $value = 'our updates!';
        include(__DIR__ . '/../includes/draw-underline.php')
        ?>
    </h3>
    <div class="footer-subscribe__main">
        <div class="subscribe-success">
            <h5>Congratulations!</h5>
            <p>You have successfully subscribed for PRIVE Societe updates</p>
            <div class="subscribe-progress" >
                <div class="counter" data-target="100">
                    <span class="value">0</span>%
                </div>
                <?php include(__DIR__ . '/../svg/load.php') ?>
            </div>
        </div>
        <div class="subscribe-initial">
            <p>
                Sign up to our newsletter and receive our new research, portfolio news and content direct to your inbox.
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