@component('pages.app')

    @slot('title')
        {{ $name }} | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', ['type' => 'blue'])

        @endcomponent

    @endslot

    @slot('main')

        <div class="container container-without-header section">
            <div class="row">
                <div class="col s12 m12 l6 profil-img">
                    <div class="profil-img-blur {{ $class }}"></div>
                    <div class="profil-img-avatar {{ $class }}"></div>
                    <div class="profil-mobile hide-on-large-only">
                        <div class="header-bottom">
                            <h1 class="header-title-second white-text">{{ $name }}</h1>
                            <p class="header-subtitle-second">{{ $speciality }}</p>
                            <p>Tél : {{ $tel }} <br> Mail : {{ $mail }} </p>
                        </div>
                    </div>    
                </div>
                <div class="col s12 m12 l6">
                    <div class="section-2 section-left">
                        <div class="header-bottom hide-on-med-and-down">
                            <h1 class="grey-text text-darken-3">{{ $name }}</h1>
                            <p class="profil-sub">{{ $speciality }}</p>
                            <p>Tél : {{ $tel }} <br> Mail : {{ $mail }} </p>
                        </div>

                        <?php echo $content; ?>

                    </div>

                </div>
            </div>
        </div>


    @endslot

@endcomponent