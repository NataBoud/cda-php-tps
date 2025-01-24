<?php

// Ouverture d'une connection à la base de données
$db = new SQLite3('local.db', SQLITE3_OPEN_READWRITE | SQLITE3_OPEN_CREATE);

echo 'Ouverture de la connexion ...\n';

// $query = 'CREATE TABLE fruits (id INTEGER PRIMARY KEY, name TEXT NOT NULL, created_at TEXT)';

// if($db->exec($query)) 
// {
//     echo 'table fruits créée';
// } else 
// {
//     echo "à l'assault";
// }

$query = 'INSERT INTO fruits (name, created_at) VALUES (:name, :created_at)';
$statement = $db->prepare($query);
$statement->bindValue(':name', 'banane', SQLITE3_TEXT);
$statement->bindValue(':created_at', '2024-01-01 12:00:00', SQLITE3_TEXT);
$statement->execute();

$result  = $db->query('SELECT id, name, created_at FROM fruits');

$data = [];

while ($res = $result->fetchArray(SQLITE3_ASSOC)) 
{
    array_push($data, $res);
}

print_r($data);