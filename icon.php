<?php  
$img = imagecreatefrompng("logo.png");  
//"icon.png" this your image png file  
if(isset($_GET['char']) && !emptyempty($_GET['char'])) {  
       $string = $_GET['char'];  
} else {  
       $string = 'V';  
}  
$bg = imagecolorallocate($img, 255, 255, 255);  
$black = imagecolorallocate($img, 0, 0, 0);  
imagechar($img, 2, 5, 1, $string, $black);  
header('Content-type: image/png');  
imagepng($img);  
?>  