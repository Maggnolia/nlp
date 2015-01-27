<?php
   
   echo "TEXTO: ";
   $txt = 'Este es el texto al, que, le ; voy a (contar) las "palabras".';
   $txt_nopunc = preg_replace('#[^a-zA-Z ]#', "", $txt);
   $palabras = explode(" " , $txt_nopunc);
   
   
     echo $txt;
     echo "\n\n" ;
       
     echo 'El texto sin punctuación es: "' . $txt_nopunc . '"';     
     echo "\n\n" ;
          
    
    $count = str_word_count($txt);
    $length = 0;
     foreach($palabras as $word){
      $len = strlen($word);
      $length = $length + $len;
       }
   $avg_length = $length/$count;
   
      
   echo "La longitud promedio de las palabras de este texto es: " . $avg_length . "\n" ;
   echo "Word count: " . $count . "\n";
   echo "Letter count: " . $length . "\n";
    
?>
