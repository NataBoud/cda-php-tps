<?php

// Définition d'une exception personnalisée
class UserException extends Exception {}

function login(string $user, string $password)
{
    try {
        executeQuery("search user and password");
        return;
    } catch (UserException $e) {
        echo $e->getMessage();
        return;
    } finally {
        echo 'fin du bloc try catch';
    }
}

function executeQuery(string $query) 
{
    if($query !== 'helloworld') 
    {
        // Lancer une exception
        throw new UserException('wrong query for user');
    }
}

login('toto', 'tata123');