<?php 
	include 'inc/MySQLDatabase.php';
	include 'inc/ResultSet.php';
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
		<form action="AjouterClient.php">
		<table>
			<?php 
			$db = new MySQLDatabase("localhost", "GestionStock", "root", "");
				$a=$db->selectcode("client");
				$result = new ResultSet($a);
				echo '<tr><select>';
				for ($i = 4; $i < $result->getRowCount(); $i++){
					echo '<option>';
						for ($j = 0; $j < $result->getColumnCount(); $j++){
							echo $result->getField($i, $j);
						}
						echo '</option>';
				}
				echo '</select></tr>';
				?>
				
			<tr><td align="center">Societe : </td><td><input type="text" size="40" name="societe" placeholder="Veuillez saisir le nom de la societe"/></td></tr>
			<tr><td align="center">Adresse : </td><td><textarea name="adresse" id="Adresse" placeholder="Adresse" rows="5"></textarea></td></tr>
			<tr><td align="center">Ville : </td><td>
				<select name="ville">
					<option value="fes">Fes</option>
					<option value="rabat">Rabat</option>
					<option value="casa">Casablanca</option>
					<option value="agadir">Agadir</option>
					<option value="meknes">Meknes</option>
					<option value="Tanger">Tanger</option>
				</select>
			</td></tr>
		</table>
		<table>
			<tr align="center"><td><input type="submit" value="Enregistrer"/></td></tr><tr align="center"><td><input type="reset" value="Reset"/></td></tr>
		</table>
		</form>
	</body>
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
</html>