<?php 
 
 define('BASE_URL',dirname($_SERVER['SCRIPT_NAME']));

 if (isset($_GET["page"])  && preg_match("#^[a-zA-Z0-9-]+$#",$_GET["page"]))
 {
	 if(file_exists("content/".$_GET["page"].".php"))
	 {
		$content = "content/".$_GET["page"].".php";
	 }
	 else
	 {
		$content = "content/404.php";
	 }
 }
 else
 {
	$content  = "content/accueil.php";
 }
 ob_start(); // arrête l'affichage
 require $content;
 ob_end_clean();
 
require "template.php";

?>