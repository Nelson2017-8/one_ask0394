<?php  

// Descrption: Este archivo redirige al usuario con respecto a su idioma, actualmente redirige en dos idiomas ingles y español

$idioma = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

echo $idioma;

switch ($idioma) {
	case "es":
		header("location: ./es/");
		break;
	case "in":
		header("location: ./in/");
		break;
	
	default:
		header("location: ./in/");
		break;
}
