<div class="min-h-screen bg-gray-100 p-2">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @if ($blade == 'index')
        <div class="w-full flex justify-end">
            <button class="bg-blue-500 hover:bg-blue-700 text-white px-3 font-bold rounded"
                wire:click="changeView('add')">
                Add user
            </button>
        </div>
        <div class="min-h-screen flex justify-center items-start pt-2">
            <div class="container flex justify-center bg-red-400 gap-10 flex-wrap p-2">
                <div class="max-w-80  bg-current">
                    <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80"
                            alt="" />
                        <div class="py-6 px-8 rounded-lg bg-white">
                            <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                                The
                                Song of Ice & Fire</h1>
                            <p class="text-gray-700 tracking-wide text-sm">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                            <button
                                class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Read
                                more</button>
                        </div>
                    </div>
                </div>
                <div class="max-w-80  bg-current">
                    <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80"
                            alt="" />
                        <div class="py-6 px-8 rounded-lg bg-white">
                            <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                                The
                                Song of Ice & Fire</h1>
                            <p class="text-gray-700 tracking-wide text-sm">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                            <button
                                class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Read
                                more</button>
                        </div>
                    </div>
                </div>
                <div class="max-w-80  bg-current">
                    <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80"
                            alt="" />
                        <div class="py-6 px-8 rounded-lg bg-white">
                            <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                                The
                                Song of Ice & Fire</h1>
                            <p class="text-gray-700 tracking-wide text-sm">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                            <button
                                class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Read
                                more</button>
                        </div>
                    </div>
                </div>
                <div class="max-w-80  bg-current">
                    <div class="bg-white relative shadow-lg hover:shadow-xl transition duration-500 rounded-lg">
                        <img class="rounded-t-lg"
                            src="https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1049&q=80"
                            alt="" />
                        <div class="py-6 px-8 rounded-lg bg-white">
                            <h1 class="text-gray-700 font-bold text-2xl mb-3 hover:text-gray-900 hover:cursor-pointer">
                                The
                                Song of Ice & Fire</h1>
                            <p class="text-gray-700 tracking-wide text-sm">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Eum, labore. Ea debitis beatae sequi deleniti.</p>
                            <button
                                class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-md hover:shadow-lg transition duration-300">Read
                                more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @elseif($blade == 'add')
        <div>
            <form class="max-w-sm mx-auto">
                <div class="mb-5">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book
                        Title</label>
                    <input type="text" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Book Title" required wire:model="title" />
                </div>
                <div class="mb-5">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book
                        price</label>
                    <input type="number" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required wire:model="price" />
                </div>
                <div class="mb-5">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Book
                        Image</label>
                    <input type="file" id="image"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required wire:model="image"/>
                </div>
                <div class="mb-5">

                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea id="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Book Description" wire:model='description'></textarea>

                </div>
                <button wire:click="save" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    @endif
</div>
