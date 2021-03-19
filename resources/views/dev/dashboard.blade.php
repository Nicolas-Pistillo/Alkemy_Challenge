<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl animate__animated animate__fadeIn text-gray-800 leading-tight">
            Tus creaciones
        </h2>
    </x-slot>

            @if (isset($appsDev[0]))
                <div class="p-24 animate__animated animate__fadeIn flex flex-wrap items-center justify-center">
                    @foreach ($appsDev as $app)
                        <x-card-dev :name="$app->name" 
                            :category="$app->getCategory->name" 
                            :price="$app->price" 
                            :img="$app->logo_url" 
                            :description="$app->description" 
                            :id="$app->id" />
                    @endforeach
                </div>
            @else
                <x-no-app :name="$dev->name" />
            @endif

</x-app-layout>
