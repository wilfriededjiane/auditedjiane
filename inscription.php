<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <title>connection</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">

</head>
<body>
  

		<section class="mt-5 row">
			<h2 class="col-12 text-center">formulaire d'inscription</h2>
			<form class="row" id="inscription" action="index.php" method="POST">
				<div class="form-group col-9 offset-2 col-md-6 offset-md-2" >
					<label for="nom">votre nom:</label>
					<input type="text"  required class="form-control" id="nom" placeholder="votre nom ">
				</div>
				<div class="form-group col-9 offset-2 col-md-6 offset-md-2" >
					<label for="prenom">votre prenom:</label>
					<input type="text" required class="form-control" id="prenom" placeholder="votre prenom ">
				</div>
				<div class="form-group col-9 offset-2 col-md-6 offset-md-2" >
					<label for="email">Adresse mail:</label>
					<input type="email" required class="form-control" id="email" placeholder="votre Adresse mail">
				  </div>
				  <div class="form-group col-9 offset-2 col-md-6 offset-md-2 ">
					<label for="password">mot de passe: </label>
					<input type="password" class="form-control" id="password" placeholder="votre mot de passe ">
				  </div>
				  <div class="form-group col-9 offset-2 col-md-6 offset-md-2 ">
					<label for="password2">confirmer votre mot de passe: </label>
					<input type="password" class="form-control" id="password2" placeholder="votre mot de passe ">
				  </div>
				  <button type="submit" class="btn btn-primary form-group mt-3 col-9 offset-2 col-md-6 offset-md-2">s'inscrire</button>
			</form>
		</section>
			



	 <?php include 'footer.php';?>
	
	 <script  src="js/jquery-3.3.1.slim.min.js"></script>
	<script  src="js/bootstrap.bundle.min.js"></script>
	<script  src="js/fontawesome-all.min.js"></script>
	
	
	</body>
	</html>