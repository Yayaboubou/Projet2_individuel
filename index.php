<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta name="author" content="Yasmine Bouslimani, Fabien Labedade, Florent,Luu">
      <meta name="Description" content="The official website of Vapeetcie.com sustain electric cigaret">
      <title>E-liquides Bordeaux</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
      <script src="https://kit.fontawesome.com/c66c66f866.js"></script>
</head>
<body>
      <header>
              <!-- MENU DESKTOP -->
              <?php include_once("_nav.php"); ?>
              <!-- burger -->
              <div class="topnav size-logo">
                    <a href="#home" class="active"><img src="images_header/logo.png" alt="logo Vape&cie"></a>
              <!-- Navigation links (hidden by default) -->
                    <div id="myLinks" class="hover-menu">
                        <a href="#">accueil</a>
                        <a href="#about">nous</a>
                        <a href="#">shop</a>
                        <a href="#contact">contact</a>
                    </div>
            <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                      <i class="fa fa-bars"></i>
                    </a>
              </div>
              <div class="banner">
                  <img src="images_header/neon2.png" alt="">
              </div>
        </header>
        <!-- Partie de Fabien -->
        <!-- ANIMATE TEXT -->
        <div>
            <div id="container">
              Make 
                <div id=flip>
                    <div><div>vape</div></div>
                    <div><div>cie</div></div>
                    <div><div>&</div></div>
                </div>AweSoMe!
          </div>
        </div>
      <!-- SECTION ABOUT -->
      <span class="ancres" id="about"></span>
      <section id="nous" class="background padding-bot">
            <div class="black-filter"> 
                  <div class="d-flex-column section-about">
                      <h2 class="text-center">qui sommes-nous ?</h2>
                        <div class="justify-text">
                            <h3>Boutique de cigarette électronique à Bordeaux - Vape & Cie</h3>
                            <p>Boutique de cigarette électronique à Bordeaux, Vape & Cie met à votre disposition un large choix de cigarettes électroniques (ou vapoteuse, vapote et e-cig). Le magasin fournit tout le nécessaire pour le vapoteur .</p>
                            <p>La vape permet de restituer au fumeur les sensations de la cigarette classique. La consommation de nicotine est ainsi contrôlée et elle épargne, pour le fumeur et son entourage, les effets nocifs du tabac.</p>
                        </div>
                  </div>
            </div>
      </section>


      <?php
        $gallerie = [
            'images-slideshow/Vapor-Bar.png'        => 'Notre shop',
            'images-slideshow/special-sales.png'    => 'Nos évènements',
            'images-slideshow/vapor-market.png'     => 'Nos produits',
        ];
        ?>
      <!-- SLIDESHOW -->  
    <div id="gallery" class="pad-top-slide background padding-bot">
      <!-- Slideshow container -->
      <div class="black-filter">
          <div class="slideshow-container">
              <!-- Full-width images with number and caption text -->
              
                    <?php
                    foreach ($gallerie as $picture => $comment) {
                        echo '<div class="mySlides fade zoom">';
                        echo '<span class ="commentaire">' .$comment . '</span>';
                        echo '<img src=" '. $picture . '" alt= "Notre shop" >';
                        echo '</div>';
                    }
                ?>
                    <!-- <div class="text">Shop</div> -->
            
             
              <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
      </div>
    </div>
      <!-- INFOS -->  
      <div class="text-center d-flex-center-col infos">
            <div class="infos-container">   
                <div class="box-size d-flex border-bot padding-box">
                    <div class="vertical-center hover-rotate">
                        <img class="resize-pics" src="pictograms/smile.png" alt="smiley">
                    </div>
                        <div class="space-btw-text vertical-center hover-effect">
                            <h4>Services dédiés</h4>
                                <ul>
                                    <li>06 68 72 73 96</li>
                                    <li><a href="#" title="Notre mail"><i class="far fa-envelope-open"></i>  Email</a></li>
                                </ul>
                        </div>
                </div>
                <div class="box-size d-flex border-bot padding-box">
                    <div class="vertical-center hover-rotate-neg">
                        <img class="resize-pics" src="pictograms/delivery-truck.png" alt="Camion de livraison">
                    </div>  
                        <div class="space-btw-text vertical-center">
                                <div>
                                    <h4>Expédition gratuite</h4>
                                    <ul>
                                        <li>Commandes à partir de 50 €</li>
                                    </ul>
                                </div>
                        </div>
                </div>
                <div class="box-size d-flex border-bot padding-box">
                    <div class="vertical-center hover-rotate">
                        <img class="resize-pics" src="pictograms/checked-symbol.png" alt="Symbole checked">
                    </div>
                        <div class="space-btw-text vertical-center">
                                <h4>Qualité</h4>
                                <ul>
                                    <li>Produits authentiques</li>
                                </ul>
                        </div>
                </div>
                <div class="box-size d-flex padding-box">
                    <div class="vertical-center hover-rotate-neg">
                        <img class="resize-pics" src="pictograms/lock.png" alt="Symbole cadenas">
                    </div>  
                        <div class="space-btw-text vertical-center"> 
                                <h4>Paiements sécurisés</h4>
                                <ul>
                                    <li>Tous vos paiements sont réalisés de manière sécurisée</li>
                                </ul>
                        </div>
                </div>
            </div>  
      </div>
