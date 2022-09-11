<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (file_exists(__DIR__ . '/vendor/autoload.php')) {
        require_once(__DIR__ . '/vendor/autoload.php');
    }
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    $api_key = $_ENV['MAILCHIMP_API'];
    $api_gateway = $_ENV['MAILCHIMP_GATEWAY'];
    $merge_vars = array(
        'FNAME' => isset($_POST['fname']) ? $_POST['fname'] : '',
        'LNAME' => isset($_POST['lname']) ? $_POST['lname'] : '',
        "MESSAGE" => isset($_POST['message']) ? $_POST['message'] : '',
        "SUBJECT" => isset($_POST['subject']) ? $_POST['subject'] : '',
        "ADDDET" => isset($_POST['adddet']) ? $_POST['adddet'] : '',
    );
    $tag = $_POST['tag'] ?? '';

    $client = new MailchimpMarketing\ApiClient();
    $client->setConfig([
        'apiKey' => $api_key,
        'server' => $api_gateway,
    ]);
    try {
        $response = $client->lists->addListMember("370c366bb0", [
            "email_address" => $_POST['email'],
            "status" => "subscribed",
            "merge_fields" => $merge_vars,
            "tags" => [$tag]
        ]);
        echo json_encode(array(
            'status' => true,
            'message' => 'Subscribed successful'
        ));

    } catch (\EXCEPTION $e) {
        //print_r($e->getMessage());
        echo json_encode(array(
            'status' => false,
            'message' => 'Something went wrong. Try again later.'
        ));
        http_response_code(400);

    }

} else {
    echo 'Access denied';
}

?>