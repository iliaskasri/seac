<?php include 'inc/MySQLDatabase.php'; 
	include 'inc/ResultSet.php';
	include 'inc/View.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Gestion de Stock</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a href="index.html" id="logo">Gestion de stock</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Accueil</a></li>
								<li>
									<a href="#">Client</a>
									<ul>
										<li><a href="AjouterClient.html">Ajouter un client</a></li>
										<li><a href="ChercherClient.html">Chercher un client</a></li>
										<li><a href="SupprimerClient.html">Supprimer un client</a></li>
										<li><a href="AfficherClient.php">Afficher les clients</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Fournisseur</a>
									<ul>
										<li><a href="AjouterFournisseur.html">Ajouter un fournisseur</a></li>
										<li><a href="ChercherFournisseur.html">Chercher un fournisseur</a></li>
										<li><a href="SupprimerFournisseur.html">Supprimer un fournisseur</a></li>
										<li><a href="AfficherFournisseur.php">Afficher les fournisseurs</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Article</a>
									<ul>
										<li><a href="AjouterArticle.html">Ajouter un article</a></li>
										<li><a href="ChercherArticle.html">Chercher un article</a></li>
										<li><a href="SupprimerArticle.html">Supprimer un article</a></li>
										<li><a href="AfficherArticle.php">Afficher les articles</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Livraison</a>
									<ul>
										<li><a href="AjouterLivraison.html">Ajouter un bon de livraison</a></li>
										<li><a href="ChercherLivraison.html">Chercher une livraison</a></li>
										<li><a href="SupprimerLivraison.html">Supprimer une livraison</a></li>
										<li><a href="AfficherLivraison.php">Afficher les livraisons</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Reception</a>
									<ul>
										<li><a href="AjouterReception.html">Ajouter un bon de reception</a></li>
										<li><a href="ChercherReception.html">Chercher une reception</a></li>
										<li><a href="SupprimerReception.html">Supprimer une reception</a></li>
										<li><a href="AfficherReception.php">Afficher les receptions</a></li>
									</ul>
								</li>
							</ul>
						</nav>
			</div>
			</div>
			
	<?php 
	$db = new MySQLDatabase("localhost", "GestionStock", "root", "");
		$res = $db->selectByKey("fournisseur", "code", $_GET["code"]);
		$result = new ResultSet($res);
		?>
		<h1 align="center">Voici le fournisseur correspendant au code demander</h1>
		<?php 
		$view = new View($result);
		$view->displayF();
		if($res){
	?>
	<form action="index.html">
	<table><tr align="center"><td><input type="submit" value="Valider"/></td></tr></table>
	</form>
	<?php 
	}
	else{
	?>
	<h1 align="center">Fournisseur introuvable!</h1>
	<form action="index.html">
	<table><tr><td align="center"><input type="submit" value="Valider"/></td></tr></table>
	</form>
	<form action="ChercherClient.html">
	<table><tr align="center"><td><input type="submit" value="Reessayer"/></td></tr></table>
	</form>
	<?php 
	}
	?>
			
	</body>
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
	</html>
