<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
 <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>


	<?php 
		function verif_post($var = array())
		{
			
			extract($_POST);
			
			$mdp = sha1($mdp);
			$i = 0;
			$message = "";
			
			if (empty($nom) || !preg_match("#[A-Z]+#",$nom))
			{
				$i++;
				$message .= "votre nom ne doit comporter que des Majuscules<br>";
			}
			
			if (empty($prenom) || !preg_match("#[A-Z][a-z]+#",$prenom))
			{
				$i++;
				$message .= "votre prenom ne doit comporter que des Minuscules sauf la première lettre en majuscule<br>";
			}
			
			if (empty($email) || !preg_match("#[a-z0-9._-]+\.[a-z]{2,6}#",$email))
			{
				$i++;
				$message .= "votre email ne correspond pas <br>";
			}
			
			if (empty($tel) || !preg_match("#0[1-9]([ .-]?[0-9]{2}){4}#",$tel))
			{
				$i++;
				$message .= "votre téléphone n'est pas bon<br>";
			}
			
			if (empty($date) || !preg_match("#[0-9]{2}\/[0-9]{2}\/[0-9]{4}#",$date))
			{
				$i++;
				$message .= "mauvaise date<br>";
			}
			
			if ($i > 0)
			{
				echo "vous avez ".$i." erreurs";
				echo $message;
			}
			else
			{
				// traitement du insert
			}
		}
		
		if (isset($_POST["submit"]))
		{
			
			verif_post($_POST);
		}
		
		
	?>
<form action="#" method="post">

<label for="nom">nom</label>
<input type="text" name="nom" id="nom" required pattern="[A-Z]+">

<span>Ne mettez que des majuscules</span><br>
<label for="prenom">Prenom</label>
<input type="text" name="prenom" id="prenom" required pattern="[A-Z][a-z]+" ><br>

<label for="email">Email</label>
<input type="email" name="email" id="email" required placeholder="zozor@hotmail.fr"><br>

<label for="mdp">Mdp</label>
<input type="password" name="mdp" id="mdp" required><br>

<label for="tel">Telepehone</label>
<input type="text" name="tel" id="tel" required pattern="0[1-9]([ .-]?[0-9]{2}){4}"><br>

<label for="date">Date</label>
<input type="text" name="date" id="datepicker"  required><br>

<input type="submit" name="submit">


</form>

<script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</body>


</html>