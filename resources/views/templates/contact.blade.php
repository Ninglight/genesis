@component('pages.app', ['mainClass' => 'container-without-header section'])

    @slot('title')
        {{ $title }} | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', ['type' => 'blue'])

        @endcomponent

    @endslot

    @slot('main')

        <div class="container section-2">
            @component('atoms.heading', ['heading' => 'h2', 
            'className' => 'text-content header-title-second', 
            'content' => 'Prenez directement contact avec nous'])
            
            @endcomponent

            <div class="row">
                @foreach ($profils as $profil)
                    <div class="col s12 m12 l6">
                        @component('molecules.card', ['type' => 'contact', 
                        'name' => $profil["name"], 
                        'speciality' => $profil["speciality"], 
                        'tel' => $profil["tel"],
                        'mail' => $profil["mail"]])
                            
                        @endcomponent  
                    </div>

                @endforeach
            </div>
        </div>
        <div class="container section-2">
            @component('atoms.heading', ['heading' => 'h2', 
            'className' => 'text-content header-title-second', 
            'content' => 'Ou laissez nous un message'])
            
            @endcomponent
            <div class="row">
                <form class="col s12">
                    
                    @component('molecules.forms', ['type' => 'contact'])
                        
                    @endcomponent  
                    
                </form>
            </div>
        </div>

    @endslot

@endcomponent