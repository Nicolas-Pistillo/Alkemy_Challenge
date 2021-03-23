<x-app-layout>
    <x-slot name="header">
        <h2 class="animate__animated animate__fadeIn font-semibold text-xl text-gray-800 leading-tight">
            Gran eleccion, ¡esa app luce genial!
        </h2>
    </x-slot>
<article>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col items-center md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 shadow-xl">
                        <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
                            <img class="w-full h-full rounded-lg object-cover" src="{{$app_detail->logo_url}}" alt="{{$app_detail->name}}-img">
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">{{$app_detail->name}}</h2>
                    <p class="text-gray-500 text-sm">Creador: 
                        <span class="text-blue-500">{{$app_detail->developer->alias}}</span>
                    </p>
    
                    <div class="flex items-center space-x-4 my-4">
                        <div>
                            <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                                <span class="text-green-500 mr-1 mt-1">$</span>
                                <span class="font-bold text-green-500 text-3xl">{{$app_detail->price}}</span>
                            </div>
                        </div>
                    </div>
    
                    <p class="mb-3">{{$app_detail->description}}</p>

                    <p class="italic text-gray-500">MyAppStore&copy; asegura la calidad de tus compras con un plazo sin cargo de 3 meses para el reembolso de tu app si esta no cumple con tus expectativas, cosa que es muy improbable ;)</p>
    
                    <div class="flex py-4 space-x-4 items-center">
                        <div class="relative">
                            <button style="outline: none;" type="button" id="buyApp" class="h-14 px-6 py-2 font-semibold rounded-md transition duration-300 ease-in-out bg-blue-500 hover:bg-blue-600 text-white">
                            Comprar
                            </button>
                        </div>
                        <div class="relative">
                            <a href="{{route('shop.index')}}" class="block bg-gray-500 w-max rounded-md mx-auto outline-none font-bold text-white text-center px-6 py-4 transition duration-300 ease-in-out hover:bg-gray-600 cursor-pointer">Seguir comprando</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

</x-app-layout>