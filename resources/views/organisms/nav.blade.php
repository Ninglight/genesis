<ul id="dropdown_specility" class="dropdown-content">
    <li><a href="{{ url('/psychologie-clinique') }}">Psychologie clinique</a></li>
    <li><a href="{{ url('/neuropsychologie') }}">Neuropsychologie</a></li>
</ul>

<ul id="dropdown_tandem" class="dropdown-content">
    <li><a href="{{ url('/ariasy-m-changama') }}">Ariasy M’Changama</a></li>
    <li><a href="{{ url('/catherine-hoareau') }}">Catherine Hoareau</a></li>
</ul>


<nav>
    @if ($type == 'home')
        <div class="container nav-wrapper nav-homepage">
    @endif

    @if ($type == 'blue')
        <div class="nav-wrapper nav-second nav-blue">
    @endif

    @if ($type == 'white')
        <div class="nav-wrapper nav-second">
    @endif
    
        <a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only">
            <object id="menu-icon" type="image/svg+xml" data="icons/menu.svg">Your browser does not support SVG</object>
            <p>Menu</p>
        </a>
        <a href="#!" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ url('/') }}">Accueil</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown_specility">Nos spécialités<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown_tandem">Notre tandem<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="{{ url('/soins') }}">Nos Soins & Tarifs</a></li>
            <li><a href="{{ url('/contact') }}"><button class="waves-effect waves-light btn">Contactez-nous</button></a></li>
        </ul>
    </div>
    <ul class="side-nav center-align" id="slide-out">
        <div class="nav-header">
            <a href="{{ url('/') }}" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
            Tandem
        </div>
        <li><a href="{{ url('/') }}">Accueil</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('/psychologie-clinique') }}">La Psychologie clinique</a></li>
        <li><a href="{{ url('/neuropsychologie') }}">La Neuropsychologie</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('/ariasy-m-changama') }}">Ariasy M’Changama</a></li>
        <li><a href="{{ url('/catherine-hoareau') }}">Catherine Hoareau</a></li>
        <li class="divider"></li>
        <li><a href="{{ url('/soins') }}">Nos Soins & Tarifs</a></li>
        <li><a href="{{ url('/contact') }}"><button class="spacing waves-effect waves-light btn">Contactez-nous</button></a></li>
    </ul>
</nav>