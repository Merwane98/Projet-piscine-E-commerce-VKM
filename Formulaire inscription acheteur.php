  <?php
    $civilite = isset($_POST["civilite"])?$_POST["civilite"] : ""; //if then else
    $nom = isset($_POST["nom"])?$_POST["nom"] : "";
    $prenom = isset($_POST["prenom"])?$_POST["prenom"] : "";
    $anniversaire = isset($_POST["anniversaire"])?$_POST["anniversaire"] : "";
    $telephone = isset($_POST["telephone"])?$_POST["telephone"] : "";
    $adresse = isset($_POST["adresse"])?$_POST["adresse"] : "";
    $cpostal = isset($_POST["cpostal"])?$_POST["cpostal"] : "";
    $ville = isset($_POST["ville"])?$_POST["ville"] : "";
    $mail1 = isset($_POST["mail1"])?$_POST["mail1"] : "";
    $mail2 = isset($_POST["mail2"])?$_POST["mail2"] : "";
    $mdp1 = isset($_POST["mdp1"])?$_POST["mdp1"] : "";
    $mdp2 = isset($_POST["mdp2"])?$_POST["mdp2"] : "";
 $erreur = "";
    if($anniversaire >= '2001-04-30') {$erreur .= "<p><b>Vous n'avez pas 18 ans. Merci de patienter jusqu'à votre majorité.</b><br></p>";}
    if($civilite == ".") {$erreur .= "<p><b>Le champ Civilité est vide. Merci de le renseigner.</b><br></p>";}
    if($nom == "") {$erreur .= "<p><b>Le champ Nom est vide. Merci de le remplir.</b><br></p>";}
    if($prenom == "") {$erreur .= "<p><b>Le champ Prénom est vide. Merci de le renseigner.</b><br></p>";}
    if($anniversaire == "") {$erreur .= "<p><b>Le champ Date de Naissance est vide. Merci de le renseigner.</b><br></p>";}
    if($telephone == "") {$erreur .= "<p><b>Le champ Telephone est vide. Merci de le renseigner.</b><br></p>";}
    if($adresse == "") {$erreur .= "<p><b>Le champ Adresse est vide. Merci de le renseigner.</b><br></p>";}
    if($cpostal == "") {$erreur .= "<p><b>Le champ Code postal est vide. Merci de le renseigner.</b><br></p>";}
    if($ville == "") {$erreur .= "<p><b>Le champ Ville est vide. Merci de le renseigner.</b><br></p>";}
    if($mail1 == "") {$erreur .= "<p><b>Le champ Adresse est vide. Merci de le renseigner.</b><br></p>";}
    if($mail2 != $mail1) {$erreur .= "<p><b>Adresse mail de vérification différente de la précédente. Merci de le modifier.</b><br></p>";}
    if($mdp1 == "") {$erreur .= "<p><b>Le champ Mot de passe est vide. Merci de le renseigner.</b><br></p>";}
    if($mdp2 != $mdp1) {$erreur .= "<p><b>Mot de passe de vérification différent du précedent. Merci de le modifier.</b><br></p>";}
    if ($erreur == "") {echo '<td><img src="logoadmin.png" width="50" height="50">';echo '<td><img src="titresite.png" width="400" height="70">';echo '<td><img src="panier.png" width="50" height="50">'; echo "<p><b>Bienvenue ".$prenom.", votre compte acheteur vient d'être créé !<br>En vous souhaitant de bons achats !</b></p>";echo '<td><a href="ECE_AMAZON.html"><img src="vendeur.png" width="150" height="150" border="10"> </a></td>';} 
 else {
 echo "Erreur : $erreur";
 }
?>
