<?php


function render($view_data) {
	require_once('config.php');

	$TWIG_INSTALL_DIR = '/vagrant/server_data/Twig/lib/Twig/';

	echo 'rendering...';
	require_once($TWIG_INSTALL_DIR.'Autoloader.php');
	//require_once($TWIG_INSTALL_DIR.'Environment.php');
	Twig_Autoloader::register();
	$loader = new Twig_Loader_Filesystem('/var/www/html');
	$twig = new Twig_Environment($loader, array());
	//var_dump($twig);
	//var_dump($loader);
	echo $twig->render('index.html.twig', $view_data);
}

function uptime() {
	$cmd = "cat /proc/uptime";
	$uptime = shell_exec($cmd);

	$time = array();
	$time['uptime'] = substr($uptime, 0, strpos($uptime, '.'));
	$time['idle'] = substr($uptime, strpos($uptime, ' ')+1, strpos($uptime, '.'));
	
	// Time formatted nicely:
	$time['s'] = $time['uptime'] % 60;
	$time['m'] = floor($time['uptime']/60);
	$time['h'] = floor($time['m'] / 60);
	$time['d'] = floor($time['h'] / 24);

	return $time;
}

?>