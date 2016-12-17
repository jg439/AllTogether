<?php
include 'curl_class.php';
include 'csv.php';
$url = 'https://web.njit.edu/~jg439/AllTogether/index.php';
$curl = new curl($url);
$response = $curl->get();
print_r($response);
$new_response = json_decode($response, true);
print_r($new_response);
?>
