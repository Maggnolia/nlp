<?php

$txt = " ";
$txt_nopunc = preg_replace('#[^a-zA-Z ]#', "", $txt);
strtolower($txt_nopunc);
$words = explode(" " , $txt_nopunc);
$wordfreq = array();

foreach($words as $i)
   { 
      if (array_key_exists ($i , $wordfreq) == FALSE)
         { 
            $wordfreq["$i"] = 1;
         }
      else
         {
            $wordfreq["$i"]++;
         }
   }
   
arsort($wordfreq);
$m = 0;
foreach($wordfreq as $key=>$val)
   {
      echo "$key = $val\n";
      $m++;
      if($m>9)
      {
         break;
      }
   }


?>
