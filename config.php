<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=devoir;charset=utf8','root','');
}
catch(Exception $e)
{
    die('Erreur' .$e->getMessage());
}
?>