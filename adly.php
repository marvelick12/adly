<?php
require_once 'vendor/autoload.php';
use Adly\Adly;
$adly = new Adly('your_api_key', 'your_api_secret');
try {
    $response = $adly->sendMessage('recipient_id', 'Hello, this is a test message!');
    print_r($response);
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
<div class=".
.
"></div>