<style>
    .card:hover{
        overflow: visible;
    }
</style>

<x-app-layout>
    <div class="container py-6">

        <h1 class="text-gray-900 text-3xl font-bold text-center uppercase"> {{ $state->name }} </h1>

        <p class="text-gray-600 text-lg font-bold py-4">
            {{ $state->extract }}
        </p>

        <div class="grid grid-cols-3 gap-3">
            <div class="col-span-2">
                <figure>
                    <img class="w-full h-96 object-cover object-center" src=" {{ Storage::url($state->image) }} "
                        alt="">
                </figure>

                <p class="my-4 text-xl font-bold text-gray-500">
                    {{ $state->body }}
                </p>
            </div>
            <aside>
                <h1 class="text-lg font-bold text-gray-700">Más en mundo Maya</h1>
                <div class="">
                    <ul>
                        @foreach ($estados as $estado)
                            <li>
                                <a href="{{ route('posts.states', $estado) }}" class="flex my-2">
                                    <figure class="w-3/6">
                                        <img class="w-full h-20 object-cover object-center"
                                            src=" {{ Storage::url($estado->image) }} " alt="">
                                    </figure>
                                    <h2 class="w-full pl-4 text-gray-700">{{ $estado->name }}</h2>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>


        <div class="">
            <ul class="grid grid-cols-3 gap-4">
                @foreach ($places as $place)
                    <li class="card bg-gray-200 rounded-lg overflow-hidden">
                        <figure>
                            <img class="h-32 w-full object-cover object-center transform hover:scale-y-110 transition ease-in duration-300  "
                                src=" {{ Storage::url($place->images->first()->url) }} " alt="">
                        </figure>
                        <div class="px-3">
                            <a href=" {{route('posts.places', $place)}} " class="px-3 py-1">
                                <h2 class="text-gray-900 text-lg font-semibold"> {{ $place->name }} </h2>
                                <p class="text-gray-500 text-sm"> {{ Str::limit($place->extract, 20) }} </p>
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>
