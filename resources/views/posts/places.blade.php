<x-app-layout>
    <div class="container py-6">

        <h1 class="text-gray-900 text-3xl font-bold text-center uppercase"> {{ $place->name }} </h1>

        <p class="text-gray-600 text-lg font-bold py-4">
            {{ $place->extract }}
        </p>

        <div class="grid grid-cols-3 gap-3">
            <div class="col-span-2">
                <figure>
                    <img class="w-full h-96 object-cover object-center"
                        src=" {{ Storage::url($place->images->first()->url) }} " alt="">
                </figure>

                    <h3 class="text-lg text-gray-800 my-2 py-2 px-4 w-52 rounded-lg  bg-gray-200">Categorias: <span class="text-gray-900 font-bold uppercase"> {{$place->category->name}} </span></h3>

                <p class="my-4 text-xl font-bold text-gray-500">
                    {{ $place->body }}
                </p>
            </div>
            <aside>
                <h1 class="text-lg font-bold text-gray-700">Más en {{ $place->state->name }} </h1>
                <div class="">
                    <ul>
                        
                        @foreach ($similares as $similar)
                            <li>
                                <a href="{{ route('posts.places', $similar) }}" class="flex my-2">
                                    <figure class="w-3/6">
                                        <img class="w-full h-20 object-cover object-center"
                                            src=" {{ Storage::url($similar->images->first()->url) }} " alt="">
                                    </figure>
                                    <h2 class="w-full pl-4 text-gray-700">{{ $similar->name }}</h2>
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </aside>
        </div>

    </div>
</x-app-layout>
