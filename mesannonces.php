<!DOCTYPE html>
<html>
<head>
       <meta charset="utf-8">
       <title>ECE AMAZON</title>
       <style type="text/css">
                            #menuderoulant, #menuderoulant ul{
              padding:0px;
              margin:0px;
              list-style:none;
              text-align:left;
              }
              #menuderoulant li{
              display:inline-block;
              position:relative;
              border-radius:30px 30px 0 0;
              }
              #menuderoulant ul li{
              display:inherit;
              border-radius:0;
              text-align:center;

              }
              
              #menuderoulant ul{
              position:absolute;
              z-index: 1000;
              max-height:0;
              left: 0;
              right: 0;
              overflow:hidden;
              -moz-transition: .8s all .3s;
              -webkit-transition: .8s all .3s;
              transition: .8s all .3s;
              }
              #menuderoulant li:hover ul{
              max-height:15em;
              }
              /* background des liens menus */
              #menuderoulant li:first-child{
              background-color: #F9980C;
              }
              #menuderoulant li:nth-child(2){
              background-color: #F9980C;
              }
              /* background des liens sous menus */
              #menuderoulant li:first-child li{
              background:#F9980C;
              }
              #menuderoulant li:nth-child(2) li{
              background:#F9980C;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulant li:first-child:hover, #menuderoulant li:first-child li:hover{
              background:#F9980C;
              }
              #menuderoulant li:nth-child(2):hover, #menuderoulant li:nth-child(2) li:hover{
              background:#F9980C;
              }
              
              /* les a href */
              #menuderoulant a{
              text-decoration:none;
              display:block;
              padding:8px 32px;
              color:#fff;
              font-family:arial;
              }
              #menuderoulant ul a{
              padding:8px 0;
              }
              #menuderoulant li:hover li a{
              color:#fff;
              text-transform:inherit;
              }
              #menuderoulant li:hover a, #menuderoulant li li:hover a{
              color:#000;
              }
              #menuderoulantdroit, #menuderoulantdroit ul{
              padding:0px;
              margin:0px;
              list-style:none;
              text-align:right;
              }
              #menuderoulantdroit li{
              display:inline-block;
              position:relative;
              border-radius:30px 30px 0 0;
              }
              #menuderoulantdroit ul li{
              display:inherit;
              border-radius:0;
              text-align:center;

              }
              
              #menuderoulantdroit ul{
              position:absolute;
              z-index: 1000;
              max-height:0;
              left: 0;
              right: 0;
              overflow:hidden;
              -moz-transition: .8s all .3s;
              -webkit-transition: .8s all .3s;
              transition: .8s all .3s;
              }
              #menuderoulantdroit li:hover ul{
              max-height:15em;
              }
              /* background des liens menus */
              #menuderoulantdroit li:first-child{
              background-color: #F9980C;
              }
              #menuderoulantdroit li:nth-child(2){
              background-color: #F9980C;
              }
              /* background des liens sous menus */
              #menuderoulantdroit li:first-child li{
              background:#F9980C;
              }
              #menuderoulantdroit li:nth-child(2) li{
              background:#F9980C;
              }
              
              /* background des liens menus et sous menus au survol */
              #menuderoulantdroit li:first-child:hover, #menuderoulantdroit li:first-child li:hover{
              background:#F9980C;
              }
              #menuderoulantdroit li:nth-child(2):hover, #menuderoulantdroit li:nth-child(2) li:hover{
              background:#F9980C;
              }
              
              /* les a href */
              #menuderoulantdroit a{
              text-decoration:none;
              display:block;
              padding:8px 32px;
              color:#fff;
              font-family:arial;
              }
              #menuderoulantdroit ul a{
              padding:8px 0;
              }
              #menuderoulantdroit li:hover li a{
              color:#fff;
              text-transform:inherit;
              }
              #menuderoulantdroit li:hover a, #menuderoulantdroit li li:hover a{
              color:#000;
              }
              #header{
                     background-color: white;
                     color: grey;
                     text-align: center;
                     padding: 5px;
                     } 
              #nav{
                     line-height: 30px;
                     background-color: #eeeeee;
                     height: 100px;
                     width: 1550px;
                     float: left;
                     padding: 5px;
                     } 
              #bande{
                     line-height: 30px;
                     background-color: #F9980C;
                     height: 2px;
                     width: auto;
                     float: center;
                     padding: 5px;
                     } 
              #section{
                     background-color: #cccccc;
                     width: auto;
                     float: left;
                     padding: 5px;
                     height: 550px;
                     } 
              #bandeacceuil{
                     background-color: white;
                     color: grey;
                     text-align: center;
                     width: auto;
                     float: center;
                     padding: 10px;
                     height: 300px;
                     } 
              #footer{
                     background-color: #F9980C;
                     color: white;
                     clear: both;
                     text-align: center;
                     padding: 10px;
                     }
              #categoriegauche{
                     background-color: white;
                     color: grey;
                     text-align: left;
                     padding: 5px;
                     } 
              #categoriedroite{
                     background-color: white;
                     color: grey;
                     text-align: right;
                     padding: 5px;
                     } 
              .logogauche {
                      float: left;
                     padding-right: 30px;
                     }      
              .logodroite {
                      float: right;
                     padding-right: 5px;
                     }      
              .logocentre {
                      float: center;
                     padding-right: 5px;
                     }      
              div.float {
                                    float: left;
                                   }
 ///////////////////////////////////////////////////////////////////////////  
       VISHNU ICI TU DOIS AJOUTER LA PHOTO de FOND que le vendeur a choisit
       body{background-image:url("IIIIIIICIIIIIII")}
//////////////////////////////////////////////////////////////////////////////////////                                  
        </style>
</head>
<body>

       <div id="header">
              <a href="PageAccueil.php"><img class="logogauche" src="logodeconnexion.png" alt="logosite" width="50" height="50"></a>
               <img class="logocentre" src="titresite.png" alt="titre" width="400" height="70">
 /////////////////////////////////////////////////////////////////////////////////////:              VISHNU ICI TU DOIS AJOUTER LA PHOTO DU VENDEUR 
//////////////////////////////////////////////////////////////////////////////////////
       </div>
       


<div class="float">
       <ul id="menuderoulant">
        <li><a href="#">GERER LES ANNONCES</a>
              <ul>
                     <li><a href="Formulaire_Annonce_Vendeur.html">Ajouter une annonce</a></li>
                     <li><a href="mesannonces.php">Supprimer une annonce</a></li>
              </ul>
       </li>
       
</ul>
</div>
<ul id="menuderoulantdroit">
       <li><a href="#">MON COMPTE</a>
              <ul>
                     <li><a href="pagecoordonnee_vendeur.php">Mes Informations</a></li>
                     <li><a href="mesannonces.php">Mes Annonces</a></li>
              </ul>
       </li>
       <li><a href="#">CONTACT</a>
              <ul>
                     <li><a href="aproposdenous.php">A propos de nous</a></li>
                     <li><a href="pagecontact.php">Nous contacter</a></li>
                     <li><a href="Formulaire_Probleme_Vendeur.html">Signaler un problème</a></li>
              </ul>

       </li>
</ul>
<div id="bande">
       </div>
<br><br><br>
<h2>Voici la liste de VOS annonces, vous pouvez les supprimer en cliquant sur la corbeille qui se trouve près de chaque nom. </h2>

</p>

       </div>
       <div id="footer">
              Droit d'auteur | Copyright &copy; 2019, J.KISHOR N.VISHNUARAN R.MERWANE
       </div>
</body>
</html>