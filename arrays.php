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
			//Je déclare un tableau
			$monTableau = array('voiture', 5, 'toto', 78, 'document');
			echo '<pre>';
				print_r($monTableau);
			echo '</pre>';

			echo nl2br($monTableau[2] ."\n");

			echo("<ul>");

			foreach($monTableau as $valeur) {
				echo "<li>$valeur </li>";
			}
			echo("</ul>");

			$monTableauAssociatif = array(
				'clef' => 'valeur',
				'nom' => 'Doe',
				'prenom' => 'John',
				'age' => 25,
			);

			echo '<pre>';
				print_r($monTableauAssociatif);
			echo '</pre>';

			echo nl2br($monTableauAssociatif['prenom'] ."\n");

			$taillDeMonTableau = sizeof($monTableauAssociatif);
			echo nl2br($taillDeMonTableau ."\n");

			for ($i = 0; $i < $taillDeMonTableau; $i++) {
				echo nl2br($i ."\n");
			}
    ?>
</body>
</html>