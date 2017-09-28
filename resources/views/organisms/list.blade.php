<div class="container section">
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset
    
    @isset($contentTop)
        <p>{{ $contentTop }}</p>
    @endisset

    @if ($type == 'icon')
        <div class="list-icon">
            @isset($items)
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
                                
                                <?php echo $item["content"]; ?>
                                
                            </div>
                        @else
                            <div class="col s12 item-icon-content">
                                <h3>{{ $item["title"] }}</h3>
                                
                                <?php echo $item["content"]; ?>
                                
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
                    @component('molecules.card', [
                        'type' => 'profil',
                        'name' => $item["name"],
                        'speciality' => $item["speciality"],
                        'url' => $item['url'],
                        'class' => $item['class']
                    ])

                    @endcomponent
                </div>
            @endforeach
        </div>
    @endif

    @isset($contentBottom)
        <p><?php echo $contentBottom; ?></p>
    @endisset

    <p></p>
</div>



