<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    $nom = 'Doe'; //chaîne de caractère
    $prenom = 'John'; //chaîne de caractère
    $age = 19; //entier
    $adresse = '1 rue de l\'éraudière 44300 nantes'; //chaîne de caractère
    $estEtudiant = true; //Booléen

    echo nl2br('Nom : ' .$nom ."\n");
    echo nl2br('Prénom : ' .$prenom."\n");
    echo nl2br('Age : ' .$age."\n");
    echo nl2br('Adresse : ' .$adresse."\n");
    echo nl2br('Est-il étudiant ? : ' .$estEtudiant."\n");
    echo nl2br("\n");
    //Opération mathématiques
    echo nl2br('--- Opérations mathématiques ---'."\n");

    $a=5;
    $b=10;
    $c=15;

    $resultat=$a%$b;
    echo nl2br($resultat . "\n");
  ?>
</body>
</html>