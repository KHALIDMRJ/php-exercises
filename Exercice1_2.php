<!------------------------------ Exercice 1 ------------------------------>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercice</title>
</head>

<body>
  <form action="" method="POST">
    <label for="nom">Nom :</label><br>
    <input type="text" name="nom" required><br>
    <label for="nom">Prenom :</label><br>
    <input type="text" name="prenom" required><br>
    <label for="nom">Age :</label><br>
    <input type="number" name="Age" min="0" required><br>
    <label for="nom">Note 1 :</label><br>
    <input type="number" name="Note1" min="0" max="20" required><br>
    <label for="nom">Note 2 :</label><br>
    <input type="number" name="Note2" min="0" max="20" required><br>
    <label for="nom">Note 3 :</label><br>
    <input type="number" name="Note3" min="0" max="20" required><br><br>
    <input type="submit" name="valider1" required><br>

  </form>


</body>

</html>
<?php
if (isset($_POST["valider1"])) {

  // qst 1 :
  define("Etablissement", "FPK");
  // qst 2 :
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $age = $_POST["Age"];
  $note1 = $_POST["Note1"];
  $note2 = $_POST["Note2"];
  $note3 = $_POST["Note3"];
  // qst 3 :
  $somme = $note1 + $note2 + $note3;
  $moyenne = $somme / 3;
  // qst 4 : affichage 
  echo "le nom de l'etudiant est : " . $nom . " " . $prenom . " , son age est : " . $age . " il suivre ses études dans L'etablissement " . Etablissement . " ses notes est : " . "<br>" . "Note 1 : " . $note1 . "<br>" . "Note 2 : " . $note2 . "<br>" . "Note 3 : " . $note3 . "<br>";
  echo "La somme des note de " . $nom . " est " . $somme . ", sa moyenne est : " . $moyenne . ".<br>";

  //qst 5: Mention

  if ($moyenne >= 16) {
    $mention = "Exellente";
  } elseif ($moyenne >= 14) {
    $mention = "Bien";
  } elseif ($moyenne >= 12) {
    $mention = "Assez bien";
  } elseif ($moyenne >= 10) {
    $mention = "Passable";
  } else {
    $mention = "Echec";
  }

  // qst 6 : 
// majeur ou mineur :

  if ($age >= 18) {
    echo "majeur";
  } else {
    echo "mineur";
  }
  echo "<br>";

  // Admis ou Non admis

  if ($moyenne >= 10) {
    echo "Admis";
  } else {
    echo "Non admis";
  }
  echo "<br>";

  // <!------------------------------ Exercice 2 ------------------------------>

  // qst 1
  switch ($mention) {
    case "Exellente":
      echo "Félicitations";
      break;
    case "Bien":
      echo "Bon travail";
      break;
    case "Assez bien":
      echo "Efforts satifaisants";
      break;
    case "Passable":
      echo "Peux mieux faire";
      break;
    case "Echec":
      echo "Doit redoubler d'effort";
      break;
    default:
      echo "Mention inconnu";
  }
  echo "<br>";

  // qst 2 : afficher les notes 

  $notes = [$note1, $note2, $note3];
  // Boucle for 
  echo "Boucle with for : " . "<br>";
  for ($i = 0; $i < count($notes); $i++) {
    echo "Note_" . ($i + 1) . " : " . $notes[$i] . "<br>";
  }
  // boucle while
  echo "Boucle with while : " . "<br>";
  $i = 0;
  while ($i < count($notes)) {
    echo "Note_" . $i + 1 . " : " . $notes[$i] . "<br>";
    $i++;
  }
  // boucle foreach
  echo "Boucle with foreach : " . "<br>";
  $i = 0;
  foreach ($notes as $note) {
    echo "Note_" . ($i + 1) . " : " . $note . "<br>";
    $i++;
  }

  // boucle for for printing all positive naturel number under the age 
  $i = 0;
  while ($i <= $age) {
    echo " " . $i . " ,";
    $i++;
  }
  echo "<br>";
  // qst 3 : 
// tableau de matières :
  $matieres = ["PHP", "HTML", "CSS"];
  // affichages des matières avec les notes 
  foreach ($matieres as $i => $matiere) {
    echo "La note du matière $matiere est : " . $notes[$i] . "<br>";
  }

  echo "<br><br>";

}
?>
