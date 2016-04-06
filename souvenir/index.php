<?php 
session_start();
?>
<html>

<body>

	<?php 
		try
		{
			$bdd = new PDO("mysql:host=localhost;dbname=utilisateurs","root","");
		}
		catch(Exception $e)
		{
			die("erreur de correction");
		}
		if( !empty($_POST))
		{
			$_POST["mdp"] = sha1($_POST["mdp"]);
			$user = $bdd -> prepare("SELECT id,username,password FROM membres WHERE username= :login AND password = :mdp");
			
			$user -> bindValue(":login",$_POST["login"],PDO::PARAM_STR);
			$user -> bindValue(":mdp",$_POST["mdp"],PDO::PARAM_STR);
			
			$user -> execute();
			$donnees = $user -> fetch();
			var_dump($donnees);
			
			if (isset($_POST["remember"]))
			{
				echo "hello2";
				setcookie( "auth",$donnees['id'].'-----'.sha1($donnees["username"].$donnees["password"].$_SERVER["REMOTE_ADDR"]),time()+(3600*24*3),'/','localhost',false,true);
			}
			
			if ($donnees)
				$_SESSION["auth"] = $donnees;
			
			
		}
		var_dump($_COOKIE);
		if (isset($_COOKIE["auth"]) && !isset($_SESSION["auth"]))
		{
			$auth = $_COOKIE["auth"];
			
			$auth = explode("------",$auth);
			$user = $bdd -> prepare("SELECT * FROM membres WHERE id=:id");
			
			$user -> bindValue(":id",$auth[0],PDO::PARAM_INT);
			
			$user -> execute();
			$donnnees = $user -> fetch();
			
			$key = sha1($donnees["username"].$donnees["password"].$_SERVER["REMOTE_ADDR"]);
			
			if ($key == $auth[1])
			{
				$_SESSION["auth"] = $donnees;
				setcookie( "auth",$donnees['id'].'-----'.sha1($donnees["username"].$donnees["password"].$_SERVER["REMOTE_ADDR"]),time() +(3600*24*3),'/','localhost',false,true);
				header("location:test.php");
				die();
			}
		}
		
	?>
	<form action="" method="post">
		login<input type="text" name="login"><br>
		Mot de passe <input type="password" name="mdp"><br>
		Se souvenir de moi<input type="checkbox" name="remember"><br>
		<input type="submit" name="submit">
	
	</form>
</body>

</html>