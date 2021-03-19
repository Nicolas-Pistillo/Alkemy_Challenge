<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl animate__animated animate__fadeIn text-gray-800 leading-tight">
            Estos son los datos de {{$app_show->name}}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto flex justify-around flex-wrap items-center py-6 px-4 sm:px-6 lg:px-8">

        <x-shop-card class="animate__animated animate__flipInX"
            :name="$app_show->name"
            :description="$app_show->description"
            :category="$app_show->getCategory->name"
            :price="$app_show->price"
            :logo="$app_show->logo_url"
        />

        <div class="dev-app-actions">
            <a href="{{route('development.edit',$app_show->id)}}" class="bg-green-500 w-36 block my-3 text-center text-white px-4 py-3 rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-green-600">Editar</a>

            <a href="#" class="bg-red-500 w-36 block my-3 text-white text-center px-4 py-3 rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-red-600">Eliminar</a>

        </div>
        
    </div>

</x-app-layout>