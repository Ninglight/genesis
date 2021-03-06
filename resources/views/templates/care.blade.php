
@component('pages.app')

    @slot('title')
        {{ $title }} - {{ $subtitle }} | Tandem
    @endslot

    @slot('top')

        @component('organisms.nav', ['type' => 'white'])

        @endcomponent

        @component('organisms.header', [
            'type' => 'second', 
            'bg' => 'care', 
            'title' => $title, 
            'subtitle' => $subtitle
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