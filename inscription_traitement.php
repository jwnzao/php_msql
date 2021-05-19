<?php
    require_once 'config.php';

    if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['password_retype']))
    {
        $pseudo  = htmlspecialchars($_POST['pseudo']);
        $password  = htmlspecialchars($_POST['password']);
        $email  = htmlspecialchars($_POST['email']);
        $password_retype  = htmlspecialchars($_POST['password_retype']);

        //Vérifier si la personne est bien inscrite dans notre base
        $check = $bdd->prepare('SELCT pseudo, email, password FROM utilisateur WHERE email=?');
        
        //On met dans un tableau et on resend l'email
        $check->execute(array($email));
        //On stock les données
        $data = $check->fetch();
        //On regarde s'il existe dans la table ou pas
        $row = $check->rowCount();

        if($row == 0)
        {
            if(strlen($pseudo) <=100)
            {
                if(strlen($email) <= 100)
                {
                    if(filter_var($email, FILTER_VALIDATE_EMAIL))
                    {
                        if($password == $password_retype)
                        {
                            $password = hash('sha256', $spassword);
                            $ip = $_SERVER['REMOTE_ADD'];

                            $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password, ip) VALUES(:pseudo, :email, :password, :ip)');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $paassword,
                                'ip' => $ip
                            ));
                            header('Location:inscription.php?reg_err=succes');
                        }else header('Location:inscription.php?reg_err=password');
                    }else header('Location:inscription.php?reg_err=email');
                }else header('Location:inscription.php?reg_err=email_length');
            }else header('Location:inscription.php?reg_err=pseudo_length');
        }else header('Location:inscription.php?reg_err=already');
    }