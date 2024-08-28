<nav x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center gap-1">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                {{-- Dashboard --}}
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-dropdown width="48">
                        <x-slot name="trigger">
                            {{-- Nav Link --}}
                            <button>
                                <x-nav-link :active="request()->routeIs('dashboard.*')">
                                    {{ __('Dashboard') }}
                                </x-nav-link>
                            </button>
                        </x-slot>
                        {{-- Content of Dropdown --}}
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('dashboard.pelanggan.index') }}">
                                {{ __('Pelanggan') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('dashboard.produk.index') }}">
                                {{ __('Produk') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('dashboard.pembelian.index') }}">
                                {{ __('Pembelian') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>

                {{-- POS --}}
                <button>
                    <x-nav-link href="{{ route('pos.index') }}" :active="request()->routeIs('pos.index')">
                        {{ __('POS') }}
                    </x-nav-link>
                </button>

                {{-- List Order --}}
                <button>
                    <x-nav-link href="{{ route('listorder.index') }}" :active="request()->routeIs('listorder.index')">
                        {{ __('List Order') }}
                    </x-nav-link>
                </button>

                {{-- Stock --}}
                <button>
                    <x-nav-link href="{{ route('stock.index') }}" :active="request()->routeIs('stock.index')">
                        {{ __('Stock') }}
                    </x-nav-link>
                </button>

                {{-- Master --}}
                <div class="hidden sm:flex">
                    <x-dropdown width="48">
                        <x-slot name="trigger">
                            <button>
                                {{-- Nav Link --}}
                                <x-nav-link :active="request()->routeIs('master.*')">
                                    {{ __('Master') }}
                                </x-nav-link>
                            </button>
                        </x-slot>
                        {{-- Content of Dropdown --}}
                        <x-slot name="content">
                            <x-dropdown-link>
                                {{ __('User') }}
                            </x-dropdown-link>
                            <x-dropdown-link href="{{ route('master.tipe') }}">
                                {{ __('Tipe Produk') }}
                            </x-dropdown-link>
                            <x-dropdown-link>
                                {{ __('Produk') }}
                            </x-dropdown-link>
                            <x-dropdown-link>
                                {{ __('Pembelian') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center transition ease-in-out duration-150">
                            <img src="{{ asset('assets/img/dummyprofile.jpg') }}" alt="" class="rounded-xl size-12">
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard.index')" :active="request()->routeIs('dashboard.index')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();this.closest('form').submit();">{{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>