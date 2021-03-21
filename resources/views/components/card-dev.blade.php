@props([
    'name',
    'category',
    'img',
    'id'
])

<div class="app-dev-card shadow-lg group container m-4 rounded-md bg-white max-w-sm flex justify-center items-center hover:shadow-xl">
    <div>
        <div class="w-full h-48 rounded-t-md object-cover" >
            <img class="w-full h-full rounded-t-md object-cover" src="{{$img}}" alt="{{$name}}-img">
        </div>
        <div class="app-card-info py-8 px-4 bg-white text-center rounded-b-md">
            <h3 class="text-xl mb-3 text-gray-800 font-bold tracking-wide">{{$name}}</h3>
            <p class="text-gray-600 text-lg mb-4">{{$category}} 
            </p>

            @can('edit_app')
                <a href="{{route('development.show', "$id")}}" class="bg-blue-500 block w-3/4 mx-auto rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600">Ver Datos</a>
            @endcan

        </div>
    </div>
</div>