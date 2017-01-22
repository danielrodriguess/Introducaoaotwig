<?php
	require_once "/vendor/autoload.php";
	$carrega = new Twig_Loader_Filesystem('template');
	$twig = new Twig_Environment($carrega);
	$template = $twig->loadTemplate('template.html');
	echo $template->render(array(
		'valor1' => 1,
		'valor2' => 9,
	));
?>