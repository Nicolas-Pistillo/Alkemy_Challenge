<x-guest-layout>
        
    <div class="main-login w-full flex flex-wrap overflow-hidden">

        <!-- Login Section -->
        <div class="w-full login-form-container md:w-1/2 flex flex-col bg-b">

            <div class="flex justify-center md:justify-start pt-12 md:pl-12 md:-mb-24">
                <a href="{{route('home')}}" class="brand-login font-bold text-4xl text-blue-500 cursor-pointer"
                ><span class="material-icons">
                    subdirectory_arrow_left
                </span> Home</a>
            </div>

            <div class="flex flex-col animate__animated animate__fadeInUp justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-8 lg:px-32">
                <p class="text-center text-3xl">Bienvenido nuevamente, por favor, ingrese sus credenciales</p>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="flex flex-col pt-3 md:pt-8" action="{{route('login')}}" method="POST">
                    
                    @csrf

                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Correo Electronico</label>
                        <input type="email" name="email" id="email" placeholder="tucorreo@email.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" :value="old('email')" required autofocus>
                    </div>
    
                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="Tucontraseña.123" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline" required autocomplete="current-password">
                    </div>
    
                    <input type="submit" value="Iniciar sesion" class="bg-blue-500 outline-none rounded-md w-40 mx-auto text-white font-bold text-lg transition duration-300 ease-in-out hover:bg-blue-600 p-2 mt-8 cursor-pointer">
                </form>

                <a href="{{route('register')}}" class="mx-auto mt-3 duration-300 ease-in-out hover:underline">¿Aun no estas registrado?</a>

                <x-jet-validation-errors class="mt-3"/>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2 shadow-2xl">
            <img class="object-cover w-full h-screen hidden md:block" src="{{asset('img/login/man-img-login.jpg')}}">
        </div>
    </div>

</x-guest-layout>

