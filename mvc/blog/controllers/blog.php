<?php 

	require_once ("models/blog.php");
	
	if(isset($_POST["submit"]))
	{
		extract($_POST);
		
		if(!empty($titre) && !empty($contenu))
		{
			insert_article($titre,$contenu);
		}
	}
	
	
	$articles = get_articles(0,15);
	
	require_once("views/blog.php");

?>