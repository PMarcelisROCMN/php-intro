<?php
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// IF / ELSE statements

// the name of the user
$name = "Peter";

// the age of the user
$age = 17;

// whether the user in an adult or not
$isAnAdult = false;

// first example
if($age >= 18){
    $isAnAdult = true;
    print "$name is $age years old.<br>Is he an adult?<br>Yes, $name is an adult.<br> <br>";
} else {
    $isAnAdult = false;
    print "$name is $age years old.<br>Is he an adult?<br>No, $name is not an adult<br> <br>";
}

// in some cases, there's an easier way to check
$isAnAdult = $age >= 18;
// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// // Ternary operator | is something true ? if true : if not true

// print "$name is $age years old. Is he an adult? " . ($age >= 18 ? "yes he is" : 'no he\'s not') . "<br> <br>";
// // OR
// print "$name is $age years old. Is he an adult? " . ($isAnAdult >= 18 ? "yes he is" : 'no he\'s not') . "<br> <br>";
// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// //------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// // (DO) WHILE LOOPS

// $tickets = 3;

// while($tickets > 0){
//     print ('Going on a ride! <br>');
//     $tickets -= 1;
//     print ("You now have $tickets left <br> <br>");
// }




// $money = 100;

// do{
//     echo ('Buying a house <br>');
//     $money -= 200;
// } while($money > 0);
// echo ("You have $money left, you are now in debt. <br><br><br>");



////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// SWITCH cases

// Set the name and rank variables
// $name = "Pete";
// $rank = "sadsadjsafsajk";

// // Start the switch statement based on rank
// switch ($rank) {
//     case "captain":
//         print "Captain $name reporting!";
//         break;
//     case "admiral":
//         echo "Admiral $name at your service.";
//         break;
//     case "commander":
//         echo "Commander $name ready for duty.";
//         break;
//     case "lieutenant":
//         echo "Lieutenant $name standing by.";
//         break;
//     case "ensign":
//         echo "Ensign $name awaiting orders.";
//         break;
//     case "teacher":
//         echo "Teacher $name, teaching PHP one day at a time.";
//         // voert de code uit in deze case
//         break;
//     default: // default behaviour if something is not in the switch case
//         echo "Hello, $name. You do not appear to have rank yet!";
// }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>