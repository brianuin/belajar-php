<?php
function tukar_besar_kecil($string){
//kode di sini
    $word = str_split($string);
    $result = "";
    foreach ($word as $key_word => $value_word) {
        if($value_word != ""){
            if(ctype_lower($value_word)){
                $result .= strtoupper($value_word); 
            }else{
                $result .= strtolower($value_word);
            }
        }else{
            $result .= " ";
        }
    }

    return $result."<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>