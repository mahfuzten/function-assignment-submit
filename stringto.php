<?php

// Function Assignment. Mahfuz Kamal.
//Make akong function for conventioning big hands, small hands, both hands

function stringcaseupper($str){
   return strtoupper("$str");
}
function stringcaselower($str){
   return strtolower("$str");
}

$stringto="hopeful<br>";
echo stringcaseupper($stringto);
echo stringcaselower($stringto);

?>