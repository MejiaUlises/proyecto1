<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <div class="row">
            @yield('content')
        </div>
    </div>
    
</body>
</html>