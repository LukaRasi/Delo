<?php
function primerjaj($niz1, $niz2) {
    function razsiri($niz) {
        $rezultat = []; 
        $i = 0; 
        $dolzina = strlen($niz);

        while ($i < $dolzina) {
            if (ctype_digit($niz[$i])) {
                $stevilo = 0;

                while ($i < $dolzina && ctype_digit($niz[$i])) {
                    $stevilo = $stevilo * 10 + intval($niz[$i]);
                    $i++; 
                }

                for ($j = 0; $j < $stevilo; $j++) {
                    $rezultat[] = '?';
                }
            } 
            else {
                $rezultat[] = $niz[$i];
                $i++; 
        }
      }

        return $rezultat; 
    }

    $a = razsiri($niz1);
    $b = razsiri($niz2);

    if (count($a) != count($b)) {
        return false;
    }

    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] !== '?' && $b[$i] !== '?' && $a[$i] !== $b[$i]) {
            return false;
        }
    }

    return true;
}

var_dump(primerjaj("A2Le", "2pL1")); 
var_dump(primerjaj("M2a", "Ku2"));   
var_dump(primerjaj("H1llo", "He2o")); 
?>
