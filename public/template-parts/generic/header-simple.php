<header class="header-simple header--on-top">
    <div class="container-main">
        <div class="header-inner">
            <a href="/" class="header__logo default-outline">
                <img src="/image/ascan-training-logo.svg" alt="Logo">
            </a>
            <div class="header__cta">
                <?php
                $btn_url = '/';
                $btn_target = '_blank';
                $btn_color = 'green';
                $title = '<img src="./image/icons/icon-metamask.svg" alt="Metamask" class="btn-icon"><span>MetaMask</span>';
                include(__DIR__ . '/../includes/button-key.php')
                ?>
            </div>
        </div>
    </div>
</header>