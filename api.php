
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
    $curl = curl_init();

    // Paramétrage de l'appel d'API
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    // On exécute l'appel d'API
    $response = curl_exec($curl);

    // On ferme la liaison avec l'API
    curl_close($curl);

    // On décode la réponse de l'API
    $responJson = json_decode($response);

    // On extrait l'objet "cat" dela réponse d'API
    $cat = $responJson[0];

    // On extrait l'URL de l'image du chat
    $imgUrl = $cat ->url;

    // DEBUG: Afficher le contenu d'une variable
    // var_dump($cat->url);

    ?>

    <!-- Affichage HTML de la réponse de l'API -->
    <img src="<?php echo $imgUrl ?>">
</body>
</html>