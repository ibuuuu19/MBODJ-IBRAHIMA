
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    

    <link rel="icon" type="image/JPEG" href="favicon">
    <title>Mon Site Web</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="styl.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- fevicon -->
  <link rel="icon" href="images/fevicon.png" type="imag
  
  e/gif" />
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
<header id="full_bg">
    <!-- header inner -->
    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
      <nav class="navigation navbar navbar-expand-md navbar-dark ">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>                                                                                                                                                                     

          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index1.php">Accueil</a>
           </li>
             <li class="nav-item ">
                <a class="nav-link" href="boutiq.php">Boutique</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="about.php">A propos</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="contact.php">Nous contacter</a>
             </li>
             <li class="nav-item">
              <a class="nav-item" href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="false"></i></a>
           </li>   
          </ul>
       </div>
    </nav>
<li class="nav-item">
   <span id="compteurGeneral1">0</span><a  class="nav-link" href="Panier.php"><span id="PanierGeneral1" class="glyphicon glyphicon-shopping-cart"></span></a>
</li>
</header><BR></BR>

 
    

<form method="post" action="traitement.php">
<CEnter>
<h1>AUTO ECOLE FAGARU</h1>
    <H3>Achat - Vente de Voitures - Import - Export</H3>
    <h2>NINEA : 007653175. RC SN . DKR .2002 .A. 1319</h2>
    <H2>Tél: 77 531 65 96 //  78 126 27 19</H2><BR>

    
   
   <h1>CONTRAT DE LOCATION D'UN VEHICULE</h1>
    
    <label for="prenom"></label> <label for="nom"></label>
    <input type="text"  placeholder="Prenom" id="prenom" name="prenom" required> 
    <input type="text" placeholder="Nom" id="nom" name="nom" required><br><br>

    <label for="Date & Lieu de Naissance">Né(e) le:</label> <label for="Profession"></label>
    <input type="date" placeholder="Date" id="Date" name="Date" required> 
    <input type="text" placeholder="Lieu De Naissance" id="Lieu_De_Naissance" name="Lieu_De_Naissance" required>
    <input type="text" placeholder="Profession" id="Profession" name="Profession" required><br><br>

    <label for="Numero_De_Permis"></label>  <label for="telephone"></label></label>  <label for="email"></label>
    <input type="Numero_De_Permis" placeholder="N° Permis" id="Numero_De_Permis" name="Numero_De_Permis" required>
    <input type="telephone" placeholder="Telephone" id="telephone" name="telephone">
    <input type="email" placeholder="Email" id="email" name="email"><br><br>

    <label for="date_delivration">Délivrée le:</label>  <label for="adresse"></label>
    <input type="date" id="date_delivration" name="date_delivration"> 
    <input type="adresse" placeholder="Adresse" id="adresse" name="adresse"> 
    <input type="marque" placeholder="Marque & N° Véhicule" id="marque" name="marque" required><br><br>


        <label for="message"></label>
        <textarea id="message" placeholder="Message" name="message"></textarea><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <form method="post" action="calcul.php">
    <label for="date_depart">Départ le:</label>  <label for="heure"></label><br>
    <input type="date" id="date_depart" name="date_depart" required> <input type="heure" placeholder="Heure" id="heure" name="heure"> <br>

    <label for="date_retour">Retour le:</label>  <label for="heure"></label><br>
    <input type="date" id="date_retour" name="date_retour" required> <input type="heure"  placeholder="Heure" id="heure" name="heure"> <br>
    <input type="submit" value="Voir Durée Réel">
   
</form>

 
    </center>
</body>
</html>

