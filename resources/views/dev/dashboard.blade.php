<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tus creaciones
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <h1>Tus apps creadas</h1>

            @php
                echo "<pre>";
                   // print_r($lol);
                echo "</pre>";
            @endphp

        </div>
    </div>
</x-app-layout>
