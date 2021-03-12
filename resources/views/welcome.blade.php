<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyAppStore</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
<div class="w-full h-screen bg-center bg-no-repeat bg-cover" style="background-image: url({{asset('img/home/img-main-header.jpg')}});">
    <div class="w-full h-screen bg-opacity-50 bg-black flex justify-center items-center">
        <div class="mx-6 text-center text-white">
            <h1 class="font-bold text-6xl mb-3">Bienvenidos a MyAppStore</h1>
            <p class="font-semibold text-2xl mb-6">La nueva revolucion de las aplicaciones ahora esta a tu alcance...y al de todos</p>
            <div>
                <a href="{{route('login')}}" class="bg-blue-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-2">
                    Comenzemos
                </a>
            </div>
        </div>
    </div>
</div>

</div>
    </body>
</html>
