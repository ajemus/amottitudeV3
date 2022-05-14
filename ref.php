<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo_eravys.png" />
	<title>Amottitude</title>
</head>
<body>
	<?php 
            include("mdp.php");
            try {
                $bdd = new PDO($dsn,$username,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  
            } catch (Exception $e) 
            {
                die('Erreur : ' . $e->getMessage());
            }   
        ?>
	<header id="header" class="navSize">
		<h1 id="title"><a href="index.php">a<em class="orangeSlash">(</em>mo<em class="orangeSlash">)</em>tittude</a></h1>
		<nav>
			<a href="ref.php" class="link">références</a>
			<a href="index.php#contactSection" class="link">contact</a>
		</nav>
	</header>
    <div id="blocRecherche">
            <p>recherche </p>
            <input type="search" id="recherche" onkeyup="recherche()" />
    </div>
	<section id="refSection" class="section">
		<?php 
                $info = $bdd->query('SELECT * FROM ref ORDER BY ID desc');

                while($m = $info ->fetch()){
                    $id = $m['ID'];
                    $nom = $m['nom'];
                    $maitre = $m['maitre'];
                    $mission = $m['mission'];
                    $partenaire = $m['partenaire'];
                    $informations = $m['informations'];
                    $date = $m['date'];
                    if ($partenaire =="NULL"){
                        echo"<h2>ERREUR $id</h2>";
                    }
                    else{
                        echo"             
                            <div class=\"boxRefSmall\" tabindex=\"0\">
                                <div class=\"test\">
                                    <img src=\"/assets/images/img.webp\" alt=\"test\" class=\"imgRef\">
                                    <p class=\"nomRef\">$nom</p>
                                    <p class=\"plus\">voir plus</p>
                                    <div class=\"filter\"></div>
                                </div>
                            </div>    
                        ";
                    }
                }
                ?>
	</section>
	
	<footer>
		<p>a<em class="orangeSlash">(</em>mo<em class="orangeSlash">)</em>tittude</p>
		<p>design et code : <a href="" target="_blank">AJEMUS</a> </p>
		<p><a href=""> mentions légales</a></p>
	</footer>
	<p class="savoirFaire" id="savoirFaire1" style="transform:translateX(-100vw);display:none;"></p>
	<p class="savoirFaire" id="savoirFaire2" style="transform:translateX(-100vw);display:none;"></p>

	<script src="assets/js/scroll.js"></script>
	<script src="assets/js/nav.js"></script>
	<script src="assets/js/anim.js"></script>
	<script src="assets/js/recherche.js"></script>

</body>
</html>