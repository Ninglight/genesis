
@component('pages.app')

    @slot('title')
        {{ $title }} - {{ $subtitle }} | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', ['type' => 'white'])

        @endcomponent

        @component('organisms.header', [
            'type' => 'second', 
            'bg' => $url, 
            'title' => $title, 
            'subtitle' => $subtitle
        ])

        @endcomponent

    @endslot

    @slot('main')

        <div class="container section">
            <div class="row">
                <div class="col s12 m12 l8">

                    <?php echo $content ?>

                </div>
                <div class="col s12 m12 l4 specialty">

                    <span class="specialty-title">Specialité de </span>

                    @component('molecules.card', [
                        'type' => 'profil',
                        'name' => $nameProfil,
                        'speciality' => $specialityProfil,
                        'url' => $urlProfil,
                        'class' => $classProfil,
                    ])

                    @endcomponent
                    
                </div>
            </div>
        </div>

    @endslot

@endcomponent






       






