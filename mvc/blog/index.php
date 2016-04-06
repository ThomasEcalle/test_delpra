<?php 
	require_once("models/connect.php");

	//ob_start();
	if(isset($_GET["page"]))
	{
		if(file_exists("controllers/".$_GET["page"]))
			require_once("controllers/".$_GET["page"]);
		else
			require_once("views/404.php");
	}
	else
	{
		require_once("controllers/blog.php");
	}
	//$contenu = ob_get_contents();
	//ob_end_clean();
	
	//require "views/template.php";

?>