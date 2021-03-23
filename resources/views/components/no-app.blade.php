<div class="flex bg-gray-100 py-24 justify-center">
    <div class="p-12 text-center max-w-2xl">
        <h2 class="md:text-3xl text-3xl font-bold">

            @can('create_app')
                Parece que aun no has creado Aplicaciones, {{$name}}
            @endcan

            @can('list_apps')
                Tu colección de apps esta vacia, {{$name}}
            @endcan

        </h2>
        <p class="text-xl font-normal mt-4">

            @can('create_app')
                Ya diste el primer paso para tener la oportunidad de compartir y publicar tus obras maestras, ¡Es hora de crear una de ellas!.
            @endcan

            @can('list_apps')
                MyAppStore es un mundo lleno de sorpresas tecnológicas que puedes descargar, ¡añade a tu lista algunas que sean de tu interés!.
            @endcan

        </p>
        <div class="mt-6 flex justify-center h-12 relative">

            @can('create_app')
                <a href="{{route('development.index')}}" class="bg-blue-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-2">
                Crear primer App</a>
            @endcan

            @can('list_apps')
                <a href="{{route('shop.index')}}" class="bg-blue-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-2">
                Ir a la tienda</a>
            @endcan

        </div>
    </div>
</div>