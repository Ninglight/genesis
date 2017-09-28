<div class="card-{{ $type }}@if ($type == 'profil') z-depth-2 @endif">
    @if ($type == 'profil')
        <div class="{{ $class }}"></div>
        <span>{{ $name }}</span>
        <p>{{ $speciality }}</p>
        <a href="{{ $url }}">
            <button class="waves-effect waves-light btn">Voir le profil</button>
        </a>

    @elseif ($type == 'contact')
        <p>{{ $name }}</p>
        <p>{{ $speciality }}</p>
        <p>Tél : {{ $tel }}</p>
        <p>Mail : {{ $mail }}</p>
    @endif
</div>