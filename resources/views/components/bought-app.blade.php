@props([
    'img',
    'dev',
    'name',
    'date',
    'category',
    'description'
])

<div class="w-80 m-4">
    <div style="height: 30rem;" class="grid grid-cols-3 grid-rows-7 grid-flow-row overflow-hidden rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
        <div class="col-span-3 row-span-4 p-1 m-1">
            <img src="{{$img}}" alt="Placeholder" class="rounded-t-xl object-cover h-48 w-full"/>
        </div>

        <div class="col-span-3 row-span-1">
            <div class="flex align-bottom flex-col leading-none px-4 md:p-4">
                <div class="flex flex-row justify-between items-center">
                    <div class="flex items-center text-black">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random"/>
                        <span class="ml-2 text-sm">By {{$dev}} </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-3 row-span-1">
            <p class="px-4 pb-4">{{$description}}</p>
        </div>

        <div class="col-span-3 row-span-1">
            <header class="flex items-center justify-between leading-tight px-4">
                <h1 class="text-lg">
                    <span class="text-black">
                        {{$name}}
                    </span>
                </h1>
                <p class="text-grey-darker text-sm">Comprado: {{$date}}</p>
            </header>
        </div>

        <div class="col-span-3 row-span-1">
            <ul class="flex flex-row px-4 text-gray-600">
                <li class="py-1">
                    <div class="transition duration-300 ease-in-out rounded-2xl mr-1 px-2 py-1 hover:bg-blue-200 text-gray-500 hover:text-gray-800">
                        <span>#{{$category}}</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>