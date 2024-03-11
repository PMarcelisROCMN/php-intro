<?php

echo "stuk tekst \n\n sajdhsdhsajdhsa";

echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";


// classic array
$een_array = ["waarde1", "waarde2", "waarde3"];

foreach ($een_array as $value) {
 echo $value ."<br>";
}

echo "<br>";
echo"------------------------------------------------------------------------------";
echo "<br>";

// associative arrays, een array warbij je een key en een value hebt
// de kracht hiervan is dat je de waarde met de key kan opzoeken. Dit is handig als je met
// complexe objecten werkt
$car = array(
    [
    "naam"=>"Ramiz", 
    "bericht"=>"Mustang"
    ],

    [
    "naam"=>"Ramiz", 
    "bericht"=>"Mustang"
    ]


);


function iets($naam, $bericht){
 echo 'iets';
}

// standaard dump functie
var_dump($car);

echo "<br>";
echo"------------------------------------------------------------------------------";
echo "<br>";

// standaard print functie
print_r($car);

// JSON is een datatype dat een hoop informatie kan vasthouden.
// het kan enorm handig zijn voor de opdracht 'Gastenboek'.
// Pretty print zorgt ervoor dat de JSON data er goed uit ziet
$json_pretty = json_encode($car, JSON_PRETTY_PRINT); 

// deze data kun je printen of opslaan in een file.
echo "<pre>" . $json_pretty . "<pre/>"; 

// Om de JSON data te kunnen gebruiken moet je het 'decoden'
// associative array is returned -> Dit maakt uit voor hoe je bij de properties 'brand'
// 'model' of 'year' kan komen.
$data = json_decode($json_pretty, true);

// $carInfo['propertyNaam'] geeft de value bij de key terug
// het eerste element:
// ["brand"=>"Ford", "model"=>"Mustang", "year"=>1964],
// de eerste keer zullen we dus "Ford" terugkrijgen uit $carInfo['brand']
foreach( $data as $key => $carInfo ) {
    echo "Brand: " . $carInfo['brand'] . "\n";
    echo "Model: " . $carInfo['model'] . "\n";
    echo "Year: " . $carInfo['year'] . "\n";
    echo "\n";
}

// willekeurige breaklines
echo"<br>";
echo"------------------------------------------------------------------------------";
echo"<br>";

// $data zal nu een array vol met objects zijn.
// het verschil is dan hoe je bij de properties komt
// properties zoals 'brand', 'model' 
$data = json_decode($json_pretty);

// $carInfo=>propertyNaam geeft de value bij de key terug
// het eerste element:
// ["brand"=>"Ford", "model"=>"Mustang", "year"=>1964],
// de eerste keer zullen we dus "Ford" terugkrijgen uit $carInfo->brand
// het lastige hierbij is dat je niet weet welke properties erbij zitten (of dat ligt aan VSCode)
foreach( $data as $key => $carInfo ) {
    echo "Brand: " . $carInfo->brand . "\n";
    echo "Model: " . $carInfo->model . "\n";
    echo "Year: " . $carInfo->year . "\n";
    echo "\n";
}

echo"<br>";
echo"------------------------------------------------------------------------------";
echo"<br>";

Class Car {
    public $brand;
    public $model;
    public $year;

    // een constructor is iets wat je kunt toevoegen aan een class om gegevens te zetten
    // of instructies uit te voeren wanneer een nieuwe instantie van een class wordt aangemaakt.
    public function __construct($brand, $model, $year) {
        //$this->brand verwijst naar public $brand;

        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    // Custom constructor method to create Car objects from JSON data
    // kan ook een foreach loop doen buiten de class om steeds een nieuwe instantie van de class aan te maken
    // maar static method kan ook
    public static function createFromJson($json) {
        // lege array
        $cars = [];

        // array van JSON data as Objects
        $data = json_decode($json);

        // maakt een nieuwe instantie van de car class aan per auto in de JSON data.
        foreach ($data as $carInfo) {
            $cars[] = new Car($carInfo->brand, $carInfo->model, $carInfo->year);
        }

        // je zou ook zelf een nieuwe instantie van een Car kunnen maken
        $cars[] = $nieuwe_auto = new Car("Naam van de auto", "Het model van de auto", "Jaar van de auto");

        return $cars;
    }
}

// nu kunnen we een array maken met instanties van de Car class.
$cars = Car::createFromJson($json_pretty);

foreach( $cars as $car ) {
    echo "Brand: ". $car->brand . "\n";
    echo "Model: ". $car->model . "\n";
    echo "Year: ". $car->year . "\n";
    echo "\n";
}

?>