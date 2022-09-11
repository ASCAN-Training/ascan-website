<head>
    <?php
    if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
        require_once(__DIR__ . '/../vendor/autoload.php');
    }
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
    ?>
    <meta charset="UTF-8">
    <title>ASCAN Training</title>
    <meta name="description" content="What better reward for completing this journey than your very first NFT? This free token will represent your very first steps towards contribution.">

    <base src="/">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <!-- TODO color -->
    <meta name="theme-color" content="#000000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="format-detection" content="telephone=no">
    <meta name="HandheldFriendly" content="true">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!--Open graph things-->
    <meta property="og:locale" content="en_UK"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="ASCAN Training"/>
    <meta property="og:description"
          content="What better reward for completing this journey than your very first NFT? This free token will represent your very first steps towards contribution."/>
    <meta property="og:url" content="https://ascantraining.com/"/>
    <meta property="og:site_name" content="ASCAN Training"/>
    <meta property="og:image" content="<?php echo $_ENV['DOMAIN_URL']; ?>image/og-image.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta name="twitter:card" content="summary_large_image"/>

    <!-- Custom Browsers Color Start -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/app.css">

    <!--Third party CSS > START-->
    <link rel="stylesheet" type="text/css"
          href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css"/>
    <!--Third party CSS > END -->

    <!-- from back end -->
    <script type="text/javascript">
        window.site = {
            language: 'ua',
            isExplorer: false,
            isSafari: false,
            link: 'current-link'
        }
    </script>

</head>