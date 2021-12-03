<?php

//CTG Online-216. Mahfuz Kamal
//Create a function to extract grades and GPAs

function gradesystem($score){

           if($score>=80 && $score<=100){
               return "Your grade is A+ and GPA is 5.0";
           }
           elseif($score>=70 && $score<=79){
            return "Your grade is A and GPA is 4.0";
        }
        elseif($score>=60 && $score<=69){
            return "Your grade is A- and GPA is 3.5";
        }
        elseif($score>=50 && $score<=59){
            return "Your grade is B and GPA is 3.0";
        }
        elseif($score>=40 && $score<=49){
            return "Your grade is B- and GPA is 2.0";
        }
        else{
            return "Fail";
        }
}

       $score= 72;
       echo gradesystem($score);
?>