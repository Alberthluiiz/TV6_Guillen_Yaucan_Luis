<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ITB - @yield('titulo') </title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <hr>
    <header class="p-5 border-b bg-white shadow">
        
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black text-lime-500">
                ITB - Online
            </h1>

            <nav class="flex gap-2">
                <a class="font-bold uppercase text-orange-500 text-sm" href="#"> Luis Alberto Guillen Yaucan -  </a>
                <a href="{{ route('register') }}" class="font-bold uppercase text-blue-600 text-sm"> Dashboard </a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10 text-pink-600">
            @yield('titulo')
        </h2>
        <hr>
        @yield('contenido')
    </main>
<hr>
    <footer class="mt-10 text-center p-5 text-purple-800 font-bold uppercase">
        ITB - Online - TV6 - 
        {{-- Nos permite Imprimir año Actual --}}
        {{ now()->year }}
    </footer>
    <hr>
</body>
</html>
