<?php
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

$output = "Hola $name, con una edad de: $age 😔";

$outputAge = $isOld
    ? 'Eres viejo, los iento.'
    : 'Eres joven felicidades.';

$outputAge = match (true) {
    $age < 3 => "Eres un bebe, $name",
    $age < 12 => "Eres un niño, $name",
    $age < 18 => "Eres un adolescente, $name",
    $age == 18 => "Eres mayor de edad, $name",
    default => 'Eres un ser humano'
};

$bestLanguages = ['PHP', 'JavaScript', 'Python'];
$bestLanguages[3] = 'Java';
$bestLanguages[] = 'TypeScrit';

$person = [
    'name' => 'Miguel',
    'age' => 78,
    'isDev' => true,
    'languages' => ['PHP', 'JavaScript', 'Python'],
];

$person['name'] = 'pheralb';
$person['languages'][] = 'Java';

?>

<ul>
    <?php foreach ($bestLanguages as $key => $languages) { ?>
        <li> <?= "$key - $languages" ?></li>
    <?php } ?>
</ul>

<?php if ($isOld) { ?>
    <h2>Eres viejo, lo siento.</h2>
<?php } elseif ($isDev) { ?>
    <h2>No eres viejo, pero eres dev. Estas jodido.</h2>
<?php } else { ?>
    <h2>Eres joven, felicidades.</h2>
<?php } ?>

<h3>El mejor lenguaje es: <?= $bestLanguages[0] ?></h3>

<img src="<?= LOGO_URL ?>" alt="Logo PHP" width="200">
<h1>
    <?= $outputAge ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
