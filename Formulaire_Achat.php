 <?php
    $civilite = isset($_POST["civilite"])?$_POST["civilite"] : ""; //if then else
    $nom = isset($_POST["nom"])?$_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])?$_POST["prenom"] : "";
    $telephone = isset($_POST["telephone"])?$_POST["telephone"] : "";
    $adresse = isset($_POST["adresse"])?$_POST["adresse"] : "";
    $cpostal = isset($_POST["cpostal"])?$_POST["cpostal"] : "";
    $ville = isset($_POST["ville"])?$_POST["ville"] : "";
    $mail1 = isset($_POST["mail1"])?$_POST["mail1"] : "";
    $mdp1 = isset($_POST["mdp1"])?$_POST["mdp1"] : "";
    $cb = isset($_POST["cb"])?$_POST["cb"] : "";
 $erreur = "";
    if($civilite == ".") {$erreur .= "<p><b>Le champ Civilité est vide. Merci de le renseigner.</b><br></p>";}
    if($nom == "") {$erreur .= "<p><b>Le champ Nom est vide. Merci de le remplir.</b><br></p>";}
    if($prenom == "") {$erreur .= "<p><b>Le champ Prénom est vide. Merci de le renseigner.</b><br></p>";}
    if($telephone == "") {$erreur .= "<p><b>Le champ Telephone est vide. Merci de le renseigner.</b><br></p>";}
    if($adresse == "") {$erreur .= "<p><b>Le champ Adresse est vide. Merci de le renseigner.</b><br></p>";}
    if($cpostal == "") {$erreur .= "<p><b>Le champ Code postal est vide. Merci de le renseigner.</b><br></p>";}
    if($ville == "") {$erreur .= "<p><b>Le champ Ville est vide. Merci de le renseigner.</b><br></p>";}
    if($mail1 == "") {$erreur .= "<p><b>Le champ Adresse est vide. Merci de le renseigner.</b><br></p>";}
    if($mdp1 == "") {$erreur .= "<p><b>Le champ Mot de passe est vide. Merci de le renseigner.</b><br></p>";}
    if($cb == "") {$erreur .= "<p><b>Le champ Numéro de carte banciare est vide. Merci de le renseigner.</b><br></p>";}
    if ($erreur == "") {echo '<td><img src="logoadmin.png" width="50" height="50">';echo '<td><img src="titresite.png" width="400" height="70">'; echo "<p><b>La commande concernant intitulée ".$prenom." vient d'être prsie en charge. <br>Vous la recevrez sous 4 jours ouvrés.</b></p>";echo '<td><a href="ACHETEURPageAccueil.php"><img src="retour.png" width="150" height="150" border="10"> </a></td>';} 
 else {
 echo "Erreur : $erreur";
 }
?>