<?php
	//connexion à la base de données

	$bdd = new PDO('mysql:host=localhost;dbname=devbackend-veille7','root', '');

	//notre requête d'insertion dans la base de données
	$req = $bdd->prepare('SELECT email, name FROM clients WHERE email = :email AND name = :name');

	$req->execute(array('email' => $_GET['email'], 'name'=> $_GET['name']));



