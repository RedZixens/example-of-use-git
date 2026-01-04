<?php
require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';

$nextMovie = NextMovie::fetchAndCreateMovie(API_URL);
$nextMovieData = $nextMovie->getData();
?>

<?php renderTemplate('head', $nextMovieData) ?>
<?php renderTemplate('main', array_merge($nextMovieData, ['untilMessage' => $nextMovie->getUntilMessage()])) ?>
<?php renderTemplate('styles') ?>