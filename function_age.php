
<?php

//CTG Online-216. Mahfuz Kamal
//Create a function that if you give an age, will an old, young, teenager, boy, child  

function age_stage($age){
    
    if($age>0 && $age<=5){
        echo "Its a Child.";
    }
    elseif ($age>5 && $age<12) {
        echo "He is boy.";
    }
    elseif ($age>12 && $age<=18) {
        echo "He is teenager.";
    }
    elseif ($age>18 && $age<40) {
        echo "He is Young.";
    }
    else{
        echo "The person is old.";
    }

}
    $age=18;
    age_stage($age);



?>