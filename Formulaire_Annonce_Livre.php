<?php
    $Titre = isset($_POST["Titre"])?$_POST["Titre"] : ""; //if then else
    $Auteur = isset($_POST["Auteur"])?$_POST["Auteur"] : "";
    $AnneeParution = isset($_POST["AnneeParution"])?$_POST["AnneeParution"] : "";
    $Edition = isset($_POST["Edition"])?$_POST["Edition"] : "";
    $Tel = isset($_POST["Tel"])?$_POST["Tel"] : "";
    $Mail = isset($_POST["Mail"])?$_POST["Mail"] : "";
    $Etat = isset($_POST["Etat"])?$_POST["Etat"] : "";
    $Prix = isset($_POST["Prix"])?$_POST["Prix"] : "";
 $erreur = "";
    if($Titre == "") {$erreur .= "<p><b>Le champ Titre est vide. Merci de le renseigner.</b><br></p>";}
    if($Auteur == "") {$erreur .= "<p><b>Le champ Auteur est vide. Merci de le remplir.</b><br></p>";}
    if($AnneeParution == "") {$erreur .= "<p><b>Le champ Année de parution est vide. Merci de le renseigner.</b><br></p>";}
    if($Edition == "") {$erreur .= "<p><b>Le champ Edition est vide. Merci de le renseigner.</b><br></p>";}
    if($Etat == "") {$erreur .= "<p><b>Le champ Etat est vide. Merci de le renseigner.</b><br></p>";}
    if($Tel == "" && $Mail == "") {$erreur .= "<p><b>Les champs Téléphone et Adresse mail sont vides. Merci de renseigner au moins un des deux moyens de contact.</b><br></p>";}
    if($Prix == "") {$erreur .= "<p><b>Le champ Prix est vide. Merci de le renseigner.</b><br></p>";}
    if ($erreur == "") {echo '<td><img src="titresite.png" width="400" height="70">'; echo "<p><b>Votre annonce concernant le livre ".$Titre." est en ligne.<br>Bonne vente !</b></p>";echo '<td><a href="ECE_AMAZON.html"><img src="retour.png" width="150" height="150" border="10"> </a></td>';} 
 else {
 echo "Erreur : $erreur";
 }
?>
