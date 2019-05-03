<?php
session_start();
?>
<?php
     $mail=$_SESSION['a'];
     $mysqli = new mysqli('localhost', 'root', '', 'eceamazon');
     $mysqli->set_charset("utf8");
     //Tu recuperes l'id du contact
     $id = $_GET["id"];
     
      

     $requete = "SELECT * FROM Article WHERE ID=".$id;
              $resultat = $mysqli->query($requete);              
              while ($ligne = $resultat->fetch_assoc()) { 

              	$titre = $ligne['Titre'];
     			      $description = $ligne['Description'];
     			      $prix = $ligne['Prix'];
                $image = $ligne['URLimage'];

              	$sql = "INSERT INTO panier VALUES ($id, '$titre', '$image', '$description', 1, '$prix', '$mail')";
              	mysqli_query ($mysqli, $sql) or die ('Erreur SQL !'.$sql.'<br />'.mysqli_error($mysqli));
              	 //mysqli_query($mysqli, "INSERT INTO panier VALUES ('.$id.', '.$titre.', '.$description.', 1, '.$prix.', 'acheteur')");
                       
              
             }

             
             header('Location: ACHETEURPageAccueil.php');

                     

   
       $mysqli->close();    
     
     //Requete SQL pour supprimer le contact dans la base
     //mysqli_query($mysqli, "INSERT INTO panier () VALUES (".$id.")");
     //Et la tu rediriges vers ta page contacts.php pour rafraichir la liste
     //echo 'Article ajouté au panier. Veuillez cliquez <a href="ACHETEURPageAccueil.php">ici</a> pour retourner à la page des articles';

     ?>

     