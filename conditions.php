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
		//Je définis une vitesse max
		define('VITESSE_MAXIMUM', 50);
		//ici e définis une vitesse de conduite en voiture
		$vitesse = 40;

		if($vitesse> VITESSE_MAXIMUM) {
			echo nl2br('Vous roulez trop vite !'."\n");
		} else {
			echo nl2br('Vous roulez tranquillement'."\n");
		}

		echo nl2br('Enchaînement de conditions' ."\n");

		$classePerso = 'humain';
		// if($classePerso === 'elfe') {
		// 	echo nl2br('Vous êtes un elfe !' ."\n");
		// 	echo nl2br('J\'ai de grandes oreilles' ."\n");
		// }elseif($classePerso === 'humain') {
		// 	echo nl2br('Vous êtes un humain !' ."\n");
		// 	echo nl2br('J\'ai de grands pieds' ."\n");
		// }elseif($classePerso === 'nain') {
		// 	echo nl2br('Vous êtes un nain !' ."\n");
		// 	echo nl2br('J\'aime la bière' ."\n");
		// } else {
		// 	echo nl2br('Vous n\'existez pas !' ."\n");
		// }

		switch($classePerso) {
			case 'elfe' :
				echo nl2br('Vous êtes un elfe !' ."\n");
				echo nl2br('J\'ai de grandes oreilles' ."\n");
			break;
			case 'humain' :
				echo nl2br('Vous êtes un humain !' ."\n");
				echo nl2br('J\'ai de grands pieds' ."\n");
			break;
			case 'nain' :
				echo nl2br('Vous êtes un nain !' ."\n");
				echo nl2br('J\'aime la bière' ."\n");
			break;
			default :
				echo nl2br('Vous n\'existez pas !' ."\n");
		}
  ?>
</body>
</html>