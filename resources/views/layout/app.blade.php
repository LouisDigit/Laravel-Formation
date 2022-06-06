<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    <title>Mon super site</title>
</head>
<body>
    @include('partials.navbar')
    <div class="container mx-auto">@yield('content')</div>
    
    
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>