
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
    
    define('CAT_API_KEY', 'live_rNF6mBReObiLzWEDLktTC16RX4FR1RtawSMnwwMYXeKMCiGLK6AxTmNZ12hVpQBx');

    $curl = curl_init();

    // Paramétrage de l'appel d'API
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.thecatapi.com/v1/images/search?has_breeds=1',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    // On ajoute le clef d'API obtenue sur le site Cat's API
    // Cela permet d'avoir plus de fonctionnalités sur cette API
    $headers = [
        'x-api-key: ' . CAT_API_KEY
    ];
    // On ajoute l'info dans les Headers de l'appel d'API
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

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
    $breed = $cat-> breeds[0];

    // // DEBUG: Afficher le contenu d'une variable
    // echo '<pre>';
    // print_r($breed);
    // echo '</pre>';
    // ?>

    <!-- Affichage HTML de la réponse de l'API -->
    <h1><?php echo $breed->name ?></h1>
    <p>Origine : <?php echo $breed->origin ?></p>
    <p><i><?php echo $breed->temperament ?></i></p>
    <img src="<?php echo $imgUrl ?>" width="400">
    <p><?php echo $breed->description ?></p>
</body>
</html>