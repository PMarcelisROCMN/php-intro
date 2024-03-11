<?php

$jsonData = file_get_contents('jsondata.json');

$data = json_decode($jsonData, true);

$htmlString = '';

$message = $data[0];

    $htmlString .= '<div class="test">';
    $htmlString .= '<div> ' . $message['name'] . '</div>';
    $htmlString .= '<br>';
    $htmlString .= '<div> ' . $message['message'] . '</div>';
    $htmlString .= '<br>';
    $htmlString .= '<div> ' . $message['timeStamp'] . '</div>';
    $htmlString .= "</div>";
    $htmlString .= '<br>';