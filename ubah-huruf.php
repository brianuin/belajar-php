<?php
function ubah_huruf($string){
//kode di sini
$huruf_bener = ['a', 'b', 'c', 'd', 'e', 'f','g', 'h', 'i', 'j','k', 'l', 'm','n', 'o','p' ,'q','r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
$huruf_gabener = ['b', 'c', 'd', 'e', 'f','g', 'h', 'i', 'j','k', 'l', 'm','n', 'o','p', 'q','r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'a'];

$kata_replace = "";
        foreach (str_split($string) as $key_split => $value_split) {
            foreach ($huruf_bener as $key_huruf_bener => $value_huruf_bener) {
                if($value_split == $value_huruf_bener){
                    $kata_replace .= $huruf_gabener[$key_huruf_bener];
                }
            }
        }

    echo $kata_replace."<br>";
}


// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>