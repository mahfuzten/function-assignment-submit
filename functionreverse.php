
<?php
// Function Assignment. Mahfuz Kamal.
//Make a function like the reverse function of PHP

function reversefun($text){

    $textlength = strlen($text);
    for($i=$textlength-1; $i>=0 ; $i--){
        echo "$text[$i]";
    } 
    }
    $text = "i am php developer";
    reversefun($text);

?>