<?php 

$db = new PDO('mysql:host=localhost;dbname=learn_pdo', 'root', '');

// $db->exec('CREATE TABLE personne (id INT PRIMARY KEY AUTO_INCREMENT, firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, email VARCHAR(255) UNIQUE);');

$statement = $db->prepare('INSERT INTO personne (firstname, lastname, email) VALUES (:firstname, :lastname, :email);');
$statement->bindValue('firstname', 'arthur');
$statement->bindValue('lastname', 'dennetiere');
$statement->bindValue('email', 'arthur@dennetiere.fr');
$statement->execute();

$query = 'SELECT id, firstname, lastname, email FROM personne';
$statement = $db->prepare($query);
$statement->setFetchMode(PDO::FETCH_ASSOC);
$statement->execute();

$result = $statement->fetchAll();
print_r($result);
