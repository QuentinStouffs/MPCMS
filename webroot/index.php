<?php
//constante Webroot définit le dossier dans lequel se trouve le fichier(index.php)
define('WEBROOT', dirname(__FILE__));
//définit le dossier root (parent de WEBROOT)
define('ROOT', dirname(WEBROOT));

//séparateur (/ ou \)
define('DS', DIRECTORY_SEPARATOR);

//Dossier core
define('CORE', ROOT.DS.'core');

define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

require CORE.DS.'includes.php';
new Dispatcher();

?>


