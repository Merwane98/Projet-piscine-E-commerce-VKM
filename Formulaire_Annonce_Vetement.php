<?php
    $Nom = isset($_POST["Nom"])?$_POST["Nom"] : ""; //if then else
    $Couleur = isset($_POST["Couleur"])?$_POST["Couleur"] : "";
    $Type = isset($_POST["Type"])?$_POST["Type"] : "";
    $Tel = isset($_POST["Tel"])?$_POST["Tel"] : "";
    $Mail = isset($_POST["Mail"])?$_POST["Mail"] : "";
    $Etat = isset($_POST["Etat"])?$_POST["Etat"] : "";
    $Prix = isset($_POST["Prix"])?$_POST["Prix"] : "";
 $erreur = "";
    if($Nom == "") {$erreur .= "<p><b>Le champ Nom est vide. Merci de le renseigner.</b><br></p>";}
    if($Couleur == "") {$erreur .= "<p><b>Le champ Couleur est vide. Merci de le remplir.</b><br></p>";}
    if($Type == "") {$erreur .= "<p><b>Le champ Type est vide. Merci de le renseigner.</b><br></p>";}
    if($Tel == "" && $Mail == "") {$erreur .= "<p><b>Les champs Téléphone et Adresse mail sont vides. Merci de renseigner au moins un des deux moyens de contact.</b><br></p>";}
    if($Etat == "") {$erreur .= "<p><b>Le champ Etat est vide. Merci de le renseigner.</b><br></p>";}
    if($Prix == "") {$erreur .= "<p><b>Le champ Prix est vide. Merci de le renseigner.</b><br></p>";}
    if ($erreur == "") {echo '<td><img src="titresite.png" width="400" height="70">'; echo "<p><b>Votre annonce concernant Sports et loisirs ".$Nom." est en ligne.<br>Bonne vente !</b></p>";echo '<td><a href="ECE_AMAZON.html"><img src="retour.png" width="150" height="150" border="10"> </a></td>';} 
 else {
 echo "Erreur : $erreur";
 }
?>
