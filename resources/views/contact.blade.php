<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/app.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body class="fade-out">

    <ul id="dropdown_specility" class="dropdown-content">
        <li><a href="psychologie-clinique.html">Psychologie clinique</a></li>
        <li><a href="neuropsychologie.html">Neuropsychologie</a></li>
    </ul>

    <ul id="dropdown_tandem" class="dropdown-content">
        <li><a href="ariasy-m-changama.html">Ariasy M’Changama</a></li>
        <li><a href="catherine-hoareau.html">Catherine Hoareau</a></li>
    </ul>

    <div class="top">
        <nav>
            <div class="nav-wrapper nav-second nav-blue">
                <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only">
                    <object id="menu-icon" type="image/svg+xml" data="icons/menu-blue.svg">Your browser does not support SVG</object>
                    <p>Menu</p>
                </a>
                <a href="index.html" class="brand-logo">
                    <img src="icons/logo-inner-shadow.svg" alt="">
                    <div class="title hide-on-med-and-down">
                        Tandem
                    </div>
                </a>
                
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_specility">Nos spécialités<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_tandem">Notre tandem<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="soins.html">Nos Soins & Tarifs</a></li>
                    <li><a href="contact.html"><button class="waves-effect waves-light btn">Contactez-nous</button></a></li>
                </ul>
            </div>
            <ul class="side-nav center-align" id="slide-out">
                <div class="nav-header">
                    <a href="index.html" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
                    Tandem
                </div>
                <li><a href="index.html">Accueil</a></li>
                <li class="divider"></li>
                <li><a href="psychologie-clinique.html">La Psychologie clinique</a></li>
                <li><a href="neuropsychologie.html">La Neuropsychologie</a></li>
                <li class="divider"></li>
                <li><a href="ariasy-m-changama.html">Ariasy M’Changama</a></li>
                <li><a href="catherine-hoareau.html">Catherine Hoareau</a></li>
                <li class="divider"></li>
                <li><a href="soins.html">Nos Soins & Tarifs</a></li>
                <li><a href="contact.html"><button class="spacing waves-effect waves-light btn">Contactez-nous</button></a></li>
            </ul>
        </nav>
    </div>




    <main class="container-without-header section">
        <div class="container section-2">
            <h2 class="text-content header-title-second">Prenez directement contact avec nous</h2>
            <div class="row">
                <div class="col s12 m12 l6 card-contact">
                    <p>Ariasy M'CHANGAMA</p>
                    <p>Neuropsychologue</p>
                    <p>Tél : 06 26 81 10 31</p>
                    <p>Mail : ariasy.nchanhama@psytandem.fr</p>
                </div>
                <div class="col s12 m12 l6 card-contact">
                    <p>Catherine HOAREAU</p>
                    <p>Psychologue Clinicienne</p>
                    <p>Tél : 07 89 58 00 57</p>
                    <p>Mail : catherine.hoareau@psytandem.fr</p>
                </div>
            </div>
        </div>
        <div class="container section-2">
            <h2 class="text-content header-title-second">Ou laissez nous un message</h2>
            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 l6">
                            <input id="first_name" type="text" class="validate">
                            <label for="first_name">Prénom</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Nom</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="tel" type="tel" class="validate">
                            <label for="tel">N° de téléphone</label>
                        </div>
                        <div class="input-field col s12 l6">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="content" class="materialize-textarea"></textarea>
                            <label for="content">Message</label>
                        </div>
                    </div>
                    <div class="row right-align">
                        <button class="btn waves-effect waves-light btn-submit" type="submit" name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </main>

    <footer>
        <a href="index.html" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
        <p>
            © Tandem - 2017
        </p>
    </footer>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
</body>

</html>