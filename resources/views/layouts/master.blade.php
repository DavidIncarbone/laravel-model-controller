<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Laravel Model & Controller</title>

    @vite("resources/sass/app.scss","resources/js/app.js")

</head>
<body>

      
     @include("partials.header")

     {{-- Contenuto della pagina --}}

     @yield("contenuto")
    
</body>
</html>