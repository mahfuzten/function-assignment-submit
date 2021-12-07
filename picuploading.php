<?php

// Function Assignment. Mahfuz Kamal.
//Create an image uploading function where you can manage the picture with the name, height, and width

function imageupload($src, $w='auto', $h='auto'){
              echo "<img style=\"width:{$w}; hight:{$h}\"; src=\"{$src}\" alt=\"\">";                

}

imageupload("land.jpg", "600px", "600px");

?>