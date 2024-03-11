<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // lees messages.json uit
    $jsonData = file_get_contents("messages.json");

    // we moeten de json data decoden | omzetten naar een associative array
    // dit omdat de we objecten in deze array willen uitlezen of manipuleren
    // tweede argument is true want we willen het als een associative array terug
    $data = json_decode($jsonData, true);

    
    $firstname = $_POST['username'];
    $message = $_POST['message'];
    
    // hier voegen wij een nieuw element toe aan de array
    $data[] = array(
        [
            "username" => $firstname,
            "message" => $message,
            "timeStamp" => time()
        ]
    );

    // zet het weer terug om in json data, met pretty print want dan staat het netjes
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    // sla het op in het bestaande bestand: messages.json
    file_put_contents("messages.json", $jsonData);
}