<?php

// is er een POST request gedaan.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // haal bestaande berichten op
    $jsonData = file_get_contents('jsondata.json');

    $data = json_decode($jsonData, true);

    // var_dump($data);


    $name = $_POST['name'];
    $message = $_POST['message'];
    $dateTime = time(); // datetime is nu gelijk aan de huidige unix timestamp

    $data[] = 
        [
            "name" => $name,
            "message" => $message,
            "timeStamp" => $dateTime
        ];

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    file_put_contents('jsondata.json', $jsonData);



    echo '<pre>' . $jsonData . '</pre>';
}