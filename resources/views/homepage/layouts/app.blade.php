<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS Language — Deutsche Sprache | Kursus Bahasa Jerman & Persiapan Ausbildung Indonesia</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="DS Language (Deutsche Sprache) adalah konsultan pendidikan dan bahasa Jerman terkemuka di Indonesia. Persiapan Ausbildung, kuliah di Jerman, kursus bahasa Jerman, dan pengembangan talenta internasional.">
    <meta name="keywords" content="Kursus Bahasa Jerman, Ausbildung, Kuliah di Jerman, Kerja di Jerman, Agen Ausbildung Indonesia, Konsultan Pendidikan Jerman, Persiapan Studi Jerman, DS Language, Deutsche Sprache, Belajar Bahasa Jerman">
    <meta name="author" content="DS Global Consulting">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="DS Language — Deutsche Sprache | Kursus Bahasa Jerman & Persiapan Ausbildung">
    <meta property="og:description" content="DS Language (Deutsche Sprache) adalah konsultan pendidikan dan bahasa Jerman terkemuka di Indonesia. Persiapan Ausbildung, kuliah di Jerman, kursus bahasa Jerman, dan pengembangan talenta internasional.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="DS Language">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DS Language — Deutsche Sprache | Kursus Bahasa Jerman & Ausbildung">
    <meta name="twitter:description" content="Persiapan Ausbildung, kuliah di Jerman, dan pengembangan talenta internasional di Indonesia.">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
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
