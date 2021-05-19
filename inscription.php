<!DOCTYPE html>
    <html lang="en">
        <head>
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="NoS1gnal"/>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <title>  Inscription</title>

        </head>
        <body>
            <h2 style:text-align="center";>Inscription APRENTIV</h2>

            <div class ="login-form">

                <?php
                    if(isset($_GET['reg_err']))
                    {
                        $err = htmlspecialchars($_GET['reg_err']);
                        switch($err)
                        {
                            case 'succes':
                            ?>
                                <div class="alert alert-succes">
                                    <strong>Succès</strong> inscription réussie !
                                </div>
                            <?php
                            break;

                            case 'password':
                            ?>
                                <div class="alert alert-dabger">
                                    <strong>Erreur</strong> mot de passe différent
                                </div>
                            <?php
                            break;
                            case 'email':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong>email non valide
                                </div>
                            <?php
                            break;
                            case 'email_length':
                            ?>
                                <div class="alert alert-danger"
                                    <strong>Erreur</strong>email trop long
                                </div>
                            <?php
                            break;
                            case 'pseudo_length':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong>pseudo trop long
                                </div>
                            <?php
                            break;
                            case 'already':
                            ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong>compte déjà existant
                                </div>
                            <?php
                            break;
                        }
                    }
                ?>
                <form action="inscription_traitement.php" method="post">
                    <h2 class="text-center">Inscription</h2>
                    <div class="form-group">
                        <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                    </div>
                    <div class="form-group"> 
                        <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                    </div>
                    <div class="form-group"> 
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                    </div>
                    <div class="form-group"> 
                        <input type="password" name="password_retype" class="form-control" placeholder="Conformez votre mot de passe" required="required" autocomplete="off">
                    </div>
                    <div class="form-group"> 
                        <button type="submit" class="btn btn-primary btn-block">Inscription</button> 
                    </div> 

                    <p class="text-center"> <a href="connexion.php">Connexion</a>
                        <br/>
                        <?php echo "Abonnez-vous"; ?>
                    </p> 
                </form>
            </div>
            <style>
                /*.h2{
                    text-align:center;
                }*/
                .login-form{
                    width: 340px;
                    margin:50px auto;
                }
                .login-form form {
                    margin-bottom:15px;
                    background-image: linear-gradient(rgba(0, 255, 0), rgba(255, 255, 0), rgba(0, 0, 255)),
                  url("file:///C:/Users/jeff/Downloads/logo-original-v3.svg");
                    box-shadow:0px 2px rgba(0,0,0,0.3);
                    padding:30px;
                }
                .login-form h2 {
                    margin: 0 0 15px;
                }
                .form-control, .btn{
                    min-height: 38px;
                    border-radius: 2px;
                }
                .btn {
                    font-size:15px;
                    font-weight:bold;
                }
            </style>
        </body>
    </html>