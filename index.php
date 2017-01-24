<?php

require_once './Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader, array());

if (isset($_GET['view']) && $_GET['view'] === 'impressum') {
	$template = $twig->load('impressum.html');
	echo $template->render();
} elseif (isset($_GET["view"]) && $_GET["view"] === "admin") {
	$template = $twig->load("admin.html");
	echo $template->render();
} else {
	$template = $twig->load('index.html');
	$data = array(
		'aboutText' => "Hallu",
		'aboutPersons' => array(
			array(
				'name' => 'Luis Dreyer',
				'imgUrl' => 'https://api.adorable.io/avatars/285/luisdreyer.png',
				'position' => 'Le Oberboss',
				'email' => 'luis@cutcore.de',
				'text' => 'test',
			),
			array(
				'name' => 'Fabian Kästner',
				'imgUrl' => 'https://api.adorable.io/avatars/285/fabiankaestner.png',
				'position' => '',
				'email' => 'fabian@cutcore.de',
				'text' => 'test',
			)
		),
		'youtubeVideos' => array(
			array(
				'name' => 'Snowboarden im Zillertal',
				'id' => 'PPQKoeJ-uxU',
			),
			array(
				'name' => 'Die Funktionsweise eines Unterseeboots',
				'id' => 'TnlLgY1s4c8',
			),
			array(
				'name' => 'An overview of the Industrial Revolution',
				'id' => 'aPXcmB5pMpc',
			),
		),
	);
	echo $template->render($data);
}
?>
