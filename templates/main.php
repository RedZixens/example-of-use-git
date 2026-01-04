<main>
    <section>
        <img src="<?= $poster_url; ?>" width="500" alt="Poster de <?= $title ?>" style="border-radius: 16px">
    </section>

    <hgroup>
        <h3><?= "$title - $untilMessage" ?> </h3>
        <p>Fecha de estreno: <?= $release_date ?></p>
        <p>La siguiente película es: <?= $following_production ?></p>
    </hgroup>
</main>