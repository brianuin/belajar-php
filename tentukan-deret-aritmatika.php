<?php
function tentukan_deret_aritmatika($arr) {
// kode di sini
    $angka_array = $arr;
    foreach ($angka_array as $key => $value) {
        if($key+2 <= count($angka_array)-1){
            if($angka_array[$key+1] - $angka_array[$key] == $angka_array[$key+2] - $angka_array[$key+1]){
                $hasil = 'true<br>';
            }else{
                $hasil = 'false<br>';
            }
        }
    }
    return $hasil;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>