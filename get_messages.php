<?php
// read jsondata.json file.
$jsonData = file_get_contents('jsondata.json');

// decode json data to an associative array
// json -> assoc array
$data = json_decode($jsonData, true);

// empty string we will fill with content (with html tags)
$htmlString = '';

// for each message in the associative array
foreach($data as $message)
{ 
    // wrap everything in this 'test' class div
    $htmlString .= '<div class="test">';

    // retrieve a value from a message by using the key
    $htmlString .= '<div> ' . $message['name'] . '</div>';
    $htmlString .= '<br>';
    $htmlString .= '<div> ' . $message['message'] . '</div>';
    $htmlString .= '<br>';

    // convert UNIX timestamp to valid date
    // 'h:i:s' means hours, minutes, seconds
    // 'd:m:Y' means days, months, years
    // Y instead of y because we want the entire year
    // y -> 24  | Y -> 2024
    $dateTime = date("h:i:s - d:m:Y", $message['timeStamp']);
    $htmlString .= '<div> ' . $dateTime . '</div>';
    $htmlString .= "</div>";
    $htmlString .= '<br>';
}