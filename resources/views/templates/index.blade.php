
@component('pages.app')

    @slot('title')
        {{ $title }} | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', [
            'type' => 'home'
        ])

        @endcomponent
        
        @component('organisms.header', [
            'type' => 'home', 
            'title' => $mark, 
            'subtitle' => $title, 
            'content' => $intro
        ])
            
        @endcomponent

    @endslot

    @slot('main')
        
        @component('organisms.list', $list1)

        @endcomponent

        @component('organisms.block', $block1)

        @endcomponent

        @component('organisms.list', $list2)

        @endcomponent

        @component('organisms.block', $block2)

        @endcomponent

        @component('organisms.block', $block3)

        @endcomponent

       
    @endslot

@endcomponent

