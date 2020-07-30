<?php
function tentukan_deret_geometri($arr) {
// kode di sini
$angka_array = $arr;
    foreach ($angka_array as $key => $value) {
        if($key+2 <= count($angka_array)-1){
            if($angka_array[$key+1] % $angka_array[$key] == 0 && $angka_array[$key+2] % $angka_array[$key+1] == 0){
                $hasil = 'true<br>';
            }else{
                $hasil = 'false<br>';
            }
        }
    }
    return $hasil;
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
?>