<!-- Partie de Yasmine -->
<span class="ancres" id="contact"></span>
<section id="form" class="container1_contact">
    <div class="container2_contact">
        <form action="form.php" method="get" class="container1_form">
            <div class="titlesouspartie">
                <h2>contactez-nous</h2>
            </div>
            <div class="prenomnom">
                <div class="box-input rs1-wrap-input100">
                    <input id="first-name" class="input100" type="text" name="first-name" placeholder="Prénom *"
                        required pattern ="{A-Za-z}" title ="pas de caractères spéciaux">
                    <span class="move_input"></span>
                </div>
                <div class="box-input rs2-wrap-input100">
                    <input class="input100" type="text" name="last-name" placeholder="Nom *" required pattern ="{A-Za-z}" title ="pas de cractère spéciaux">
                    <span class="move_input"></span>
                </div>
            </div>
            <label class="label-input100" for="email">Email *</label>
            <div class="box-input">
                <input id="email" class="input100" type="email" name="email" placeholder="example@email.com"
                    required pattern ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                <span class="move_input"></span>
            </div>
            <label class="label-input100" for="phone">Téléphone *</label>
            <div class="box-input">
                <input id="phone" class="input100" type="tel" name="phone" placeholder="06 xx xx xx xx" required pattern =".{6,}" >
                <span class="move_input"></span>
            </div>
            <label class="label-input100" for="message">Message *</label>
            <div class="box-input">
                <textarea id="message" class="input100" type ="text" name="message" placeholder="Ecrivez votre message"
                    required></textarea>
                <span class="move_input"></span>
            </div>
            <div class="container_btn">
                <input class="interieur_btn" type="submit">
        
            </div>
        </form>
        <div class="container2_form">
            <div class="adressetelmap">
                <span class="txt1">
                    Adresse
                </span>
                <span class="txt2">
                    7 Place Stalingrad, 33100 Bordeaux
                </span>
            </div>
            <div class="adressetelmap">
                <span class="txt1">
                    Notre téléphone
                </span>
                <span class="txt2">
                    06 68 72 73 96
                </span>
            </div>
            <div class="plan_acces">
                <span class="lnr lnr-map-marker">
                </span>
                <span class="txt3">
                    <a href="https://goo.gl/maps/UPQ5BmbNLxisBaCo8" target="blank">PLAN D'ACCÈS</a>
                </span>
            </div>
        </div>
    </div>
</section>
<div class="container_horaires">
    <div class="titlesouspartie">
        <h3>horaires d'ouverture</h3>
    </div>
    <div class="background-black">
        <div class="container_jour_horaire">
            <div class="jour">
                <p class="txt4">Lundi - Vendredi</p> 
                <p class="txt5">9h30 à 19h30</p>
            </div>
            <div class="jour">
                <p class="txt4">Samedi</p>
                <p class="txt5">10h à 12h et 14h à 19h</p>
            </div>
        </div>
    </div>
</div>
<?php include_once("_footer.php"); ?>
<script src="script.js"></script>
</body>
</html>



