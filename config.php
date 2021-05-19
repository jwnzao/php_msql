<?php


    /*
           Attention ! le host => l'adresse de la base de données et non du site !!
        
           Pour ceux qui doivent spécifier le port ex : 
           $bdd = new PDO("mysql:host=HOST;dbname=DB_NAME;charset=utf8;port=3306", "LOGIN", "PASS");
           
     */

    $user = 'root';
	$pass ='';


	if (isset($_POST['id']) AND isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['ip']))
    {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION; /* on définie les options d'erreurs que l'on souhaite */
        $bdd = new PDO("mysql:host=127.0.0.1;dbname=replique;charset=utf8", $user,$pass, $pdo_options);
        try
        {
            $check=$bdd->prepare("INSERT INTO `utilisateur`(`id`, `pseudo`, `email`, `password`, `ip`) VALUES (?,?,?,?,?");
            $check->execute(array($_POST['id'], $_POST['pseudo'], $_POST['email'], $_POST['password'], $_POST['ip'] ));
        }
        catch(EXCEPTION $e)
        {  
            /* on affiche les erreur éventuelles en développement */
            die('Erreur : '.$e->getMessage());
        }
    }
  ?>


