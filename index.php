<html>

	<head>
		<title>Ma base de véhicule </title>
	</head>
<body>
	<h1>Voiture en super bon état </h1>
	<h2>Nos marques </h2>
			
<?php
	// Souvent on identifie cet objet par la variable $conn ou $db
	try
	{
	$db = new PDO(
		'mysql:host=localhost;dbname=basedechoses;charset=utf8',
		'basedechoses',
		'basedechoses'
	);
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
	print("");
	
	$myBrandsRequest = $db->prepare('SELECT * FROM brand');   //prépare la requête a executer sur $DB
	$myBrandsRequest->execute();							  //execute la requete sur la BDD 
 	$brands = $myBrandsRequest->fetchAll();	                  //fetchall recupère tous les enregistrements correspondant au résultat de la requête
	
	//print_r($brands); 									  //DEBUG: affiche l'objet complet
	foreach ($brands as $brand) {							  //foreach 
		echo "MARQUE :" .$brand['name'] . " ";
		echo "<br/>"; 
		echo "Image : <img height=100px src='" . $brand['logo_url'] . "' />";
		echo "<br/>"; 										//br passe a la ligne 
	}
?>
      <!-- TABLEAU -->
	  <h1> Un tableau écrit en dur </h1>
	<table border="1px">
	<tr>
		<th>Marque</th>
		<th>logo</th>
	</tr>
	<tr>
		<td>Audi</td>
		<td><img src="https://media.cdnws.com/_i/60118/2160/2454/61/sticker-audi-ref53-logo-anneaux-sport-autocolant-voiture-stickers-decals-sponsor-racing.jpeg"height=100px /></td>
	</tr>	
	</table>

		<!-- Ouverture d'un tableau php   -->

	<h1> Un tableau lié à la base de donnée </h1>
	<table border="1px">  <!-- bord du tabeau -->
		<tr>
			<th>Marque</th>    <!-- titre du tabeau colone1 -->
			<th>logo</th>		<!-- titre du tabeau colone2 -->
		</tr>
		<?php  //ouverture pour appel de la boucle 
			foreach ($brands as $brand) {  //début de la boucle 
		?>  <!-- fin du php  -->
			<tr>  <!-- ouverture du tableau  -->
				<td align="center"><?php echo $brand['name'];?></td>
				<td align="center"><?php echo "<img height=100px src='" . $brand['logo_url'] . "' />"?></td>
			</tr> <!-- fermeture du tableau --> 
		<?php
			} // fin de la boucle php 
		?>  
	</table>

	<a href="band_ad.php"> ajouter une marque </a>
</body>

</html>

<?php
/*requete ajout de voiture avec image
/*INSERT INTO `brand` (`name`, `logo_url`) VALUES ('Peugeot', 'https://upload.wikimedia.org/wikipedia/fr/9/9d/Peugeot_2021_Logo.svg');
*/
?> 