<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $api_key = '084ed717dae7c267623d645335105ba2-us20';
    $merge_vars = array(
        'FNAME' => isset($_POST['name']) ? $_POST['name'] : '',
        //'LNAME' => isset($_POST['surname']) ? $_POST['surname'] : '',
        "CS_LOC" => isset($_POST['state']) ? $_POST['state'] : ''
    );
    require_once 'vendor/autoload.php';

    $client = new MailchimpMarketing\ApiClient();
    $client->setConfig([
        'apiKey' => '084ed717dae7c267623d645335105ba2-us20',
        'server' => 'us20',
    ]);
    try {
        $response = $client->lists->addListMember("06cab8a74c", [
            "email_address" => $_POST['email'],
            "status" => "subscribed",
            "merge_fields" => $merge_vars
        ]);
        echo json_encode(array(
            'status' => true,
            'message' => 'Subscribed successful'
        ));

    } catch (\EXCEPTION $e) {
        print_r($e->getMessage());
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