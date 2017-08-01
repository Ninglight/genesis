@if ($type == 'home')
    <header>
@endif

@if ($type == 'second')
    <header class="header-second header-{{ $bg }}">
@endif

    <div class="overlay-darken"></div>
    <div class="container header-bottom">
        <h1>{{ $title }}</h1>
        <span class="header-subtitle-second">{{ $subtitle }}</span>
        @isset($content)
            <p class="content-title">{{ $content }}</p>
        @endisset
    </div>
</header>

