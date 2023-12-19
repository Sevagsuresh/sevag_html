<?php

$nm=2055;

$sum=0;
 $rem=0;  
  for ($i =0; $i<=strlen($nm);$i++)  
 {  
  $rem=$nm%10;  
   $sum = $sum + $rem;  
   $nm=$nm/10;  
  }  
 echo "Sum of digits 2055 is $sum";  


?>
