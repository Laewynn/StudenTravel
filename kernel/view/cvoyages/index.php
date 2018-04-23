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
                    <li><a href="deconnexion.php">JEAN DUPONT (déconnexion)</a></li>
                <a href="" id="menu-trigger"><i class="fa fa-bars fa-lg"></i></a>
            </nav>
        </div>
        <!-- /container -->
    </header>
    <ul id="responsive-menu">
        <li><a class="active" href="">Accueil</a></li>
        <li><a href="<?php echo DIR_WEBROOT; ?>cvoyages">Destinations</a></li>
        <li><a href="">Inscription</a></li>
        <li><a href="">Connexion</a></li>
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
                    <h1>Quelle est la prochaine ville que tu veux visiter ?</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11326673.20631086!2d8.861639237500002!3d46.12483227897259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1516285068918" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </article>
                <article>
                    <h1>Recherche ton futur guide étudiant</h1>

                    <!DOCTYPE html lang="fr">
                    <html>

                    <head>
                        <meta charset="utf-8">
                        <link rel="stylesheet" href="../../../css/styleform.css">

                        <title>StudenTravel - Découvrir une ville d'Europe avec un guide touristique étudiant.</title>


                    </head>

                    <body>
                    <form method="POST" action=<?php echo DIR_WEBROOT.'cvoyages/create';?> ../../../index.php>
                        <div id="search-form">
                            <div id="header">
                                <h1>Recherche un guide touristique étudiant</h1>
                            </div>
                            <section>
                                <div class="flight" id="flightbox">

                                    <form id="flight-form">

                                        <!-- FROM/TO -->
                                        <div id="flight-depart">
                                            <div class="info-box">
                                                <label for="">Ville de départ</label>
                                                <input name="villedepart_voyages" type="text" id="dep-from" />
                                                <div id="depart-res"></div>
                                            </div>
                                            <div class="info-box" id="arrive-box">
                                                <label for="">Ville d'arrivée</label>
                                                <input name="villedarrivee_voyages" type="text" id="dep-to" />
                                                <div id="arrive-res"></div>
                                            </div>
                                        </div>

                                        <!-- FROM/TO -->
                                        <div id="flight-dates">
                                            <div class="info-box">
                                                <label for="">Date de départ</label>
                                                <input name="datedebut_voyages" type="text" id="leave-date"  required />
                                            </div>
                                            <div class="info-box" id="return-box">
                                                <label for="">Date d'arrivée</label>
                                                <input name="datefin_voyages" type="text" id="return-date"  required />
                                            </div>
                                        </div>

                                        <!-- PASSENGER INFO -->
                                        <div id="flight-info">
                                            <div class="info-box">
                                                <label for="adults">Nombre d'étudiants</label>
                                                <select name="nbetudiants_voyages"name="adults" id="adults">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4+</option>
                                                </select>
                                            </div>
                                            <div class="info-box">
                                                <label for="class-type">Budget</label>
                                                <select name="budget_voyage" name="class-type" id="class-type">
                                                    <option value="Economy">-</option>
                                                    <option value="Business">+</option>
                                                    <option value="First">++</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- SEARCH BUTTON -->
                                        <div id="flight-search">
                                            <div class="info-box">
                                                <input type="submit" id="search-flight" value="VALIDER" />
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </section>

                            <div id="calender">
                                <div class="nav">
                                    <button id="prev"><</button>
                                    <p><span id="month"></span>
                                        <span id="year"></span></p>
                                    <button id="next">></button>
                                </div>
                                <table id="cal"></table>
                            </div>

                        </div>
                        <div id="confirm" ></div>
                    </form>

                    </body>
                    <script src="../../../js/scriptform.js"></script>

                    </html>

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
<script type="text/javascript" src="js/jquery-3.2.1.min.js"> </script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FitText.js/1.1/jquery.fittext.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

</html>
