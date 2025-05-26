<?php
function primerjaj($niz1, $niz2) {
  // pozicija v nizu
  $a = 0; 
  $b = 0;
  // dolzina niza
  $dolzina1 = strlen($niz1);
  $dolzina2 = strlen($niz2);
  // pozicija v razirjenem nizu
  $pos1 = 0;
  $pos2 = 0;

  while ($a < $dolzina1 || $b < $dolzina2) {
    
    
    if ($a < $dolzina1 && ctype_digit($niz1[$a])) {
      $stevilo = 0;
      while ($a < $dolzina1 && ctype_digit($niz1[$a])) {
        $stevilo = $stevilo * 10 + intval($niz1[$a]);
        $a++;
      }
      $pos1 += $stevilo;
      $znak1 =null; 
    } else if ($a < $dolzina1) {
        $znak1 = $niz1[$a];
        $a++;
        $pos1++;
    } else {
      $znak1 = null;
    }

    // naslednji znak/st iz 2. niza
    if ($b < $dolzina2 && ctype_digit($niz2[$b])) {
      $stevilo = 0;
      while ($b < $dolzina2 && ctype_digit($niz2[$b])) {
        $stevilo = $stevilo * 10 + intval($niz2[$b]);
        $b++;
      }
      $pos2 += $stevilo;
      $znak2 = null;
    } elseif ($b < $dolzina2) {
      $znak2 = $niz2[$b];
      $b++;
      $pos2++;
    } else {
      $znak2 = null;
    }
    // Primerja ce sta definirana
    if (isset($znak1) && isset($znak2)) {
      if ($pos1 !== $pos2) {
        continue;
      }
      if ($znak1 !== '?' && $znak2 !== '?' && $znak1 !== $znak2)
 {
        return false;
      }
    } 
  }

  return $pos1 === $pos2;

}

    
var_dump(primerjaj("A999999", "999999A"));         // true
var_dump(primerjaj("A9999999", "9999999A"));       // true
var_dump(primerjaj("A99999999", "99999999A"));     // true
var_dump(primerjaj("A999999999", "999999999A"));   // true
var_dump(primerjaj("A999999999", "999999998A"));   // false
var_dump(primerjaj("M2a", "Ku2"));   // false
var_dump(primerjaj("H1llo", "He2o")); // true

?>