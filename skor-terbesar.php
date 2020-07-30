<?php
function skor_terbesar($skor){
//kode di sini
  $biggest = [];
  foreach ($skor as $key_skor => $value_skor) {
      $nama_kelas = $value_skor['kelas'];
      $biggest[$nama_kelas]['kelas'][] = $value_skor['kelas'];
      $biggest[$nama_kelas]['nama'][] = $value_skor['nama'];
      $biggest[$nama_kelas]['nilai'][] = $value_skor['nilai'];
  }

  $result = [];
  foreach ($biggest as $key_biggest => $value_biggest) {
      $index = array_search(max($value_biggest['nilai']), $value_biggest['nilai']);
      $result[$key_biggest]['kelas'] = $biggest[$key_biggest]['kelas'][$index];
      $result[$key_biggest]['nama'] = $biggest[$key_biggest]['nama'][$index]; 
      $result[$key_biggest]['nilai'] = $biggest[$key_biggest]['nilai'][$index];
  }

  print_r($result);
}

// TEST CASES
$skor = [
  [
    "nama" => "Bobby",
    "kelas" => "Laravel",
    "nilai" => 78
  ],
  [
    "nama" => "Regi",
    "kelas" => "React Native",
    "nilai" => 86
  ],
  [
    "nama" => "Aghnat",
    "kelas" => "Laravel",
    "nilai" => 90
  ],
  [
    "nama" => "Indra",
    "kelas" => "React JS",
    "nilai" => 85
  ],
  [
    "nama" => "Yoga",
    "kelas" => "React Native",
    "nilai" => 77
  ],
];

skor_terbesar($skor);

  

/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>