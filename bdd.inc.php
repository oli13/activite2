<?php
//Elements BDD
$host    =  "localhost";
$db_name =  "chat";
$login   =  "root";
$pass    =  "";

//Connexion BDD
try
{
$bdd = new PDO("mysql:host=".$host.";dbname=".$db_name, $login, $pass);
} catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>