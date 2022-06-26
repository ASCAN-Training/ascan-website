<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $api_key = '084ed717dae7c267623d645335105ba2-us20';
    $merge_vars = array(
        'FNAME' => isset($_POST['fname']) ? $_POST['fname'] : '',
        'LNAME' => isset($_POST['lname']) ? $_POST['lname'] : '',
        "MESSAGE" => isset($_POST['message']) ? $_POST['message'] : '',
        "SUBJECT" => isset($_POST['subject']) ? $_POST['subject'] : '',
        "ADDDET" => isset($_POST['adddet']) ? $_POST['adddet'] : '',
    );
    $tag = $_POST['tag'] ?? '';
    require_once 'vendor/autoload.php';

    $client = new MailchimpMarketing\ApiClient();
    $client->setConfig([
        'apiKey' => '6c1cea6b59664eb51f04f299fc557b26-us10',
        'server' => 'us10',
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