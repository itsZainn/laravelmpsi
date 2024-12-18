<header class="flex items-center justify-between px-6 py-4 bg-white border-b-4 border-indigo-600" x-data="{ dropdownOpen: false, sidebarOpen: false }">
    <div class="flex items-center justify-between px-4">
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 my-1 mr-4 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-9">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
            </svg>
        </button>
        <!-- Sidebar Toggle Button -->
        <h1 class="text-3xl italic font-semibold text-gray-500">Dashboard</h1>
        @include('components.sidebar')
    </div>

    <div class="ml-4 flex items-center md:ml-6">
        <!-- Profile Menu -->
        <div class="relative ml-3">
            <button @click="dropdownOpen = !dropdownOpen"
                class="relative block w-12 h-12 overflow-hidden rounded-full shadow focus:outline-none">
                <img class="shrink-0 object-cover w-full h-full"
                    src="https://images.unsplash.com/photo-1528892952291-009c663ce843?auto=format&fit=crop&w=296&q=80"
                    alt="Your avatar">
            </button>

            <!-- Profile Dropdown -->
            <div x-show="dropdownOpen" @click.away="isOpen = false"
                x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                {{-- <a href="#"
                    class="block px-4 py-2 text-base text-gray-700 hover:bg-indigo-600 hover:text-white">Your Fish
                    Data</a>
                <a href="#"
                    class="block px-4 py-2 text-base text-gray-700 hover:bg-indigo-600 hover:text-white">Settings</a> --}}
                <a href="{{ route('logout') }}"
                    class="block px-4 py-2 text-base text-gray-700 hover:bg-gray-300 hover:text-neutral-900">Logout</a>
            </div>
        </div>
    </div>
</header>
