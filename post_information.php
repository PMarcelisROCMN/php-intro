<?php

// is the request of type POST?
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // retrieve json data
    $jsonData = file_get_contents('jsondata.json');

    // decode to associative array
    $data = json_decode($jsonData, true);

    // data from the form
    $name = $_POST['name'];
    $message = $_POST['message'];
    // UNIX timestamp of current time
    $dateTime = time();

    // add new element to the array
    $data[] = 
        [
            "name" => $name,
            "message" => $message,
            "timeStamp" => $dateTime
        ];

    // encode assoc array to JSON.
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // save file
    file_put_contents('jsondata.json', $jsonData);

    // echo new contents of file.
    echo '<pre>' . $jsonData . '</pre>';
}