<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ERREUR</title>
    </head>
    <body>
    
        <?php
    if ((isset($_POST['mdp']) AND $_POST['mdp'] ==  "strateur") AND (isset($_POST['identifiant']) AND $_POST['identifiant'] ==  "admini") )// Si le mot de passe est bon
    {
    header('Location: pageadmin.php');
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>veuillez réessayer </p>';
    }
    ?>
    
        
    </body>
</html>
