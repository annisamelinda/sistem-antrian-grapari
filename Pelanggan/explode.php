<?php
$name = "ariaia Syariasasas";

$parts = explode(" ", $name);
$lastname = array_pop($parts);
$firstname = implode(" ", $parts);

echo "Lastname: $lastname\n"."<br>";
echo "Firstname: $firstname\n"."<br>";

echo substr($firstname, -3).substr($lastname, -3);
?>
