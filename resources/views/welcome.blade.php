<x-app-layout>
    <div class="container py-6">
        <div class="grid grid-cols-3 gap-6">
            @foreach ($states as $state)
                <section class="bg-gray-200 rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-3 transition ease-in duration-100">
                    <a href=" {{ route('posts.states', $state) }} ">
                        <figure>
                            <img class="h-64 w-full object-cover object-center "
                                src=" {{ Storage::url($state->image) }} " alt="">
                        </figure>

                        <div class="py-3 px-4">
                            <h1 class="text-lg text-gray-700 font-semibold uppercase">
                                {{ $state->name }}
                            </h1>
                            <p class="text-sm text-gray-500">
                                {{ Str::limit($state->extract, 50) }}
                            </p>
                        </div>
                    </a>
                </section>
            @endforeach
        </div>
    </div>
</x-app-layout>
