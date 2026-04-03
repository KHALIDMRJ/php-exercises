<!------------------------------ Exercice 3 ------------------------------>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice 3</title>
</head>

<body>
  <form action="" method="POST">
    <br><br><br>
    <label for="entier"> Veuillez saisir un entier : </label>
    <input type="number" name="entier" min="0" required> <br>
    <label for="hauteur"> Veuillez saisir l'hauteur : </label>
    <input type="number" name="hauteur" min="1" required> <br>
    <input type="submit" name="valider2" required><br>
  </form>
</body>

</html>
<?php
if (isset($_POST["valider2"])) {

  // qst 1 : la table de multiplication

  $entier = $_POST["entier"];
  echo "La table de multiplication du nombre $entier est : <br>";
  for ($i = 1; $i <= 10; $i++) {
    echo "$entier x $i = " . $entier * $i . "<br>";
  }

  echo "<br> affichage du pattern traingulaire : <br><br> ";
  $hauteur = $_POST["hauteur"];

  for ($i = 1; $i <= $hauteur; $i++) {

    for ($j = 1; $j <= $hauteur - $i; $j++) {
      echo "&nbsp;&nbsp;";
    }

    for ($k = 1; $k <= 2 * $i - 1; $k++) {
      echo "*";
    }

    echo "<br>";
  }

  // qst 3 :
  echo "<br> affichage du pattern carré : <br><br> ";
  for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $hauteur; $j++) {
      echo "*";
    }
    echo "<br>";
  }

  // qst 4 

  echo "Affichage des nombres pairs  entre 1 et $entier :<br>";
  for ($i = 1; $i <= $entier; $i++) {
    if ($i % 2 == 0) {
      echo " $i ";
    }
  }
  echo "<br>";
  //qst 5
  echo "Affichage de la somme des entiers de 1 jusqu'au $entier :";
  // method 1 :
  $somme_entier = 0;
  for ($i = 1; $i <= $entier; $i++) {
    $somme_entier = $somme_entier + $i;
  }
  echo "$somme_entier";
  // method 2 :
  echo "<br> Méthode mathématique :";

  $somme_entier = ($entier * ($entier + 1)) / 2;
  echo "$somme_entier <br>";

  // qst 6
  echo "le nombre $entier est : ";
  if ($entier % 2 == 0) {
    echo "pair";
  } else {
    echo "impair";
  }

}

?>