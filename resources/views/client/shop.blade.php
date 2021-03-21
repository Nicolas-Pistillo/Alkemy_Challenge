<x-app-layout>
    <x-slot name="header">
        <h2 class="animate__animated animate__fadeIn font-semibold text-xl text-gray-800 leading-tight">
            Estas en el paraiso de las aplicaciones, {{auth()->user()->name}}.
        </h2>
    </x-slot>

        <form class="mx-auto mt-4 w-max flex flex-col justify-center items-center">
            @csrf
            <label for="search">Filtrar categoria
                @error('searchBy')
                    <small class="ml-2 text-red-500">{{$message}}</small>
                @enderror
            </label>
            <select name="searchBy" id="search" class="rounded-md mb-3 w-72">
                <option value="0">Seleccionar una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>

            <div class="form-buttons">
                <input type="submit" value="Buscar" class="bg-blue-500 w-max rounded-md mx-auto outline-none font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 cursor-pointer">

                <a href="{{route('shop.index')}}" class="bg-green-500 w-max rounded-md mx-auto outline-none font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-green-600 cursor-pointer">Ver todas</a>
            </div>

        </form>

        <div class="p-8 max-w-screen-xl flex mx-auto justify-center items-center flex-wrap animate__animated animate__fadeIn">
            @foreach ($total_apps as $app)
                <x-shop-card class="shop-card"
                    :name="$app->name"
                    :description="$app->description"
                    :category="$app->getCategory->name"
                    :price="$app->price"
                    :logo="$app->logo_url"
                    :dev="$app->developer->alias"
                />
            @endforeach
        </div>

    
    
</x-app-layout>