
<?php
//CTG Online-216. Mahfuz Kamal
//Create a function that can bring out field results in rectangles, bogus, and circles
function area($x,$y){
    if($x != $y){
    $rectanglearea = $x * $y;
    echo "Area of rectangle = $rectanglearea<br>";
    }
    else{
    $squarearea= $x*$x;
    echo "Area of sqrare = $squarearea<br>";
   }
}
function circlearea($r){
    $circlearea = 3.14 * ($r*$r);
    echo "Area of a circle= $circlearea";

}
$x=9;
$y=9;
$r=4;
area($x,$y);
circlearea($r);

?>