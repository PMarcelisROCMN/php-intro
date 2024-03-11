<?php
    // Een voorbeeld van een functie
    function echo_tekst($tekst){
        echo $tekst . "<br>";
    }

    echo_tekst("PHP");
    echo_tekst("is");
    echo_tekst("gewoon");
    echo_tekst("vet");
    echo_tekst("leuk");

    echo "<br>";
    echo "<br>";
    
    function check_if_even_value($value) {
        echo "De waarde $value is " . ($value % 2 == 0 ? "een even getal" : "een oneven getal") . "<br>";
    }
    
    check_if_even_value(5);
    check_if_even_value(6);
    check_if_even_value(11);
    check_if_even_value(12);
    
    echo "<br>";
    echo "<br>";

    function echo_multiple_variables($name, $age, $favoriteFood){
        echo "Mijn naam is $name, mijn leeftijd is $age, en ik hou van $favoriteFood <br>";
    }

    echo_multiple_variables("Peter", 28, "Pizza");
    echo_multiple_variables("Rick", 28, "Karton");
    echo_multiple_variables("Mark", 45, "Soep");
    echo_multiple_variables("Michiel", 50, "Kaas");