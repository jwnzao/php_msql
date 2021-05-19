<?php
    session_start();
    require_once 'config.php';
    
    $bdd = new PDO('mysql:host=localhost;dbname=replique',$user,$pass);

    //Vérifier s'ils existent
    if(isset($_POST['email']) && isset($_POST['password']))
    {
        $id = htmlspecialchars($_POST['id']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        //Vérifier si la personne est bien inscrite dans notre base
        $check =$bdd->prepare('SELECT id, pseudo, email, password FROM utilisateur WHERE email = ?');
         
        //On met dans un tableau et on resend l'email
        $check->execute(array($id => $_GET['id']));

        //On stock les données
        $data = $check->fetch();
        //On regarde s'il existe dans la table ou pas
        $row = $check->rowCount();

        if($row == 1)
        {   
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {   
                $password = hash('sha256', $password);

                if($date['password'] === $password )
                {
                    $SESSION['user'] = $data['pseudo'];
                    header('Location:landing.php');

                }else header('Location:index.php?login_err=password');

            }else header('Location:index.php?login_err=email');

        }else header('Location:index.php?login_err=already');


    }else header('Location:index.php');