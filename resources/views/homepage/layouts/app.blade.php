<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS Language — Deutsche Sprache | German Language, Candidate Readiness & International Talent</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        .font-serif { font-family: 'Playfair Display', serif; }
        .bg-ds-light { background-color: #FDFBF7; }
        .text-ds-dark { color: #324338; }
        .bg-ds-dark { background-color: #3b4b41; }
        .text-ds-gold { color: #B2945B; }
        .border-ds-gold { border-color: #B2945B; }
    </style>
</head>
<body class="font-sans antialiased text-gray-800 bg-ds-light">
    @include('homepage.layouts.header')
    
    <main>
        @yield('content')
    </main>

    @include('homepage.layouts.footer')
</body>
</html>
