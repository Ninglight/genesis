<div class="container section">
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset
    
    @isset($contentTop)
        <p>{{ $contentTop }}</p>
    @endisset

    @if ($type == 'icon')
        <div class="list-icon">
            @isset($contentTop)
                @foreach ($items as $item)
                
                    <div class="row item-icon">
                        @if ($item["icon"])
                            <div class="col s12 m3 l2 item-icon-img">
                                <img src="{{ $item['icon'] }}" alt="">
                            </div>
                        @endif
                        @if ($item["icon"])
                            <div class="col s12 m9 l10 item-icon-content">
                                <h3>{{ $item["title"] }}</h3>
                                
                                    {{ $item["content"] }}
                                
                            </div>
                        @else
                            <div class="col s12 item-icon-content">
                                <h3>{{ $item["title"] }}</h3>
                                
                                    {{ $item["content"] }}
                                
                            </div>
                        @endif
                    </div>
                @endforeach
            @endisset
        </div>
    @endif

    @if ($type == 'profil')
        <div class="row list-card">
            @foreach ($items as $item)
                <div class="spacing-1 col s12 m12 l6">
                    <div class="card-profil z-depth-2">
                        <div class="{{ $item['class'] }}"></div>
                        <span>{{ $item["name"] }}</span>
                        <p>{{ $item["speciality"] }}</p>
                        <a href="{{ $item['url'] }}">
                            <button class="waves-effect waves-light btn">Voir le profil</button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @isset($contentBottom)
        <p>{{ $contentBottom }}</p>
    @endisset

    <p></p>
</div>



