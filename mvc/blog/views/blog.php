<html>

<head></head>

<body>
	<h1>Mon blog</h1>
	<p>Derniers articles</p>
	
	<?php 
	
		foreach($articles as $article)
		{
			echo "<h2>".$article["titre"]."</h2>";
			echo "<p>".$article["contenu"]."</p>";
		}
		
	?>
	<h2>Laissez votre commentaire</h2>
	<form method="post" action="#">
		Titre <input type="text" name="titre"><br />
		Contenu <textarea name="contenu"></textarea><br>
		<input type="submit" name="submit">
	</form>
	
</body>


</html>