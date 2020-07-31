<?php 
function connexionBase()
{
    //Mise en place de la connexion au serveur sql produit Jarditou
    $host = "localhost";
    $login = "root";
    $password="";
    $base = "jarditou";

    try
    {
        $db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base, $login, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $db;
    }
    catch (Exception $e)
    {
        echo 'Erreur : '.$e->getMessage().'<br>';
        echo 'N° : '.$e->getCode().'<br>';
        die ('Connexion au serveur impossible.');
    }
}
?>