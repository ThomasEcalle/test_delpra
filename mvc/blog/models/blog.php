<?php 

	function get_articles($deb,$fin)
	{
		global $bdd;
		
		$deb = (int)$deb;
		$fin = (int)$fin;
		
		$requete = $bdd -> prepare("SELECT * FROM article LIMIT :deb , :fin ");
		$requete -> bindValue(":deb",$deb,PDO::PARAM_INT);
		$requete -> bindValue(":fin",$fin,PDO::PARAM_INT);
		
		$requete -> execute();
		
		return $requete -> fetchAll();
		
	}
	
	function get_article($id)
	{
		global $bdd;
		
		$requete = $bdd -> prepare("SELECT * FROM article WHERE id_a = :id ");
		
		$requete -> bindValue(":id",$id,PDO::PARAM_INT);
		
		$requete -> execute();
		
		return $requete -> fetch();
		
	}
	
	function insert_article($titre,$contenu)
	{
		
		global $bdd;
		
		$requete = $bdd -> prepare("INSERT INTO article VALUES('',:titre,:contenu) ");
		
		$requete -> bindValue(":titre",$titre,PDO::PARAM_STR);
		$requete -> bindValue(":contenu",$contenu,PDO::PARAM_STR);
		
		$requete -> execute();
		
	}

?>