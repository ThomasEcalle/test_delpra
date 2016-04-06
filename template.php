<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="<?php echo BASE_URL;?>/style.css" />
        <title><?= isset($title) ?  $title : "zozor-carnets de voyage";?></title>
    </head>
    
    <body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <div id="logo">
                        <img src="<?php echo BASE_URL;?>/images/zozor_logo.png" alt="Logo de Zozor" />
                        <h1>Zozor</h1>    
                    </div>
                    <h2>Carnets de voyage</h2>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="<?php echo BASE_URL;?>/accueil">Accueil</a></li>
                        <li><a href="<?php echo BASE_URL;?>/blog">Blog</a></li>
                        <li><a href="#">CV</a></li>
                        <li><a href="#">Contact</a></li>
						<li><a href="<?php echo BASE_URL;?>/deco">deco</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Retour sur mes vacances aux États-Unis...
                    <a href="#" class="bouton_rouge">Voir l'article <img src="<?php echo BASE_URL;?>/images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section>
				<?php 
				echo $_GET['infos'];
				require $content;  ?>
            </section>
            
            <footer>
                <div id="tweet">
                    <h1>Mon dernier tweet</h1>
                    <p>Hii haaaaaan !</p>
                    <p>le 12 mai à 23h12</p>
                </div>
                <div id="mes_photos">
                    <h1>Mes photos</h1>
                    <p><img src="images/photo1.jpg" alt="Photographie" /><img src="images/photo2.jpg" alt="Photographie" /><img src="images/photo3.jpg" alt="Photographie" /><img src="images/photo4.jpg" alt="Photographie" /></p>
                </div>
                <div id="mes_amis">
                    <h1>Mes amis</h1>
                    <div id="listes_amis">
                        <ul>
                            <li><a href="#">Pupi le lapin</a></li>
                            <li><a href="#">Mr Baobab</a></li>
                            <li><a href="#">Kaiwaii</a></li>
                            <li><a href="#">Perceval.eu</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Belette</a></li>
                            <li><a href="#">Le concombre masqué</a></li>
                            <li><a href="#">Ptit prince</a></li>
                            <li><a href="#">Mr Fan</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
