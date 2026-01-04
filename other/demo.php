<?php
const API_URL = 'https://whenisthenextmcufilm.com/api';

// Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/* Ejecutar la petición
    y guardamos el resultado
*/
$result = curl_exec($ch);

// una alternativa sería utilizar get_file_contents
// $result = file_get_contents(API_URL); // si solo quieres hacer un GET de una API

$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <meta charset="UTF-8">
    <title>La proxima pelicula de Marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<main>
    <!-- <pre style="font_size: 8px; overflow: scroll; height: 350px;">
        <?php var_dump($data) ?>
    </pre> -->
    <section>
        <img src="<?= $data['poster_url']; ?>" alt="Poster" width="300"
        style="border-radius: 16px">
    </section>

    <hgroup>
        <h3><?= $data['title'] ?> se estrena en <?= $data['days_until'] ?> días.</h3>
        <p>Fecha de estreno: <?= $data['release_date'] ?></p>
        <p>La siguiente película es <?= $data['following_production']['title'] ?></p>
    </hgroup>
</main>

<!-- <h2>La próxima película de Marvel</h2> -->

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>
