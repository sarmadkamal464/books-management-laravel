<div class="">
    <div class="w-100 flex justify-end">
        <form class="max-w-sm">
            <!-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label> -->
            <select wire:change="filter" wire:model="filterValue" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="all" selected>All</option>
                <option value="fav">Favorites</option>
            </select>
        </form>

    </div>
    @if($filterValue == 'all')
    <section class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
        @foreach($books as $book)
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="{{ $book['image'] }}" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <p class="text-lg font-bold text-black truncate block capitalize">{{ $book->name }}</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">{{ $book->price }}</p>
                        <div class="ml-auto">
                            <svg wire:click="addFav({{$book->id}})" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 heart-svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>
    @elseif($filterValue == 'fav')
    <h1>Fav</h1>

    <section class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
        @foreach($favBooks as $favBook)
        <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
            <a href="#">
                <img src="{{ $favBook->book->image }}" alt="Product" class="h-80 w-72 object-cover rounded-t-xl" />
                <div class="px-4 py-3 w-72">
                    <p class="text-lg font-bold text-black truncate block capitalize">{{ $favBook->book->name }}</p>
                    <div class="flex items-center">
                        <p class="text-lg font-semibold text-black cursor-auto my-3">{{ $favBook->book->price }}</p>
                        <div class="ml-auto">
                            <svg wire:click="removeFav({{$favBook->id}})" xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 heart-svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </section>
    @endif
</div>
