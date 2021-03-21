<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl animate__animated animate__fadeIn text-gray-800 leading-tight">
            Recuerda que no puedes modificar la categoria y el nombre
        </h2>
    </x-slot>

    <div class="bg-gray-100 flex flex-col justify-center items-center sm:py-12">

        <div class="relative py-10 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow-xl rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                            <img src="{{asset('img/edit_app.png')}}" alt="img-logo" class=" w-full h-full">
                        </div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Estas editando {{$edit_app->name}}</h2>
                            <p class="text-sm italic text-gray-500 font-normal leading-relaxed">"Iterar es gran parte del proceso."</p>
                        </div>
                    </div>
                    <form action="{{route('development.update',$edit_app->id)}}" method="POST" class="divide-y divide-gray-200" enctype="multipart/form-data">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
    
                        <x-jet-validation-errors class="text-center" />
    
                        @method('put')
                        @csrf
                        
                        <div class="flex flex-col">
                            <label for="price" class="leading-loose">Precio</label>
                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                <input type="number" name="price" id="price" value="{{$edit_app->price}}" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md" placeholder="$$$">
                            </div>
                        </div>
                        <div class="flex flex-col">
                                <label for="app-img" class="leading-loose">Imagen para tu App</label>
                                <input type='file' accept="img/*" value="{{$edit_app->logo_url}}" name="app-img" id="app-img"  />
                        </div>
                        
                    </div>
                    <div class="flex flex-col">
                        <label for="description" class="leading-loose">Descripcion</label>
                        <textarea name="description" id="description" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md" placeholder="Algo interesante sobre mi app..." cols="30" rows="5">{{$edit_app->description}}</textarea>
                    </div>
                </div>
                    <div class="pt-4 flex items-center justify-center space-x-4">
                        <input type="submit" value="¡Actualizar mi App!" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-blue-600">
                    </div>
                </form>
            </div>
        </div>    
    </div>
</x-app-layout>