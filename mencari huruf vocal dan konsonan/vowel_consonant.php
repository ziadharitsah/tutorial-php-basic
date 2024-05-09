<?php
/*


Example
input n : Sample Case
output : Huruf vokal : aaee
Huruf konsonan : clmpss

*/

function scanf ($masukkan){
    // echo("Masukkan : ");
    echo $masukkan;
    $input = fopen("php://stdin","m1");
    $m1 = trim(fgets($input));
    return $m1;
}

function vocalCons($input, $separator)
{
    $consonant = array('b','c','d','f','g','h','j','k','l','m','n','p','q','r','s','t','v','w','x','y','z');
    $arrayVocal = array('a', 'i', 'u', 'e', 'o');
    // $consonant = str_split("bcdfghjklmnpqrstvwxyz", 2); // string to array
    $outVocal = array();
    $outConsonant = array();
    $vcCount = 0;
    $csCount = 0;

    $splitinput = str_split($input, 1); // menghpaus , diganti dengan, dri .. (intinya utk menghilangkan spasi)

    for ($i = 0; $i < count($splitinput); $i++) {
        for ($j = 0; $j < count($arrayVocal); $j++) {
            if (strtolower($splitinput[$i]) == $arrayVocal[$j]) {
                $outVocal[$vcCount] = $splitinput[$i];
                $vcCount++;
            }
        }
        for ($k = 0; $k < count($consonant); $k++) {
            if (strtolower($splitinput[$i]) == $consonant[$k]) {
                $outConsonant[$csCount] = $splitinput[$i];
                $csCount++;
            }
        }
    }
    sort($outConsonant);
    sort($outVocal);
    $impVc = implode(" ", $outVocal); // array to string (separator, nilai array)
    $impCs = implode(" ", $outConsonant);

    // $strContoh = implode(" * ", $contoh); // Dari Array Ke String
    // print($strContoh);

    echo "Huruf Vokal : " . $impVc . "\n";
    echo "Huruf Konsonan : " . $impCs."\n";

    $strexp = explode(" ", $input);

    // [0] Xsis [1] Xsis [2] Xsis

    for ($i=0; $i<$input; $i++){
        $strexp[$i] = $strexp[0];
        
    }


    $strimp = implode("$separator ",$strexp); // Dari Array Ke String
    echo "Huruf Konsonan : " . $impCs.$separator."\n";
    print($strimp);

 
   
}


$input = scanf("Masukkan Huruf : ");
$separator = scanf("Masukkan Separator : ");
vocalCons($input, $separator);


