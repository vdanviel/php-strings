<?php

require_once("Strings.php");

$strings = new letters();

$strings->setphrase("php still on the meta");
$p = $strings->getphrase();
$case_p = $strings->transformcase($p, "tittle");//upper, lower or tittle
$arraytostring = $strings->tostring($strings->toarray($case_p));

var_dump($p);
echo "<br>";
var_dump($case_p);
echo "<br>";
print_r($strings->toarray($case_p));
echo "<br>";
echo "(Array to string version) ";
var_dump($arraytostring);
echo "<br>";

?>