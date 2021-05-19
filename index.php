<!DOCTYPE html>
    <html lang="en">

        <head>
            
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="NoS1gnal"/>

        <!-- Bootstrap -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <title>Notre première instruction : echo</title>

        </head>
       
        <body>
            <h2>   Formulaire de connexion APRENTIV</h2>

            <div class ="login-form">
                <form action="connexion.php" method="post">
                <h2 clas="text-center">Connexion</h2>
                <div class="form-group"> 
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group"> 
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group"> 
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </div>

                <p class="text-center"> <a href="inscription.php">Inscription</a>
                    <br/>
                    <?php echo "Abonnez-vous"; ?>
                </p>
            </div>
            <style>
                .html{
                    background-image: url("file:///C:/Users/jeff/Downloads/logo-original-v3.svg"),
                        #eee 35% url("media/examples/lizard.png");
                }
                .container::before{
                    content: '';
                    background: url("file:///C:/Users/jeff/Downloads/logo-original-v3.svg");
                    position:absolute;
                    top:0px;
                    left:0px;
                }
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