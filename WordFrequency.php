$txt = " ";
$txt_nopunc = preg_replace('#[^a-zA-Z ]#', "", $txt);
$words = explode(" " , $txt_nopunc);
$wordfreq = array();

foreach($words as $i)
   { 
      $duplicate_found = 0;
      foreach($wordfreq as $j)
         { if($i===$j) 
              {
                 
