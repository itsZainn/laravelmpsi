<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div x-data="{ cartOpen: false, isOpen: false }" class="bg-white">
        <main class="my-3">
            <div class="flex flex-col items-center">
                <div class="relative m-6 max-w-lg mx-auto">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                        <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <input
                        class="w-full border rounded-md pl-10 pr-10 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Search">
                </div>
            </div>
            <div class="container mx-auto px-6 ">
                {{-- <div class="h-64 rounded-md overflow-hidden bg-cover bg-center"
                    style="background-image: url('https://images.unsplash.com/photo-1577655197620-704858b270ac?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1280&q=144')">
                    <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                        <div class="px-10 max-w-xl">
                            <h2 class="text-2xl text-white font-semibold">Sport Shoes</h2>
                            <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                            <button
                                class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <span>Shop Now</span>
                                <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="md:flex mt-8 md:-mx-4">
                    <div class="w-full h-64 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:w-1/2"
                        style="background-image: url('https://images.unsplash.com/photo-1547949003-9792a18a2601?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Back Pack</h2>
                                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit.
                                    Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                <button
                                    class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                    <span>Shop Now</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-64 mt-8 md:mx-4 rounded-md overflow-hidden bg-cover bg-center md:mt-0 md:w-1/2"
                        style="background-image: url('https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                        <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                            <div class="px-10 max-w-xl">
                                <h2 class="text-2xl text-white font-semibold">Games</h2>
                                <p class="mt-2 text-gray-400">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit.
                                    Tempore facere provident molestias ipsam sint voluptatum pariatur.</p>
                                <button
                                    class="flex items-center mt-4 text-white text-sm uppercase font-medium rounded hover:underline focus:outline-none">
                                    <span>Shop Now</span>
                                    <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="mt-1">
                    <h3 class="text-gray-600 text-2xl font-medium">Fish</h3>
                    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover"
                                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSei7_aJzwNNfVSfUXtX7aufgmk6O2FXpqrLw&s')">
                                <button
                                    class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">Chanel</h3>
                                <span class="text-gray-500 mt-2">$12</span>
                            </div>
                        </div>
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover"
                                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPrNFiVsBcL548bE_-UtD819e4wgOKaQHxJA&s')">
                                <button
                                    class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">Man Mix</h3>
                                <span class="text-gray-500 mt-2">$12</span>
                            </div>
                        </div>
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover"
                                style="background-image: url('data:image/jpeg;base64,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')">
                                <button
                                    class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">Classic watch</h3>
                                <span class="text-gray-500 mt-2">$12</span>
                            </div>
                        </div>
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-56 w-full bg-cover"
                                style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHj0xJAhnQ1T20JQ3-NEyIPQCe8EyXyltjiw&s')">
                                <button
                                    class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">woman mix</h3>
                                <span class="text-gray-500 mt-2">$12</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-200">
            <div class="container mx-auto px-6 py-3 flex justify-between items-center">
                <a href="#" class="text-xl font-bold text-gray-500 hover:text-gray-400">
                    <span class="text-blue-500">
                        Cahya Aquatic
                    </span>
                </a>
                <p class="py-2 text-gray-500 sm:py-0">Sumberagung, Wates, Kediri</p>
            </div>
        </footer>
    </div>
</x-layout>
