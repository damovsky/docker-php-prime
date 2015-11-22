<?php
echo "Server: ";
echo getenv('HOSTNAME');

echo "<br /><br /><br />";

$start = microtime(true);

$primaCount =  prima($_GET['number']);

echo "<br /><br /><br />".$count;




$end = microtime(true);
$time = number_format(($end - $start), 3);

echo 'This page loaded in ', $time, ' seconds';

function prima($n){
  $count = 0;

  for($i=1;$i<=$n;$i++){  //numbers to be checked as prime

          $counter = 0; 
          for($j=1;$j<=$i;$j++){ //all divisible factors

                if($i % $j==0){ 
                      $counter++;
                }
          }

        //prime requires 2 rules ( divisible by 1 and divisible by itself)
        if($counter==2){
               print $i." is Prime <br/>";
               $count++;
        }

    }

    return $count;
} 


?>