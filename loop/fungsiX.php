<?php

require ('Function/functions.php');

echo (" ========================== Soal 1 ======================================= "."\n");

    function fungsiX($x) {
        $number = 1;
        for($i = 0; $i < 1; ++$i) {
            for($j = 0; $j < $x ; $j++) {
                if($i == 0){
                    echo $number." ";
                    $number+=2;
                }
                else {
                    $number-=2;
                    echo $number." ";
                }
            }
            echo "\n";
        }
    }

    fungsiX(7);
    fungsiX(11);




// $r=1;
// for ($a=0; $a<7; $a++){
//     for ($b=0; $b<7; $b++){
//         if ($a == 0){ // Baris (1,2,3,4,5)
//             echo $r. "   ";
//            $r+=2; 
//         }  
//         else if  ( $a == 1 ){ //Baris (13,12,11,10)
//             $r -=2;
//             echo $r . "   "; 
//         }  
//     }
//     echo "\n";
// }

// for ($a=0; $a<11; $a++){
//     for ($b=0; $b<11; $b++){
//         if ($a == 0){ // Baris (1,2,3,4,5)
//             echo $r. "   ";
//            $r+=2; 
//         }  
//         else if  ( $a == 1 ){ //Baris (13,12,11,10)
//             $r -=2;
//             echo $r . "   "; 
//         }  
//     }
//     echo "\n";
// }

