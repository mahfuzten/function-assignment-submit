<?php

// Function Assignment. Mahfuz Kamal.
//Create a heading function that can create dynamic heading

function dynamicheading($type, $txt, $align="center", $family="arial", $color="red", $size="50px"){

    return "<{$type} style=\"font-family:{$family}; text-align:{$align}; font-size:{$size}; color:{$color}\">$txt</{$type}>";
}

echo dynamicheading("h1", "I am a php developer", "center","arial-narrow", "red", "90px");

?>