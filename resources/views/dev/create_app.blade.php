<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl animate__animated animate__fadeIn text-gray-800 leading-tight">
            ¡Crea algo fantastico!
        </h2>
    </x-slot>

    <div class="bg-gray-100 flex flex-col justify-center items-center sm:py-12">

        @if (!session('created_ok'))
        
        <div class="relative py-10 sm:max-w-xl sm:mx-auto">

        <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow-xl rounded-3xl sm:p-10">
            <div class="max-w-md mx-auto">
            <div class="flex items-center space-x-5">
                <div class="h-14 w-14 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">
                    <img src="{{asset('img/create_app.png')}}" alt="img-logo" class=" w-full h-full">
                </div>
                <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                    <h2 class="leading-relaxed">Estas creando una aplicación</h2>
                    <p class="text-sm text-gray-500 font-normal leading-relaxed">Deja que tu imaginacion se divierta.</p>
                </div>
            </div>
            <form action="{{route('development.store')}}" method="POST" class="divide-y divide-gray-200" enctype="multipart/form-data">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">

                <x-jet-validation-errors class="text-center" />

                @csrf

                <div class="flex flex-col">
                        <label for="name" class="leading-loose">Nombre <small class="text-yellow-400">*No podras modificarlo mas adelante</small> </label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" class="px-4 py-2 border-gray-300 w-full rounded-md" placeholder="Nombre de mi app">
                    </div>
                    <div class="flex flex-col">
                        <label for="category" class="leading-loose">Categoria <small class="text-yellow-400">*No podras modificarla mas adelante</small> </label>
                        <select name="category" id="category" class="rounded-md border-gray-300">
                            <option value="">Selecciona una categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                        <div class="flex flex-col">
                            <label for="price" class="leading-loose">Precio</label>
                            <div class="relative">
                                <input type="number" name="price" id="price" value="{{old('price')}}" class="px-4 py-2 border w-full border-gray-300 rounded-md" placeholder="$$$">
                            </div>
                        </div>
                        <div class="flex flex-col">
                            <label for="app-img" class="leading-loose">Imagen para tu App</label>
                            <input type='file' accept="img/*" name="app-img" id="app-img" />
                        </div>
                    
                </div>
                <div class="flex flex-col">
                    <label for="description" class="leading-loose">Descripcion</label>
                    <textarea name="description" id="description" class="px-4 py-2 border w-full border-gray-300 rounded-md" placeholder="Algo interesante sobre mi app..." cols="30" rows="5">{{old('description')}}</textarea>
                </div>
                </div>
                <div class="pt-4 flex items-center justify-center space-x-4">
                    <input type="submit" value="¡Lanzar mi App!" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md transition duration-300 ease-in-out cursor-pointer hover:bg-blue-600">
                </div>
            </form>
            </div>
        </div>
            
        @else
        <div class="succes-user-container animate__animated animate__bounceIn  w-80 text-center bg-white shadow-xl rounded-xl p-8 m-8">
            <span class="material-icons text-white mb-3 p-1 bg-green-700 rounded-full">
                done
            </span>

            <div class="text-green-700">
                <h3 class="font-bold text-2xl mb-3">¡Tu aplicacion fue creada con éxito!</h3>

                <p class="text-black mb-3">Muchas gracias por aportar tu maravilla tecnologica a esta comunidad, ¡Ahora puedes verla en tu dashboard y en la tienda!.</p>

                <a href="{{route('dashboard')}}" class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-600 transition duration-300 ease-in-out text-white rounded-lg px-3 py-3 font-semibold">Volver a dashboard</a>
            </div>
        </div>
        @endif
        </div>
    </div>

</x-app-layout>