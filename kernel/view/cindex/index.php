<!DOCTYPE html lang="fr">
<html>

<head>
    <meta charset="utf-8">
    <title>StudenTravel - Découvrir une ville d'Europe avec un guide touristique étudiant.</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">


</head>

<body>

    <header class="site-header cf">
        <div class="container">
            <div class="site-logo">
            <a href="<?php echo DIR_WEBROOT; ?>"> <h1> StudenTravel </h1> </a>
            </div>
            <nav class="site-nav">
                <ul id="std-menu">
                    <li><a class="active" href="<?php echo DIR_WEBROOT; ?>">Accueil</a></li>
                    <li><a href="<?php echo DIR_WEBROOT; ?>cvoyages">Destinations</a></li>
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
        <li><a href="<?php echo DIR_WEBROOT; ?>cvoyages">Destinations</a></li>
        <li><a href="<?php echo DIR_WEBROOT; ?>cguides">GUIDES</a></li>
        <li><a href="<?php echo DIR_WEBROOT; ?>cconnexion">Connexion</a></li>
    </ul>

    <div class="welcome-message">
        <div class="container">
            <h1>Découvre et explore une ville entre étudiants</h1>
            <h2>Grâce à un guide touristique qui est étudiant, comme toi !</h2>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <section class="main">
                <article>
                    <h1>Bienvenue sur StudenTravel !</h1>
                    <p>Tu vas pouvoir être facilement en relation avec d’autres étudiants comme toi. Notre but ? Te permettre de visiter une capitale en ayant un guide pendant la période que tu souhaites (quelques jours ou toute la durée du séjour). C’est une personne étudiante et, être guide est un passe-temps amateur pour te faire découvrir sa ville. Nous espérons que ce sera un moyen pour toi de passer un moment convivial et enrichissant !</p>
                    <p>Et comme on sait que ce n’est pas tous les jours faciles (financièrement parlant) d’être étudiant, les prix sont accessibles (différents niveaux de budgets) et la commission que nous prenons pour chaque transaction est limitée.
                    </p>
                    <p>Il ne te reste plus qu’à rechercher ta prochaine destination, suivre les différentes étapes et à te lancer dans une nouvelle aventure :)
                    </p>
                </article>
                <article>
                    <h1>Tuto d'utilisation</h1>
                    <h2>#1 Recherche le nom de ta capitale de ton choix</h2>
                    <h2>#2 Choisi une période de commencement et de fin du guide touristique (qui correspond ou non à la période de ton séjour) et le nombre de personnes qui sont avec toi.</h2>
                    <h2>#3 Consulte les profils disponibles à ces dates et fais ton choix ;-)</h2>
                    <h2>#4 Confirme ton choix et payes à l’avance</h2>
                </article>
            </section>
            <aside class="sidebar">
                <div class="window">
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
<script type="text/javascript" src="js/jquery-3.2.1.min.js">


</script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">


</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js">


</script>
<script type="text/javascript" src="js/script.js"></script>

</html>
