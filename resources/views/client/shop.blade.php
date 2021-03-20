<x-app-layout>
    <x-slot name="header">
        <h2 class="animate__animated animate__fadeIn font-semibold text-xl text-gray-800 leading-tight">
            Estas en el paraiso de las aplicaciones, {{auth()->user()->name}}.
        </h2>
    </x-slot>

    <div class="p-24 flex flex-wrap items-center justify-center animate__animated animate__fadeIn">
        @foreach ($total_apps as $app)
            <x-shop-card class="shop-card"
                :name="$app->name"
                :description="$app->description"
                :category="$app->getCategory->name"
                :price="$app->price"
                :logo="$app->logo_url"
            />
        @endforeach
    </div>
    
</x-app-layout>