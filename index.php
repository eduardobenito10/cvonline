<?php
require_once 'vendor/twig/twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'var/compilation_cache',
    'debug' => 'true'
));

include_once('utilCV.php');
$cv = cargarCV();

$template = $twig->loadTemplate('index.twig.html');

echo $template->render(array('education' => getEducation($cv), 'positions' => getPositions($cv), 'timeline' => getTimeline($cv), 'interests' => getInterests($cv)));

?>