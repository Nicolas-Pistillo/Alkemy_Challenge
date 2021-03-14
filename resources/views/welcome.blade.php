<x-guest-layout>
    <header class="main-hdr w-full h-screen relative">
        <div class="w-full h-screen flex justify-center items-center">
            <div class="animate__animated animate__slideInLeft mx-6 text-center text-white">
                <h1 class="font-bold text-5xl mb-3">Bienvenidos a MyAppStore</h1>
                <p class="font-semibold text-xl mb-6">La nueva revolucion de las aplicaciones ahora esta a tu alcance...y al de todos</p>
                <div>
                    <a href="{{route('login')}}" class="bg-blue-500 rounded-md font-bold text-white text-center px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-2">
                        Comenzemos
                    </a>
                </div>
            </div>
            <span class="material-icons arrow-hdr absolute bottom-5 text-white">keyboard_arrow_down</span>
        </div>
    </header>

    <main>
        <section class="welcome-section grid grid-cols-2">
            <div class="about-img-section">
                <img src="{{asset('img/home/apps-1.jpg')}}" alt="section-img-1" class="w-full h-full object-cover">
            </div>

            <div class="about-info-section flex flex-col justify-center items-center text-white text-center">

                <div class="about-info-txt w-3/4">
                    <h2 class="text-4xl mb-3">Somos amantes de las ultimas tecnologias</h2>
                    <p class="text-lg">Ofrecemos un servicio de venta y publicacion de aplicaciones de primera calidad para ofrecerte una experiencia inolvidable</p>
                </div>
            </div>
        </section>

        <section class="welcome-section grid grid-cols-2">
            <div class="about-img-section order-2">
                <img src="{{asset('img/home/apps-3.jpg')}}" alt="section-img-1" class="w-full h-full object-cover">
            </div>

            <div class="about-info-section flex flex-col justify-center items-center text-white text-center">

                <div class="about-info-txt w-3/4">
                    <h2 class="text-4xl mb-3">El lugar ideal para olvidarte de los limites</h2>
                    <p class="text-lg">Te garantizamos un entorno ideal para encontrar aquello que disfrutas, ya sea que busques tu aplicacion ideal o bien busques publicar tu obra maestra tecnologica para los demas</p>
                </div>
            </div>
        </section>

        <section class="welcome-section grid grid-cols-2">
            <div class="about-img-section">
                <img src="{{asset('img/home/apps-2.jpg')}}" alt="section-img-1" class="w-full h-full object-cover">
            </div>

            <div class="about-info-section flex flex-col justify-center items-center text-white text-center">

                <div class="about-info-txt w-3/4">
                    <h2 class="text-4xl mb-3">Conectate con el nuevo mundo</h2>
                    <p class="text-lg">Los tiempos de hoy en dia nos acercan aun mas a la tecnologia, continuemos generando vinculos desde la comodidad de nuestro hogar y de nuestros dispositivos</p>
                </div>
            </div>
        </section>

    </main>
</x-guest-layout>