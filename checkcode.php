<?php
   header("content-type:text/html;charset=utf-8"); 
   header("content-type:image/jpeg");
   $image = imagecreate(100,30);
   
   $bgcoloer = imagecolorallocate($image,255,255,255);
   $fontcolor = imagecolorallocate($image,247,10,15); 
   $font = "segoescb.ttf";
   $rand = '';               
   for($a = 0;$a<4;$a++){
	   $rand .=dechex(rand(0,15));   
   }
   $string = $rand;
   session_start();
   $_SESSION['string']=$string;
   
   imagettftext($image,20,0,20,25,$fontcolor,$font,$string);
   imagejpeg($image);
   imagedestroy($image);
?>