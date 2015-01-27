<?php
   echo "<h2>El mono infinito</h2>\n\n>";
   
   $txt = "123";
   $see_log = FALSE;
   $txt_len = strlen($txt);
   $type_vel = 150; // in char/min
   $min = 0;
   
   $char = "0123456789abcdefghijklmnopqrstuvwxyzAABCDEFGHIIJKLMNOOPQRSTUUVWXYZ., ";
   $char_len = strlen($char);
      
   $txt_mon = ".";
   $txt_match = FALSE;
   $i = 1;
   $pos = 1;
   
   while ($txt_match === FALSE) {
     
      if(strlen($txt_mon) < $txt_len){
            $i++;
            $min = $min + 1/$type_vel;    
            $txt_mon = str_pad($txt_mon , $i , $char[rand(0, $char_len - 1)]);
      } else {  
            $i++;
            $min = $min + 1/$type_vel;    
            $txt_mon = str_pad($txt_mon , $i , $char[rand(0, $char_len - 1)]);
            $txt_match = strpos($txt_mon , $txt , $pos);
            $pos++;
        }     
    }
     
    if ($see_log) {
          echo "A continuaci?n la escritura aleatoria del mono:\n\n";
          echo $txt_mon . "\n\n";
    }          
       
   
   if ($min < 60){
      $min = round($min);
      echo "El mono tard? $min minutos en escribir el texto.";
      
   } elseif (60 <= $min && $min < 60*24) {
         $hr = floor($min/60);
         $min = round($min - 60*$hr);
         echo "El mono tard? $hr horas y $min minutos en escribir el texto.";
   
   } elseif  (60*24 <= $min && $min < 60*24*365) {
         $day = floor ($min/(60*24));
         $hr = floor ($min/60 - $day*24);
         $min = round($min - $day*60*24 - $hr*60);
         echo "El mono tard? $day d?as, $hr horas y $min minutos en escribir el texto.";
     
   } else {
         $year = floor($min/(60*24*365));
         $day = floor($min/(60*24) - $year*365);
         $hr = floor($min/60 - $year*365*24 - $day*24);
         $min = $min - $year*365*24*60 - $day*24*60 - $hr*60;
         echo "El mono tard? $year a?os, $day d?as, $hr horas y $min minutos en escribir el texto.";
   }
   
   
?>
