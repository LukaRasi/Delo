<?php 

 
function razsiri($niz) {
  $rezultat = [];  //znaki
  $i = 0;  //trenutni index v nizu
  $dolzina = strlen($niz); //skupna dolzina

  while ($i < $dolzina) {
    //ce je znak st.
    if (ctype_digit($niz[$i])) {
        $stevilo = 0;
        // ce je stevilk skupaj npr 10
        while ($i < $dolzina && ctype_digit($niz[$i])) {
          $stevilo = $stevilo * 10 + intval($niz[$i]);
          $i++;
        }
    
        // Dodaj toliko ? kolikor je st.
        for ($j = 0; $j < $stevilo; $j++) {
          $rezultat[] = '?';
        }
      }
    else
      {
        // ce je crka dodamo v rezultat
        $rezultat[] = $niz[$i];
        $i++;
      }
  }

    return $rezultat;
}
  

// primerja 2 niza
function primerjaj($niz1, $niz2) {
  $a = razsiri($niz1);
  $b = razsiri($niz2);

   if (count($a) !== count($b)) {
    return false;
  }
// primerja vsak znak posebej
  for ($i = 0; $i < count($a); $i++) {
    if ($a[$i] !== '?' && $b[$i] !== '?' && $a[$i] !== $b[$i]) {
      return false;
      }
    }
// ce ni razlike sta lahko isti besedi
  return true;
 }



