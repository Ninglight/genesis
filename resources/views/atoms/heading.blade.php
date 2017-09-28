@if ($heading == 'h1')
        <h1 class="{{ $className }}">{{ $content }}</h1>

@elseif ($heading == 'h2')
        <h2 class="{{ $className }}">{{ $content }}</h2>

@elseif ($heading == 'h3')
        <h3 class="{{ $className }}">{{ $content }}</h3>

@elseif ($heading == 'h4')
        <h4 class="{{ $className }}">{{ $content }}</h4>

@elseif ($heading == 'h5')
        <h5 class="{{ $className }}">{{ $content }}</h5>

@endif