<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl animate__animated animate__fadeIn text-gray-800 leading-tight">
            ¡Crea algo fantastico!
        </h2>
    </x-slot>

    <div class="bg-gray-100 flex flex-col justify-center sm:py-12">
        <div class="relative py-10 sm:max-w-xl sm:mx-auto">
        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow-xl rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
            <div class="flex items-center space-x-5">
                <div class="h-14 w-14 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                    <img src="{{asset('img/create_app.png')}}" alt="img-logo" class=" w-full h-full">
                </div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                <h2 class="leading-relaxed">Estas creando tu aplicacion</h2>
                <p class="text-sm text-gray-500 font-normal leading-relaxed">Deja que tu imaginacion se divierta.</p>
                </div>
            </div>
            <form action="{{route('development.store')}}" method="POST" class="divide-y divide-gray-200" enctype="multipart/form-data">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">

                @csrf

                <div class="flex flex-col">
                        <label for="name" class="leading-loose">Nombre</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" class="px-4 py-2 border-gray-300 w-full sm:text-sm rounded-md" placeholder="Nombre de mi app">
                    </div>
                    <div class="flex flex-col">
                        <label for="category" class="leading-loose">Categoria</label>
                        <select name="category" id="category" class="rounded-md border-gray-300">
                            <option value="">Selecciona una categoria</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
                    
                        <div class="flex flex-col">
                            <label for="price" class="leading-loose">Precio</label>
                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                <input type="number" name="price" id="price" value="{{old('price')}}" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md" placeholder="$$$">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <!--<label class="flex flex-col items-center px-4 py-6 bg-blue-500  rounded-lg shadow-lg tracking-wide uppercase border border-blue transition duration-300 ease-in-out cursor-pointer hover:bg-blue-600 text-white">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">imagen de tu App</span>
                                <input type='file' accept="img/*" class="hidden" />
                            </label>-->
                            <label for="app-img" class="leading-loose">Imagen para tu App</label>
                            <input type='file' accept="img/*" name="app-img" id="app-img" />
                        </div>
                    
                </div>
                <div class="flex flex-col">
                    <label for="description" class="leading-loose">Descripcion</label>
                    <textarea name="description" id="description" class="px-4 py-2 border w-full sm:text-sm border-gray-300 rounded-md" placeholder="Algo interesante sobre mi app..." cols="30" rows="5">{{old('description')}}</textarea>
                </div>
                </div>
                <div class="pt-4 flex items-center space-x-4">
                    <input type="submit" value="¡Lanzar mi App!" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-blue-600">
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>

</x-app-layout>