<?php
//CTG Online-216. Mahfuz Kamal
//Create a function where your weight and height will remove your body mass index

function bodymass($weight, $height){
            $BMI = $weight/($height*$height);
            return "Your Body mass index is {$BMI}";
}

$weight =80;
$height =1.7;

echo bodymass($weight, $height);

?>