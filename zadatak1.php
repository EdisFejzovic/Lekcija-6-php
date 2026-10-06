<?php

$file = fopen("proizvodi.txt", "w");

fwrite($file, "Laptop - 1200KM\n");
fwrite($file, "Phone - 800KM\n");
fwrite($file, "Monitor - 450KM\n");
fwrite($file, "Keyboard - 100KM\n");

fclose($file);

$file = fopen("proizvodi.txt", "r");

while (!feof($file)) {
    $red = fgets($file);

    if ($red !== false) {
        echo $red . "<br>";
    }
}

fclose($file);

?>