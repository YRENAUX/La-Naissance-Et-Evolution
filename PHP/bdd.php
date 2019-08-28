<?php
    try
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
<<<<<<< HEAD
        $bdd = new PDO("mysql:host=localhost;dbname=dbs149125;charset=UTF8", 'yonirenaux', '', $pdo_options);
=======
        $bdd = new PDO("mysql:host=localhost;dbname=dbs149125;charset=UTF8", 'root', '', $pdo_options);
>>>>>>> 4df4055b708444741a49ff7695df88eba1dde7d6
      
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>