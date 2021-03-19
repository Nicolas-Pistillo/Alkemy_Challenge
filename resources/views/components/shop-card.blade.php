@props([
    'name',
    'description',
    'category',
    'price',
    'logo'
])

<div {{$attributes->merge(['class' => "max-w-xs rounded overflow-hidden shadow-lg my-2"])}}>
    <img class="w-full h-52 object-cover" src="{{$logo}}" alt="{{$name}}-img">
    <div class="px-6 py-4">
        <h3 class="font-bold text-xl mb-2">{{$name}}</h3>
        <p class="text-grey-darker text-base">
            {{$description}}
        </p>
    </div>
    <div class="px-6 py-4 flex justify-between items-center">
        <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold">#{{$category}}</span>
        <span class="inline-block bg-grey-lighter px-3 py-1 text-2xl font-semibold text-green-600">${{$price}}</span>
    </div>

    @can('show_app')
    <a href="#" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 transition duration-300 ease-in-out cursor-pointer hover:bg-blue-600">Comprar</a>
    @endcan
</div>