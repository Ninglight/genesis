

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/app.css') }}" media="screen,projection" />

    <title>{{ $title }}</title>

    <link rel="icon" type="image/svg" href="{{ URL::asset('favicon.svg') }}" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body class="fade-out">

    <div class="top">
        
        {{ $top }}
        
    </div>

    <main @isset($mainClass) class="{{ $mainClass }}" @endisset >

        {{ $main }}

    </main>


    <footer>
        <a href="index.html" class="brand-logo"><img src="icons/logo-inner-shadow.svg" alt=""></a>
        <p>
            © Tandem - 2017
        </p>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/materialize.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/init.js') }}"></script>
</body>

</html>