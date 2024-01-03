<?php
    // If not language cookie, create default cookie with 'pl'
	if (!isset($_COOKIE['language'])) {
		$options = array(
			'expires' => time()+3600*24*365*10,
			'path' => '/',
			'domain' => '',
			'secure' => true,
			'httponly' => false,
			'samesite' => 'None'
		);
	
		setcookie("language", "pl", $options);

		include_once __DIR__ .'/src/php/languages/pl.php';
	}
	else {
		include_once __DIR__ .'/src/php/languages/'.$_COOKIE["language"].'.php';
	}
?>