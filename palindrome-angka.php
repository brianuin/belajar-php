<?php

function palindrome_angka($angka) {
  // tulis kode di sini
    $angka_arr = str_split($angka);
  if(count(str_split($angka)) == 1){
      return $angka + 1 . "<br>" ;
  }else{
        $jumlahDigit = count(str_split($angka));

        if($jumlahDigit == 2){
            for($a = $angka_arr[0] ; $a <= 9; $a++){
                for ($b=$angka_arr[$jumlahDigit-1]; $b <= 9 ; $b++) { 
                    if($b == 9){
                        $angka_arr[$jumlahDigit-1] = 0;
                    }
                    
                    if($a == $b){
                        return "<br>$a$b<br>";
                    }
                }
            }
        }elseif ($jumlahDigit == 3) {
            for($a = $angka_arr[0] ; $a <= 9; $a++){
                for ($b=$angka_arr[$jumlahDigit-2]; $b <= 9 ; $b++) { 
                    if($b == 9){
                        $angka_arr[$jumlahDigit-2] = 0;
                    }

                    for ($c=$angka_arr[$jumlahDigit-1]; $c <= 9 ; $c++) { 
                        if($c == 9){
                            $angka_arr[$jumlahDigit-1] = 0;
                        }

                        if($a == $c){
                            return "<br>$a$b$c<br>";
                        }
                        
                    }   
                }
            }
        }elseif($jumlahDigit == 4){
            for($a = $angka_arr[0] ; $a <= 9; $a++){
                if($a == 9){
                    $angka_arr[0] = 0;
                }
                for ($b=$angka_arr[$jumlahDigit-3]; $b <= 9 ; $b++) { 
                    if($b == 9){
                        $angka_arr[$jumlahDigit-3] = 0;
                    }

                    for ($c=$angka_arr[$jumlahDigit-2]; $c <= 9 ; $c++) { 
                        if($c == 9){
                            $angka_arr[$jumlahDigit-2] = 0;
                        }

                        for ($d=$angka_arr[$jumlahDigit-1]; $d <= 9 ; $d++) { 
                            if($d == 9){
                                $angka_arr[$jumlahDigit-1] = 0;
                            }
    
                            if($a == $d && $b == $c){
                                return "<br>$a$b$c$d<br>";
                            }
                            
                        }   
                        
                    }   
                }
            }
        }
  }
}

// TEST CASES
echo palindrome_angka(8); // 9
 echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>