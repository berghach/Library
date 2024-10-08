<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }} - {{ $title }}</title>
        @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
    </head>
    <body>
        <header>
            <h1>Gestion de Bibliothèque</h1>
        </header>
        {{ $slot }}
        <footer>
            <p>&copy; 2024 Gestion de Bibliothèque</p>
        </footer>    
    </body>
</html>
