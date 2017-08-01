
@component('pages.app')

    @slot('title')
        {{ $title }} - {{ $subtitle }} | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', ['type' => 'white'])

        @endcomponent

        @component('organisms.header', [
            'type' => $typeHeader, 
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

                    {{ $content }}
                    
                </div>
                <div class="col s12 m12 l4">

                    @component('molecules.card', [
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






       






