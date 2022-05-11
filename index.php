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
	<header id="header" class="navSize">
		<h1 id="title"><a href="index.php">a<em class="orangeSlash">(</em>mo<em class="orangeSlash">)</em>tittude</a></h1>
		<nav>
			<a href="reference.php" class="link">références</a>
			<a href="#contactSection" class="link">contact</a>
		</nav>
	</header>

	<section id="presentationSection">
		<article class="boxPresentation">
			<div id="firstBox">
				<div id="imgBox">
					<img src="assets/images/photo_portrait.jpg" alt="test" class="img">
					<img src="assets/images/photo_portrait.jpg" alt="test" class="img">
					<img src="assets/images/photo_portrait.jpg" alt="test" class="img">
				</div>
				<div id="texte1Box">
					<p class="texte" id="texte1">A(mo)ttitude est une société d'Assistance à Maitrise d'Ouvrage qui a la bonne attitude : écoute analytique, observations précises et synthétiques, recherche exhaustive des contraintes environnementales, sociales, urbaine, réglementaires, économiques, fonctionnelles, spatiales et opérationnelles.</p>
				</div>
				
			</div>
			
			<div id="boxSavoirFaire">
				<div class="boxSavoirFaire">
					<p class="savoirFaire" id="savoirFaire1">Assistance à maîtrise d'ouvrage <em class="orangeSlash">/</em> Programmation architecturale et technique <em class="orangeSlash">/</em></p>
				</div>
				<div class="boxSavoirFaire">
					<p class="savoirFaire" id="savoirFaire2">Qualité d'usage <em class="orangeSlash">/</em> Accessibilité <em class="orangeSlash">/</em> Concertation des utilisateurs et usagers</p>
				</div>
			</div>
			
			<div id="texte2Box">
				<p class="texte" id="texte2">Nous permettons à nos clients de cadrer leur projet, de faire en sorte que leur bâtiment projeté corresponde aussi bien aux attentes des décideurs que des usagers et utilisateurs de l'équipement, tout en maîtrisant les délais, les coûts et les risques.</p>
			</div>
			
		</article>
		<article class="boxPresentation">
			<div  id="whiteBg"></div>
			<div id="blueBg">
				<div id="whiteBorder"></div>
				<div id="texte3Box">
					<p class="texte" id="texte3">Outre la clarification des besoins, des enjeux et des exigences de l'opération, la consolidation des orientations et faisabilité, l'ajustement des contraintes, la préprogrammation et la programmation fonctionnelle et technique proprement dite, nous pouvons accompagner nos clients dans les phases de choix du concepteur d'études de conception et de chantier.<span id="borderBox"></span></p>
					
				</div>
				<div id="boxPresentation2">
					<div id="boxPhoto">
						<div id="rang">
							<p class="texte orange" id="texte5">Dorothée-Lân RABEC</p>
							<p class="texte" id="texte6">Dirigente-Fondatrice</p>
						</div>
					<img src="assets/images/photo_portrait.jpg" id="photoPortrait">
					</div>
					<div id="boxTextePresentation">
						<p class="texte" id="texte4">Sa gérante, Dorothée-Lân RABEC,
						architecte de formation et programmiste généraliste, a plus de 20 ans d'expérience et de nombreuse références en programmation architecturale dans des domaines très divers (équipement universitaires et scolaires, équipements petite enfance, logements, bâtiments médico-sociaux et de recherche, équipements culturels, équipements sportifs, bâtiments tertiaires et industriels,...). Elle a également à son actif de nombreuses réhabilitations de bâtiments, des schémas directeurs, des études d'opportunités, des diagnostics, accessibilités, ...</p>
					</div>
				</div>
			</div>
			
			

		</article>
	</section>
	<section id="referencesSection" class="section">
		<div class="titre2"><h2>références </h2><div></div></div>
	</section>
	<section id="contactSection" class="section">
		<div class="titre2"><h2>contact </h2><div></div></div>
		<form action="contact_form.php" method="post" id="form">
                <label>nom*<input type="text" class="" id="nom" name="nom"  required></label> 
                <label>téléphone<input type="text" class="" id="tel" name="tel" ></label> 
                <label>mail*<input type="text" class="" id="mail" name="mail" required></label> 
                <label>message*<textarea class="" id="message" name="message" required></textarea></label> 
                <input type="submit" value="Envoyer">
            </form>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1239.8756519379028!2d4.85367981379387!3d45.76263915940114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea61d12f15a3%3A0x7b8236328db7e654!2s20a%20Bd%20Eug%C3%A8ne%20Deruelle%2C%2069003%20Lyon!5e0!3m2!1sen!2sfr!4v1652125777724!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<footer>
				
	</footer>
	<script src="assets/js/scroll.js"></script>
	<script src="assets/js/nav.js"></script>

</body>
</html>