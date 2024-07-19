<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia Zoo</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7.4.1/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- header -->

    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-paw"></i> zoo</a>
        <nav class="navbar">
            <a href="#home">Accueil</a>
            <a href="#about">À propos</a>
            <a href="#gallery">Galerie</a>
            <a href="#animal">Animaux</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <div id="login-btn" class="fas fa-user"></div>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
        <!-- login form -->
     <form action="" class="login-form">
        <h3>Connexion</h3>
        <input type="email" placeholder="Adresse mail" class="box">
        <input type="Mot de passe" placeholder="Mot de passe" class="box">
        <div class="remember">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me">Se souvenir de moi</label>
        </div>
        <a href="#" class="btn">ME CONNECTER</a>
    </form>
    </header>
    <!-- end -->

<!-- home -->
<section class="home" id="home">
    <div class="content">
        <h3>PROFITER AU PARC ARCADIA <br>
         D'AVANTAGES EXCLUSIFS</h3>
        <a href="#" class="btn">Rencontrer Le Zoo</a>
    </div>
</section>
<!-- end -->
<!-- about -->
<section class="about" id="about">
    <h2 class="deco-title">À propos de nous</h2>
    <div class="box-container">
        <div class="image">
            <img src="image/paon.jpg" alt="">
    </div>
        <div class= "content">
            <h3 class="title">vous pouvez trouver toutes les espèces les plus populaires </h3>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Nous Éduquons</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Nous Jouons</h3>
                </div>
                <div class="icons">
                    <i class="fas fa-book-open"></i>
                    <h3>Apprendre À Connaître</h3>
                </div>
            </div>
        </div>
    </div>
</section>    


<!-- end -->

<!-- gallary -->
<section class="gallery" id="gallery">

    <h2 class="heading">Galerie</h2>

    <div class="swiper gallery-slider">

        <div class="swiper-wrapper">

             <div class="swiper-slider slide">
                 <div class="image">
                     <img src="image/tortue.jpg" alt="">
                 </div>
             </div>

             <div class="swiper-slider slide">
                 <div class="image">
                    <img src="image/hibou.jpg" alt="">
                 </div>
             </div>

             <div class="swiper-slider slide">
                 <div class="image">
                        <img src="image/Pingouin.jpg" alt="">
                 </div>
             </div>
                <div class="swiper-slider slide">
                    <div class="image">
                     <img src="image/perroquets.jpg" alt="">
                    </div>
                </div>
        </div>
         <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

     </div>
</section>
<!-- end -->

<!-- animals -->
<section class="animal" id="animal">
    <h2 class="heading">ANIMAUX</h2>
    <div class="box-container">
        <div class="box">
            <img src="image/Hippopotame.jpg" alt="">
            <div class="content">
                <h3>Hippopotame</h3>
                <a href="#" class="btn">Voir les détails</a>
            </div>
        </div>
        <div class="box">
            <img src="image/Singe Paresseux.jpg" alt="">
            <div class="content">
                <h3>Singe Paresseux</h3>
                <a href="#" class="btn">Voir les détails</a>
            </div>
        </div>
        <div class="box">
            <img src="image/gorri.jpg" alt="">
            <div class="content">
                <h3>gorri</h3>
                <a href="#" class="btn">Voir les détails</a>
            </div>
        </div>
        <div class="box">
            <img src="image/singe.jpg" alt="">
            <div class="content">
                <h3>singe</h3>
                <a href="#" class="btn">Voir les détails</a>
            </div>    
        </div>
    </div>
</section>
<!-- end -->
<!-- banner -->
<section class="banner">
    <div class="row">
        <div class="content">
            <h3>Profiter du temps avec votre animal de compagnie</h3>
            <p>Pour le moment, le parc dispose de plusieurs services : restauration, visite des habitats avec un guide (gratuit), visite du zoo en petit train.</p>
        </div>
        <div class="image">
            <img scr="image/banner.jpg" alt="">
        </div>
    </div>
</section>
<!-- end -->
<!-- contact -->
<section class="contact" id="contact">
    <h2 class="heading">Contact</h2>
    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="Nom">
            <input type="email" placeholder="e-mail">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="nombre">
            <input type="text" placeholder="sujet">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
        <a href="#" class="btn">envoyer le message</a>
    </form>
</section>
<!-- end -->
<!-- footer -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3><i class="fas fa-paw"></i> zoo</h3>
            <p>Arcadia est un zoo situé en France près de la forêt de Brocéliande.</p>
            <p class="links"><i class="fas fa-clock"></i>7J/7 DE 9H30 À 20H30</p>
        <div class="box">
            <h3>CONTACTEZ-NOUS</h3>
            <a href="#" class="links"><i class="fas fa-phone"></i>+33 0 00 00 00 00</a>
            <a href="#" class="links"><i class="fas fa-phone"></i>+33 0 00 00 00 00</a>
            <a href="#" class="links"><i class="fas fa-envelope"></i> info@zooarcadia.com</a>
            <a href="#" class="links"><i class="fas fa-marker-alt"></i>bretagne, France</a>
        </div>
        <div class="box">
            <h3>Liens rapides</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>accueil</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>à propos</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>galerie</a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i>animaux</a>
        </div>
        <div class="box">
            <h3>newsletter</h3>
            <p>abonnez-vous pour les dernières mises à jour</p>
            <input type="email" placeholder="Votre adresse e-mail" class="email">
            <a href="#" class="btn">s'abonner</a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
    </div>
    <div class="credit">&copy; ZooParc de bretagne 1960-2024  <a href="#" class="link">arcadia</a></div>
</section>




<!-- end -->


<script scr="https://unpkg.com/swiper@7.4.1/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>