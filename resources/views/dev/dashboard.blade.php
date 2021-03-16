<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tus creaciones
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if (!empty($appsDev[0]))
                @foreach ($appsDev as $app)
                    <x-app-card :name="$app->name" :category="$app->category" :price="$app->price" />
                @endforeach
            @else
                <x-no-app />
            @endif

        </div>
    </div>
</x-app-layout>
