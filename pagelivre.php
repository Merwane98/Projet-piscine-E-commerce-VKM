 <?php
              define('DB_SERVER','localhost');
              define('DB_USER','root');
              define('DB_PASS','');

       //identifier le nom de base de données
       $database = "Livre";

       //connecter l'utilisateur dans BDD
       $db_handle = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
       $db_found = mysqli_select_db($db_handle,$database);
?>
<html>
<head>
       <meta charset="utf-8">
       <title>ECE LIVRES</title>
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
              #section{
                     background-color: #cccccc;
                     width: auto
                     float: left;
                     padding: 5px;
                     height: 550px;
                     } 
              #footer{
                     background-color: grey;
                     color: black;
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
        </style>
</head>
<body>
       <div id="header">
              <img class="logogauche" src="logoadmin.png" alt="logosite" width="50" height="50">
               <img class="logocentre" src="logolivre.png" alt="titre" width="400" height="70">
               <img class="logodroite" src="panier.png" alt="titre" width="50" height="50">
       </div>
       


<div class="float">
       <ul id="menuderoulant">
       <li><a href="#">CATEGORIES</a>
              <ul>
                     <li><a href="#">Livres</a></li>
                     <li><a href="#">Musique</a></li>
                     <li><a href="#">Vêtements</a></li>
                     <li><a href="#">Sports et Loisir</a></li>
              </ul>
       </li>
       <li><a href="#">PROMOTIONS</a>
              <ul>
                     <li><a href="#">Ventes FLASH</a></li>
                     <li><a href="#">Saint Valentin</a></li>
                     <li><a href="#">Noël</a></li>
                     <li><a href="#">Fête des pères/mères</a></li>
              </ul>

       </li>
       
</ul>
</div>
<ul id="menuderoulantdroit">
       <li><a href="#">MON COMPTE</a>
              <ul>
                     <li><a href="#">Connexion</a></li>
                     <li><a href="#">Inscription</a></li>
              </ul>
       </li>
       <li><a href="#">CONTACT</a>
              <ul>
                     <li><a href="#">A propos de nous</a></li>
                     <li><a href="#">Nous contacter</a></li>
                     <li><a href="#">Signaler un problème</a></li>
              </ul>

       </li>
</ul>
<br><br><br><br><br><br>
      
              <?php
                     $sql = "SELECT * FROM Livre";
                     $result = mysqli_query($db_handle,$sql);
                     $data = mysqli_fetch_array($result);           
                     //$data = mysqli_fetch_array($db_handle,$result);

                     //mysqli_free_result($result);
                     
                     while ($data)
                            {
                                   echo 'Identifiant : '.$data['ID'].'<br />';
                                   echo 'Titre : '.$data['Titre'].'<br />';
                                   echo 'Auteur : '.$data['Auteur'].'<br />';
                                   echo 'Année de Parution : '.$data['AnneeParution'].'<br />';
                                   echo 'Edition : '.$data['Edition'].'<br />';
                            }
                     mysqli_close($db_handle);
              ?>
              
       

       
</p>

       </div>
       <div id="footer">
              Droit d'auteur | Copyright &copy; 2019, J.KISHOR N.VISHNU R.MERWANE
       </div>



</body>
</html>