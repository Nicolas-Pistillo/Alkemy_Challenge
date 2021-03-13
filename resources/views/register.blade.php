<x-guest-layout>
    
    <div class="register-container min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">
                <div class="hidden md:block w-1/2 bg-indigo-500">
                    <img src="{{asset('img/login/register-img.jpg')}}" alt="register-img" class="w-full h-full object-cover">
                </div>
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">Registro</h1>
                        <p>Estas a punto de unirte a la fiesta!</p>
                    </div>
                    <form action="{{route('register')}}" method="POST">
                        
                        @csrf

                        <div class="flex -mx-3">
                            <div class="w-1/2 px-3 mb-5">
                                <label for="name" class="text-xs font-semibold px-1">Nombre</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                    <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" name="name" id="name" autofocus required placeholder="Mi nombre">
                                </div>
                            </div>
                            <div class="w-1/2 px-3 mb-5">
                                <label for="surname" class="text-xs font-semibold px-1">Apellido</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                    <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" name="surname" id="surname" placeholder="Mi apellido">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="email" class="text-xs font-semibold px-1">Email</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                    <input type="email" name="email" id="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="micorreo@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-1/2 px-3 mb-12">
                                <label for="password" class="text-xs font-semibold px-1">Crea tu contraseña</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                    <input type="password" name="password" id="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="TOP SECRET">
                                </div>
                            </div>

                            <div class="w-1/2 px-3 mb-12">
                                <label for="password2" class="text-xs font-semibold px-1">Repite tu contraseña</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                    <input type="password" name="password_confirmation" id="password2" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="TOP SECRET">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5 text-center">
                                <button type="submit" class="block w-full max-w-xs mx-auto bg-blue-500 hover:bg-blue-600 transition duration-300 ease-in-out text-white rounded-lg px-3 py-3 font-semibold mb-3">Dar de alta</button>

                                <a href="{{route('login')}}">¿Ya estas registrado?</a>
                            </div>
                            <x-jet-validation-errors class="mb-4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
