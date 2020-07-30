<?php
function pasangan_terbesar($angka){
// kode di sini
    $angka_arr = str_split($angka);
    $temp = "";
    $result = [];
    for ($i=0; $i < count($angka_arr) ; $i++) { 
        
        if($i+2 <= count($angka_arr)-1){
            $temp1 = $angka_arr[$i].$angka_arr[$i+1];
            $temp2 = $angka_arr[$i+1].$angka_arr[$i+2];
            
            if((int)$temp1 > (int)$temp2){
                // echo $temp1."|".$temp2."| Max ".$temp1."<br>";
                $result[] = $temp1; 
            }else{
                // echo $temp1."|".$temp2."|Max ".$temp2."<br>";
                $result[] = $temp2;
            }
        }
    }
    // print_r($result);
    return max($result)."<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>