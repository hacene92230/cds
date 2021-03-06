<!DOCTYPE html>
<html lang="fr">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<title><?= $title; ?> Culture du savoir</title>
<link href="style.css" rel="stylesheet">
    </head>
<body>
<header>
<p>Culture du savoir</p>
<p><a href="index.php">Accueil</a></p>
<p><a href="index.php?page=generate">Généré un jeu de donnés</a></p>
	<div class='form-group'>
		<form method="post" action="?page=recherche">
		<label for='recherche'>Entrez les termes de votre recherche</label>
		<input type='search' name='recherche' id='recherche' placeholder="terme de votre recherche" required class='form-control'/>
	<input type="submit" name="submit" value="rechercher">
	</form>
	</div>
<?php
if(isset($_SESSION['utilisateurs']))
{
?>
<li role="profil" class="nav nav-tabs" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"> <?= $_SESSION['utilisateurs']['uti_pseudo'] ?> <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
<li><a href="index.php?page=utilisateurs&action=profil">Mon profil</a></li>
<li><a href="index.php?page=messagerie&action=accueil">Messagerie</a></li>
<li><a href="index.php?page=utilisateurs&action=historique">Mon historique</a></li>
<?php
if($_SESSION['utilisateurs']['uti_profil'] >= 2)
{ ?>
<li><a href="index.php?page=admin&action=accueil">Administration</a></li>
<?php
}
?>
<li><a href="index.php?page=utilisateurs&action=deconnexion">Se déconnecté</a></li>
      </ul>
<?php
}
else
{
	?>
<a href="index.php?page=utilisateurs&action=authentification">Connexion</a>
<a href="index.php?page=utilisateurs&action=inscription">Inscription</a>
<?php
}
?>
</header>