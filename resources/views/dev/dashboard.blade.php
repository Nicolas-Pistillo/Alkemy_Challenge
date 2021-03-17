<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl animate__animated animate__fadeIn text-gray-800 leading-tight">
            Tus creaciones
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="p-24 flex flex-wrap items-center justify-center">
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
