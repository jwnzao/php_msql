<?php

    //On démmare la session
    session_star();

    //On la détruit
    session_destroy();

    //On redirige
    header('Loation:index.php');