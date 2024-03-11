<?php

$name = "Peter";
$rank = "";

switch ($rank) {
    case "captain":
        echo"Captain $name reporting!";
        break;
    case "admiral":
        echo "Admiral $name at your service.";
        break;
    case "teacher":
        echo "Teacher $name, teaching PHP one day at a time.";
        break;
    default: // default behaviour if something is not in the switch case
        echo "Hello, $name. You do not appear to have rank yet!";
}
