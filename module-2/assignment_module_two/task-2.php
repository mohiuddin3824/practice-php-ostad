<?php  
 
 echo "Task 2: Skip Multiples of 5 \n"; 
 for ($i =1; $i<=50; $i++) {  
      
      if ($i % 5 == 0) {
         continue;
      }
      echo $i . "\n";  
        
 }  
?>  