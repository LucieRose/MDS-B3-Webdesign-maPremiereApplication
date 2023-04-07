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
      function afficherLeTexte($texte) {
        echo nl2br($texte . "\n");
      }

      function additionner ($nombre1, $nombre2) {
        return $nombre1 + $nombre2;
      }

      function mettreEnMajuscule($texte) {
        return strtoupper($texte);
      }

      function afficherLaTableDeMultiplication ($nombre) {
        $resultat='';
        for ($i=1; $i<= 10; $i++) {
          $resultat=$resultat . $i . 'x' . $nombre . '=' . $i * $nombre . '<br/>';
        }
        return $resultat;
      }

      afficherLeTexte('Bonsoir');
      afficherLeTexte(additionner(899878023,779879866));
      afficherLeTexte(mettreEnMajuscule('supper'));
      afficherLaTableDeMultiplication(6);
    ?>
</body>
</html>