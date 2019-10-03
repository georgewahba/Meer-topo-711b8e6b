<?php 

print("hoeveel landen ga je toevoegen?");
$hoeveel = readline(":");

if (is_numeric($hoeveel)) { 
 } 

 else { 
print_r("is geen getal");
 exit(); }

$stad=array();


 for ($i=1; $i <=$hoeveel ; $i++) { 
 	print_r("welk land wil je toevoegen?");
 	$stad2= readline(":");
 	print_r("wat is de hoofdstad van ".$stad2. PHP_EOL);
 	$naam= readline(":");
 	$stad[$naam]= $stad2;

 }

 
foreach ($stad as $naam => $stad2) {
	print_r("de hoofdstad van ". $stad2 . " is ". $naam. PHP_EOL );
}