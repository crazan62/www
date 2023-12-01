<html>
    <head>
        <title>Ajout d'une marque</title>
	</head>

	<body>
		<form action="/do_brand_ad.php" method="post">
			<label for="brand_name">Nom de la marque:</label>
			<input type="text" id="brand_name" name="brand_name">
				<br/>
			<label for="brand_logo_url">URL du logo :</label>
			<textarea id="brand_logo_url" name="brand_logo_url" rows="4" cols="30"> </textarea>
				<br/>
			<input type="submit" value="enregistrer une nouvelle marque">
		</form>
	</body>



</html>