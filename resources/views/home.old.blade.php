<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/styles.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body>

    <ul id="dropdown_specility" class="dropdown-content">
        <li><a href="{{ url('/psychologie-clinique') }}">Psychologie clinique</a></li>
        <li><a href="{{ url('/neuropsychologie') }}">Neuropsychologie</a></li>
    </ul>

    <ul id="dropdown_tandem" class="dropdown-content">
        <li><a href="{{ url('/ariasy-m-changama') }}">Ariasy M’Changama</a></li>
        <li><a href="{{ url('/catherine-hoareau') }}">Catherine Hoareau</a></li>
    </ul>

    <div class="top">
        <nav>
            <div class="container nav-wrapper nav-homepage">
                <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only">
                    <object id="menu-icon" type="image/svg+xml" data="icons/menu.svg">Your browser does not support SVG</object>
                    <p>Menu</p>
                </a>
                <a href="{{ url('/index') }}" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('/index') }}">Accueil</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_specility">Nos spécialités<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown_tandem">Notre tandem<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="{{ url('/soin-tarif') }}">Nos Soins & Tarifs</a></li>
                    <li><a href="{{ url('/contact') }}"><button class="waves-effect waves-light btn">Contactez-nous</button></a></li>
                </ul>
            </div>
            <ul class="side-nav center-align" id="slide-out">
                <div class="nav-header">
                    <a href="{{ url('/index') }}" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
                    <h1>Tandem</h1>
                </div>
                <li><a href="{{ url('/index') }}">Accueil</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/psychologie-clinique') }}">La Psychologie clinique</a></li>
                <li><a href="{{ url('/neuropsychologie') }}">La Neuropsychologie</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/ariasy-m-changama') }}">Ariasy M’Changama</a></li>
                <li><a href="{{ url('/catherine-hoareau') }}">Catherine Hoareau</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/soin-tarif') }}">Nos Soins & Tarifs</a></li>
                <li><a href="{{ url('/contact') }}"><button class="spacing waves-effect waves-light btn">Contactez-nous</button></a></li>
            </ul>
        </nav>
        <header>
            <div class="overlay-darken"></div>
            <div class="container header-content">
                <h1 class="title">Tandem</h1>
                <span class="sub-title">Prise en charge psychologique de 3 à 25 ans</span>
                <p class="content-title">L’équipe Tandem propose une prise en charge psychologique mobile<br> sur les communes de <span class="bold">La Garenne-Colombes</span>                    et <span class="bold">Le Chesnay</span>.</p>

            </div>
        </header>
    </div>




    <main>
        <div class="container section center-align">
            <h2 class="heading2-homepage">Pourquoi faire appel à nous ?</h2>
            <p>Tandem accompagne et suit l’enfant tout au long de son développement et jusqu’au début de l’âge adulte (de 3
                à 25 ans).</p>
            <div class="list-reason">
                <div class="row item-reason">
                    <div class="col s12 m3 l2 img-reason">
                        <img src="icons/baby.svg" alt="">
                    </div>
                    <div class="col s12 m9 l10 content-reason">
                        <span class="title-reason">
                        à partir de 3 ans
                        </span>
                        <p>
                            Pour des retards de développement (trouble du sommeil, trouble du langage, de la communication, etc.), des problèmes de séparation
                            au moment d'aller à l'école, de concentration, de socialisation, etc.
                        </p>
                    </div>
                </div>
                <div class="row item-reason">
                    <div class="col s12 m3 l2 img-reason">
                        <img src="icons/child.svg" alt="">
                    </div>
                    <div class="col s12 m9 l10 content-reason">
                        <span class="title-reason">
                        de 6 à 11 ans
                    </span>
                        <p>
                            Pour des difficultés d'ordre scolaire, d'immaturité, d'autonomie, d'adaptation, etc.
                        </p>
                    </div>
                </div>
                <div class="row item-reason">
                    <div class="col s12 m3 l2 img-reason">
                        <img src="icons/teen.svg" alt="">
                    </div>
                    <div class="col s12 m9 l10 content-reason">
                        <span class="title-reason">
                        de 12 à 15 ans
                    </span>
                        <p>
                            Pour des problèmes liés à l'adolescence : des troubles du comportement alimentaire, des troubles d'opposition, de l'agressivité,
                            etc.
                        </p>
                    </div>
                </div>
                <div class="row item-reason">
                    <div class="col s12 m3 l2 img-reason">
                        <img src="icons/adult.svg" alt="">
                    </div>
                    <div class="col s12 m9 l10 content-reason">
                        <span class="title-reason">
                        de 16 à 25 ans
                    </span>
                        <p>
                            Pour des difficultés de concentration et de mise au travail, des difficultés liées à l'orientation, des conflits parents/enfants,
                            d'opposition face a l'autorité, liées à la sexualité, etc.
                        </p>
                    </div>
                </div>
            </div>
            <p>Tandem vous accompagne pour le suivi et la prise en charge de votre enfant ainsi qu'au cours du dépistage d'un
                trouble ou de difficultés, de même afin de suivre l'évolution de votre enfant. Une prise en charge précoce
                permet de prévenir d'éventuelles difficultés.</p>
        </div>


        <div class="section">
            <div class="divider-img">
                <div class="overlay-darken"></div>
                <div class="container">
                    <p>Tandem se déplace au domicile, à l’école ou en structure, pour une prise en charge au plus près des besoins,
                        afin d’éviter la déstabilisation possible de l’environnement hospitalier. L’introduction d’une aide
                        adaptée directement au domicile permet d’améliorer la qualité de vie de l’enfant dans son environnement
                        familial au quotidien.</p>
                </div>
            </div>
        </div>


        <div class="container section">
            <h2 class="heading2-homepage">Qui sommes-nous ?</h2>
            <div class="row container-profil">
                <div class="spacing-1 col s12 m12 l6">
                    <div class="card-profil z-depth-2">
                        <div class="aria"></div>
                        <span>Ariasy M’Changama</span>
                        <p>Neuropsychologue</p>
                        <a href="{{ url('/ariasy-m-changama') }}">
                            <button class="waves-effect waves-light btn">Voir le profil</button>
                        </a>
                    </div>
                </div>
                <div class="spacing-1 col s12 m12 l6 center-align">
                    <div class="card-profil z-depth-2">
                        <div class="cath"></div>
                        <span>Catherine Hoareau</span>
                        <p>Psychologue clinicienne</p>
                        <a href="{{ url('/catherine-hoareau') }}">
                            <button class="waves-effect waves-light btn">Voir le profil</button>
                        </a>
                    </div>
                </div>
            </div>

            <p>
                Ces deux spécialités vont :
                <ul class="list-bullet">
                    <li>Permettre l’exploration de différentes sphères psychologiques par deux professionnelles aux pratiques
                        complémentaires
                    </li>
                    <li>Apporter deux regards différents sur la situation avec deux approches différentes.</li>
                </ul>
            </p>
        </div>

        <div class="support section">
            <div class="container ">
                <h2 class="heading2-homepage">Globalement, nous prenons en charge</h2>
                <ul class="list-support">
                    <li>Les maladies / antécédents neurologiques (épilepsie, traumatisme crânien, accident vasculaire cérébral,
                        etc.)
                    </li>
                    <li>Les troubles psychologiques (anxiété, angoisse, phobie, problèmes familiaux)</li>
                    <li>Les troubles psychiatriques (psychoses)</li>
                    <li>Les différents troubles des apprentissages</li>
                    <li>Les troubles envahissants du développement</li>
                    <li>Les troubles des fonctions cognitives</li>
                </ul>
                <div class="center-align">
                    <a href="{{ url('/soin-tarif') }}">
                        <button class="waves-effect waves-light white blue-text btn">Découvrez la prise en charge détaillées</button>
                    </a>
                </div>


            </div>
        </div>


        <div class="container section contact">
            <div class="section">
                <span class="title-contact">Nous vous avons convaincu de travailler avec nous ?</span><br>
                <span class="subtitle-contact">N’hésitez pas à nous contactez pour plus d’information ou pour un premier entretien !</span><br>
                <a href="{{ url('/contact') }}"><button class="waves-effect waves-light btn">Contactez-nous</button></a>
            </div>
        </div>

    </main>

    <footer>
        <a href="{{ url('/index') }}" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
        <p>
            © Tandem - 2017
        </p>
    </footer>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
</body>

</html>
