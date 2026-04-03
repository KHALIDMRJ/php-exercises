<!------------------------------ Exercice 4 ------------------------------>

<?php
//------------------------------ Algorithme ------------------------------>
/*
Algorithme Fibonacci_100

Variables :
    entier i
    entier F_precedent, F_courant, F_suivant

Début

    F_precedent ← 0
    F_courant ← 1

    Afficher "F0 = ", F_precedent
    Afficher "F1 = ", F_courant

    Pour i allant de 2 à 99 faire

        F_suivant ← F_precedent + F_courant

        Afficher "F", i, " = ", F_suivant

        F_precedent ← F_courant
        F_courant ← F_suivant

    Fin Pour

Fin
*/
//------------------------------ programme PHP ------------------------------>
//------------------------------ metrhode 1 :  ------------------------------>

$f0 = 0;
$f1 = 1;

echo "F0 = $f0 <br>";
echo "F1 = $f1 <br>";

for ($i = 2; $i < 100; $i++) {

  $fn = $f0 + $f1;

  echo "F$i = $fn <br>";


  $f0 = $f1;
  $f1 = $fn;
}

// ------------------------------ méthode récursive------------------------->

// function fibonacci($n)
// {
//     if ($n == 0) {
//         return 0;
//     } elseif ($n == 1) {
//         return 1;
//     } else {
//         return fibonacci($n - 1) + fibonacci($n - 2);
//     }
// }
// for ($i = 0; $i < 100; $i++) {
//     echo "F$i = " . fibonacci($i) . "<br>";
// }

?>