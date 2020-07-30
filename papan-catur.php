<?php

function papan_catur($angka) {
// tulis kode di sini
    for ($a=0; $a < $angka ; $a++) { 
            for ($b=0; $b < $angka * 2 ; $b++) {
                if($a % 2 == 0){
                    if($b % 2 == 0){
                        echo "#";
                    }else{
                        echo "&nbsp;&nbsp;";
                    }
                }else{
                    if($b < ($angka * 2)-1){
                        if($b % 2 != 0){
                            echo "#";
                        }else{
                            echo "&nbsp;&nbsp;";
                        }
                    }
                }
            }
        echo "<br>";
    }
}

// TEST CASES
echo papan_catur(4) ;
/*
# # # #
 # # #
# # # #
 # # #
 */

// echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/