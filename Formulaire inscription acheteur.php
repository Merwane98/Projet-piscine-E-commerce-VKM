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
    if($civilite == "") {$erreur .= "Le champ Civilité est vide. Merci de le renseigner <br>";}
    if($nom == "") {$erreur .= " Le champ Nom est vide. Merci de le remplir <br>";}
    if($prenom == "") {$erreur .= "Le champ Prénom est vide. Merci de le renseigner <br>";}
    if($anniversaire == "") {$erreur .= "Le champ Date de Naissance est vide. Merci de le renseigner <br>";}
    if($telephone == "") {$erreur .= "Le champ Telephone est vide. Merci de le renseigner <br>";}
    if($adresse == "") {$erreur .= "Le champ Adresse est vide. Merci de le renseigner <br>";}
    if($cpostal == "") {$erreur .= "Le champ Code postal est vide. Merci de le renseigner <br>";}
    if($ville == "") {$erreur .= "Le champ Ville est vide. Merci de le renseigner <br>";}
    if($mail1 == "") {$erreur .= "Le champ Adresse est vide. Merci de le renseigner <br>";}
    if($mail2 != $mail1) {$erreur .= "Adresse mail de vérification différente de la précédente. Merci de le modifier <br>";}
    if($mdp1 == "") {$erreur .= "Le champ Mot de passe est vide. Merci de le renseigner <br>";}
    if($mdp2 != $mdp1) {$erreur .= "Mot de passe de vérification différent du précedent. Merci de le modifier <br>";}
    if ($erreur == "") {echo "Bienvenue ".$prenom.", vous êtes bien inscrit ! <br>";}
 else {
 echo "Erreur : $erreur";
 }
?>
