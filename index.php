<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel = "preconnect" href = "https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Resto</title>
<body>
<header>
    <a href="#" class="logo"><span>R</span>esto</a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
    <ul class="navbar">
        <li><a href="#banniere" onclick="toggleMenu();">Accueil</a></li>
        <li><a href="#apropos" onclick="toggleMenu();">A propos</a></li>
        <li><a href="#menu" onclick="toggleMenu();">Menu</a></li>
        <li><a href="#expert" onclick="toggleMenu();">Expert</a></li>
        <li><a href="#temoignage" onclick="toggleMenu();">Temoignage</a></li>
        <li><a href="#contact" onclick="toggleMenu();">Contact</a></li>
        <a href="signup.php" class="btn-reserve"onclick="toggleMenu();">signe up</a>
        <a href="signin.php" class="btn-reserve"onclick="toggleMenu();">signe in</a>
    </ul>
</header>
<section class="banniere" id="banniere">
    <div class="contenu">
        <h2>Que Des Plats Délicieux</h2>
        <p>Aliments préparés rapidement, prêts à être consommés rapidement. Les restaurants  sont connus pour leur service rapide, leur accessibilité, et souvent, leur menu standardisé.</p>
        <a href="#menu" class="btn1">Notre Menu</a>
       
    </div>
</section>
<section class="apropos" id="apropos">
    <div class="row">
        <div class="col50">
            <h2 class="titre-texte"><span>A</span> Propos De Nous</h2>
            <p>
                une chaîne de restauration rapide multinationale connue pour ses hamburgers grillés à la flamme, en particulier le célèbre Whopper. Fondée en 1954 à Miami, en Floride, elle est depuis devenue la deuxième plus grande chaîne de hamburgers au monde, avec plus de 18 000 restaurants dans plus de 100 pays.
            </p>
        </div>
        <div class="col50">
            <div class="img">
                <img src="./images/nourriture.jpg" alt="image">
            </div>
        </div>
    </div>
</section>
<section class="menu" id="menu">
    <div class="titre">
        <h2 class="titre-texte"><span>M</span>enu</h2>
        <p>Les repas sont généralement préparés à l'avance et réchauffés ou assemblés sur place
            Un menu varié, une expérience rapide </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/chiken.jpg" alt="">
            </div>
            <div class="text">
                <h3>CHIKEN</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$10</span>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/sushi.jpg" alt="">
            </div>
            <div class="text">
                <h3>SUSHI</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$15</span>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/imagepizza.jpg" alt="">
            </div>
            <div class="text">
                <h3>PIZZA</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$20</span>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/spakiti.jpg" alt="">
            </div>
            <div class="text">
                <h3>SPAKITI</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$25</span>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/salad.jpg" alt="">
            </div>
            <div class="text">
                <h3>SALAD CHIKEN</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$30</span>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/poissant.jpg" alt="">
            </div>
            <div class="text">
                <h3>POISSON</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$35</span>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/viende.jpg" alt="">
            </div>
            <div class="text">
                <h3>Viande aux prunes</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$40</span>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/couscous.jpg" alt="">
            </div>
            <div class="text">
                <h3>COUSCOUS</h3>
                <p>Temps:10-15 Minutes| Livraison gratuite</p>
            <span>$45</span>
            </div>
        </div>
    </div>
 </div>
</section>
<section class="expert" id="expert">
    <div class="titre">
        <h2 class="titre-texte">Nos <span>E</span>xperts</h2>
        <p>
            Les experts jouent un rôle essentiel dans divers domaines de la société moderne. Leur expertise approfondie et leurs connaissances spécialisées permettent de résoudre des problèmes complexes, de prendre des décisions éclairées et d'innover dans des domaines variés tels que la science, la technologie, la médecine, le droit, l'économie, et bien d'autres encore. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe1.jpg" alt="">
            </div>
            <div class="text">
                <h3>Jake francoi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe2.jpg" alt="">
            </div>
            <div class="text">
                <h3>Paul bondor</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/equipe3.jpg" alt="">
            </div>
            <div class="text">
                <h3>Jean skiper</h3>
            </div>
        </div>
 </div>
</section>
 <section class="temoignage" id="temoignage">
    <div class="titre blanc">
        <h2 class="titre-texte">Que Disent Nos <span>C</span>lients</h2>
        <p>Les propriétaires de restaurants et les gestionnaires peuvent également utiliser ces retours pour améliorer leurs services et répondre aux préoccupations des clients. </p>
    </div>
    <div class="contenu">
        <div class="box">
            <div class="imbox">
                <img src="./images/t1.jpeg" alt="">
            </div>
            <div class="text">
                <p>"La cuisine était délicieuse, pleine de saveurs!"
                    "Le service était exceptionnel, le personnel était très accueillant et attentionné."
                    </p>
                <h3>André leroi</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t2.jpg" alt="">
            </div>
            <div class="text">
                <p>"L'ambiance était chaleureuse et agréable, parfaite pour une soirée entre amis."
                    "Les portions étaient généreuses, un excellent rapport qualité-prix."</p>
                <h3>Louis hataf</h3>
            </div>
        </div>
        <div class="box">
            <div class="imbox">
                <img src="./images/t3.jpg" alt="">
            </div>
            <div class="text">
                <p>"J'ai adoré la créativité des plats, c'était une expérience culinaire unique."</p>
                <h3>Philippe poliu</h3>
            </div>
        </div>
    </div>
 </section>
 <section class="contact" id="contact">
     <div class="titre noir">
         <h2 class="titre-text"><span>C</span>ontact</h2>
         <p>je vous recommande de consulter leur site web officiel ou d'utiliser des annuaires en ligne appropriés.</p>
     </div>
     <div class="contactform">
         <h3>Envoyer un message</h3>
         <div class="inputboite">
             <input type="text" placeholder="Nom">
         </div>
         <div class="inputboite">
            <input type="text" placeholder="email">
         </div>
         <div class="inputboite">
            <textarea placeholder="message"></textarea>
         </div>
         <div class="inputboite">
             <input type="submit" value="envoyer">
         </div>
         
     </div>
 </section>
 <div class="copyright">
     <p>copyright 2023 <a href="#">ihssaneGhalmi</a> youtube tutoriel. Tous droits reservé</p>
 </div>
 <script type="text/javascript">
     window.addEventListener('scroll', function(){
         const header =document.querySelector('header');
         header.classList.toggle("sticky", window.scrollY > 0 );
     });

     function toggleMenu(){
         const tmenuToggle = document.querySelector('.menuToggle');
         const navbar = document.querySelector('.navbar');
         navbar.classList.toggle('active');
         menuToggle.classList.toggle('active');
     }

 </script>
</body>
</html>