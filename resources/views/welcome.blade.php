<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha384-nH+2JpIptA1H1uR5nG8t9/ACAAyz9A3qUq/2V5nHKx+4yI0X79qrsAlU1oPCFhGe" crossorigin="anonymous">
        @vite('resources/css/app.css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Ariska</title>
    </head>
    <body class="font-sans">
        {{-- NAVBAR --}}
        <x-navbar />

        {{-- HERO --}}
        <x-hero />

        {{-- ABOUT --}}
        <x-about/>

        {{-- PORTOFOLIO --}}
        <x-portofolio />

        {{-- CONTACT --}}
        <x-contact />

        {{-- FOOOTER --}}
        <x-footer />
    </body>
</html>
