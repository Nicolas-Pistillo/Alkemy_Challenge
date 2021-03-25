<x-app-layout>
    <x-slot name="header">
        <h2 class="animate__animated animate__fadeIn font-semibold text-xl text-gray-800 leading-tight">
            Mis apps
        </h2>
    </x-slot>

    <div class="p-8 max-w-screen-xl flex mx-auto justify-center items-center flex-wrap animate__animated animate__fadeIn">

        @if (isset($boughts[0]))
            @foreach ($boughts as $appBuy)
                @php
                    $oldDate = strtotime($appBuy->getApp->created_at);
                    $newDate = date('d-m-Y',$oldDate);
                @endphp

                <x-bought-app 
                    :img="$appBuy->getApp->logo_url"
                    :dev="$appBuy->getApp->developer->alias"
                    :name="$appBuy->getApp->name"
                    :date="$newDate"
                    :category="$appBuy->getApp->getCategory->name"
                    :description="$appBuy->getApp->description"
                    :id="$appBuy->getApp->id"
                />
            @endforeach
        @else
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <x-no-app name="{{auth()->user()->name}}" />
            </div>
        @endif

    </div>
</x-app-layout>
