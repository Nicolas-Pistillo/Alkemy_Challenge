<x-app-layout>
    <x-slot name="header">
        <h2 class="animate__animated animate__fadeIn font-semibold text-xl text-gray-800 leading-tight">
            Mostrando detalles de {{$app_show->name}}
        </h2>
    </x-slot>

    <div class="p-8 max-w-screen-xl flex mx-auto justify-around items-center flex-wrap animate__animated animate__fadeIn">
        @php
            $oldDate = strtotime($app_show->created_at);
            $newDate = date('d-m-Y',$oldDate);
        @endphp

        <div class="animate__animated animate__backInLeft card-detail-wrapper">
            <x-bought-app 
                :img="$app_show->logo_url"
                :dev="$app_show->developer->alias"
                :name="$app_show->name"
                :date="$newDate"
                :category="$app_show->getCategory->name"
                :description="$app_show->description"
            />
        </div>

        <div class="client-app-actions relative mt-4">
            <span class="material-icons delete-icon absolute text-red-400 -top-1 left-1/2">delete</span>
            <button id="reembolse" data-destroy="{{$app_show->id}}" type="submit" class="bg-red-500 w-44 block my-3 text-center text-white px-4 py-3 rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-red-600 animate__animated" title="Eliminar">
                ¡Quiero un reembolso!
            </button>
        </div>
    </div>
</x-app-layout>