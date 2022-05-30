<?php
$path = trim(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), '/');
$path = $path . '.php';
if (!file_exists($path))
    include ('homepage.php');
else
    include ($path);
?>