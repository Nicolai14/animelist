<nav x-data="{ open: false }" class="0 bg-gray-800 border-b border-gray-900 max-w-7xl mx-auto" style=" opacity: 80%">
    <!- #682F68 -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/">
                        <img class="transform transition hover:scale-105 duration-300 ease-in-out" width="90" height="90" src={{URL::asset('/assets/img/kfc2.png')}} >
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex text-blue-900 py-2 font-bold mb-2">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                      <div class="text-blue-300 py-2 font-bold mb-2 transform transition hover:scale-105 duration-300 ease-in-out">  {{ __('Dashboard') }}</div>
                    </x-nav-link>
                    <x-nav-link :href="route('list')" :active="request()->routeIs('list')">
                        <div class="text-blue-300 py-2 font-bold mb-2 transform transition hover:scale-105 duration-300 ease-in-out">  {{ __('Ainmelist') }}</div>
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            @if ( Auth::user())
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-blue-200 hover:text-gray-100 hover:border-gray-100 focus:outline-none focus:text-gray-100 focus:border-gray-100 transition duration-150 ease-in-out text-blue-100 py-2 font-bold mb-2">
                            <div>

                                {{ Auth::user()->name }}

                            </div>
                            <div class="ml-1">

                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @else
                <div class="hidden sm:flex sm:items-center sm:ml-6">

                    <a href="{{ route('login') }}">
                    <button class="flex items-center text-sm font-medium text-blue-200 hover:text-gray-100 hover:border-gray-100 focus:outline-none focus:text-gray-100 focus:border-gray-100 transition duration-150 ease-in-out text-blue-100 py-2 font-bold mb-2">
                                <div class="transform transition hover:scale-105 duration-300 ease-in-out">
                                   Login
                                </div>

                            </button>
                    </a>

                </div>
        @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-200 hover:text-gray-100 hover:bg-gray-100 focus:outline-none focus:bg-gray-400 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-800">  @if ( Auth::user())
                            {{ Auth::user()->name }}
                        @else
                            Gast
                        @endif</div>
                    <div class="font-medium text-sm text-gray-500">  @if ( Auth::user())
                            {{ Auth::user()->name }}
                        @else
                            Gast
                        @endif</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
