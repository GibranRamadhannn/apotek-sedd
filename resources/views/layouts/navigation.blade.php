<nav class="fixed top-0 z-50 w-full bg-bg">
    <div class="px-3 py-2 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-center gap-8">

                {{-- Responsive - Sidebar Button Start --}}
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                {{-- Responsive - Sidebar Button End --}}

                {{-- Application Logo Start --}}
                <div class="p-4 bg-white rounded-full">
                    <a href="/">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-800" />
                    </a>
                </div>
                {{-- Application Logo End --}}

                {{-- Breadcrumbs Start --}}
                <div class="flex justify-center items-center gap-3">
                    {{-- Header label --}}
                    <div class="w-full">
                        {{ $header }}
                    </div>
                    <div class="h-6 border-r-2 border-dark-gray"></div>
                    {{-- Breadcrumbs --}}
                    <div class="leading-tight">
                        @isset($breadcrumbs)
                        @include('layouts.breadcrumb')
                        @endisset
                    </div>
                </div>
                {{-- Breadcrumbs End --}}
            </div>

            {{-- Photo Profile Dropdown Start --}}
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <x-dropdown align="right" width="48">
                            {{-- Nah ini button pembuka dropdownnya --}}
                            <x-slot name="trigger">
                                <button class="inline-flex items-center transition ease-in-out duration-150">
                                    <img src="{{ asset('assets/img/dummyprofile.jpg') }}" alt=""
                                        class="rounded-xl size-12">
                                </button>
                            </x-slot>
                            {{-- Nah ini button pembuka dropdownnya --}}

                            {{-- Content Dropdown disini ya --}}
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
                            {{-- Content Dropdown disini ya --}}
                        </x-dropdown>
                    </div>
                </div>
            </div>
            {{-- Photo Profile Dropdown End --}}
        </div>
    </div>
</nav>