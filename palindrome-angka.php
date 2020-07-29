<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  $huruf = $angka.tostring();
  $p = strlen($huruf);
  $kata="";
  for($i=0; $i< $p; $i++){
      kata=$kata . $tulisan[$p-$i-1];
  }
  $hasil="";
  if ($kata==$tulisan){
      $hasil="TRUE" ;
  }else{
      $hasil="FALSE" ;
  }
  
  echo $huruf . "<br>";
}

// TEST CASES
echo palindrome_angka(8) // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
