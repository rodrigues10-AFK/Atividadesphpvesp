<?php

$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$numero3 = $_POST["numero3"];

$media = ($numero1 + $numero2 + $numero3) / 3;

echo "Primeiro número: " . $numero1 . "<br>";
echo "Segundo número: " . $numero2 . "<br>";
echo "Terceiro número: " . $numero3 . "<br>";
echo "A média é: " . $media;

?>