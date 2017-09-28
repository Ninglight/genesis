<div class="section center-align">

    @if ($type == 'bg')
        <div class="divider-img">
            <div class="overlay-darken"></div>
    @endif

    @if ($type == 'blue')
        <div class="support section">
    @endif

    @if ($type == 'white')
        <div class="section">
    @endif
    
        <div class="container">

            @isset($title)
                <h2>{{ $title }}</h2>
            @endisset

            @isset($subtitle)
                <span class="subtitle-contact">{{ $subtitle }}</span>
            @endisset

            @isset($items)
                <ul class="list-support">
                    @foreach ($items as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @endisset

            @isset($icon)
                <img src="{{ $icon }}" alt="">
            @endisset

            @isset($content)
                <p>{{ $content }}</p>
            @endisset

            @isset($button)
                @if ($type == 'blue')
                    <a href="{{ $url }}"><button class="waves-effect waves-light white blue-text btn">{{ $button }}</button></a>
                @else
                    <a href="{{ $url }}"><button class="waves-effect waves-light btn">{{ $button }}</button></a>
                @endif
                
            @endisset

        </div>
    </div>
</div>



