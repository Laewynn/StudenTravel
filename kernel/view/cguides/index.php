<!DOCTYPE html lang="fr">
<html>

<head>
    <meta charset="utf-8">
    <title>StudenTravel - Découvrir une ville d'Europe avec un guide touristique étudiant.</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <header class="site-header cf">
        <div class="container">
            <div class="site-logo">
                <h1>StudenTravel</h1>
            </div>
            <nav class="site-nav">
                <ul id="std-menu">
                    <li><a class="active" href="<?php echo DIR_WEBROOT; ?>">Accueil</a></li>
                    <li><a href="<?php echo DIR_WEBROOT; ?>cvoyages">DESTINATIONS</a></li>
                    <li><a href="<?php echo DIR_WEBROOT; ?>cguides">GUIDES</a></li>
                    <li><a href="<?php echo DIR_WEBROOT; ?>cconnexion">JEAN DUPONT (déconnexion)</a></li>
                </ul>
                <a href="#" id="menu-trigger"><i class="fa fa-bars fa-lg"></i></a>
            </nav>
        </div>
        <!-- /container -->
    </header>
    <ul id="responsive-menu">
        <li><a class="active" href="">Accueil</a></li>
        <li><a href=".DIR_WEBROOT.cdestinations">Destinations</a></li>
        <li><a href="">Inscription</a></li>
        <li><a href="">Connexion</a></li>
    </ul>

    <div class="welcome-message">
        <div class="container">
            <h1>Découvre et explore une ville entre étudiants</h1>
            <h2>Liste des guides</h2>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <section class="main">
                <article>
                    <h1>Voici la liste de profils disponibles à ces dates</h1>
                </article>
                <article>
                    <h1>Nathalie K.</h1>
                    <p><img src="imgs/2.jpg" class="rounded float-left" alt="Photo Nathalie K.">23 ans - Étudiante dans les arts<button type="button" class="btn btn-secondary btn-lg btn-block">Réserve un créneau</button></p>
                </article>
                <h1>Chris B.</h1>
                <p><img src="imgs/1.jpg" class="rounded float-left" alt="Photo Chris B.">21 ans - Étudiant en informatique<button type="button" class="btn btn-secondary btn-lg btn-block">Réserve un créneau</button></p>
                </article>
            </section>
            <aside class="sidebar">
                <div class="window">
                    <h1>Explore le monde !</h1>
                    <h2><i class="glyphicon glyphicon-globe"></i></h2>
                </div>
                <!--<div class="window window-has-contact">
                    <form class="form" action="">
                        <h2>Rechercher une destination rapidement</h2>
                        <div class="form-block">
                            <label for="name">Destination</label>
                            <input type="text" id="name" />
                        </div>
                        <div class="form-block">
                            <label for="email">Arrivée</label>
                            <input type="email" id="email" />
                        </div>
                        <div class="form-block">
                            <label for="message">Départ</label>
                            <textarea id="message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-block">
                            <button id="send-btn" type="submit">Valider</button>
                        </div>
                    </form>
                </div>-->
            </aside>
        </div>
        <footer class="site-footer">
            <p>&copy; <a href="">StudenTravel</a>, Tout droits réservés.</p>
        </footer>
    </div>
    <!--\Container-->

</body>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>
