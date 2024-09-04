{{-- Sidebar Component begin:: --}}
<aside id="logo-sidebar"
  class="sticky top-0 left-0 h-screen pt-20 transition-transform -translate-x-full sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
  aria-label="Sidebar">
  {{-- Sidebar content begin:: --}}
  <div class="h-full px-2 py-8 dark:bg-gray-800">
    {{-- Sidebar Content - Navlink begin:: --}}
    <ul class="space-y-4 font-medium flex flex-col justify-center">
      {{-- Sidebar Content - Navlink - Dashboard begin:: --}}
      <li>
        {{-- Sidebar Content - Navlink - Dashboard - Component - Button Trigger List menu begin:: --}}
        <div class="group relative w-fit">
          <button aria-controls="dropdown-dashboard" data-collapse-toggle="dropdown-dashboard">
            <x-nav-link :active="request()->routeIs('dashboard.*')">
              <div class="p-1">
                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  viewBox="0 0 22 21">
                  <path
                    d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                  <path
                    d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                </svg>
              </div>
            </x-nav-link>
          </button>

          {{-- Sidebar Content - Navlink - Dashboard - Component - Button Hover:Label ::end --}}
          <span
            class="absolute top-1 left-[110%] -translate-x-[0%] z-60 origin-left scale-0 px-3 rounded-lg bg-white border border-light-gray py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out group-hover:scale-100">Dashboard
          </span>
          {{-- Sidebar Content - Navlink - Dashboard - Component - Button Hover:Label ::end --}}
        </div>
        {{-- Sidebar Content - Navlink - Dashboard - Component - Button Trigger List menu ::end --}}
        {{-- Sidebar Content - Navlink - Dashboard - Component - List menu begin:: --}}
        <ul id="dropdown-dashboard" class="hidden p-2 space-y-2 mt-2 bg-white rounded-xl w-full">
          {{-- List menu - Route Customer begin:: --}}
          <x-list-menu href="{{ route('dashboard.pelanggan.index') }}">Customer</x-list-menu>
          {{-- List menu - Route Customer ::end --}}
          {{-- List menu - Route Product begin:: --}}
          <x-list-menu href="{{ route('dashboard.produk.index') }}">Product</x-list-menu>
          {{-- List menu - Route Product ::end --}}
          {{-- List menu - Route Purchase begin:: --}}
          <x-list-menu href="{{ route('dashboard.produk.index') }}">Purchase</x-list-menu>
          {{-- ist menu - Route Purchase ::end --}}
        </ul>
        {{-- Sidebar Content - Navlink - Dashboard - Component - List menu ::end --}}
      </li>
      {{-- Sidebar Content - Navlink - Dashboard ::end --}}

      {{-- Sidebar Content - Navlink - POS begin:: --}}
      <li>
        <div class="group relative w-fit">
          {{-- Sidebar Content - Navlink - Dashboard - Component - Button Route begin:: --}}
          <button>
            <x-nav-link href="{{ route('pos.index') }}" :active="request()->routeIs('pos.*')">
              <div class="p-1">
                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M15.78 2H8.22C4.44 2 3.5 3.01 3.5 7.04V18.3C3.5 20.96 4.96 21.59 6.73 19.69L6.74 19.68C7.56 18.81 8.81 18.88 9.52 19.83L10.53 21.18C11.34 22.25 12.65 22.25 13.46 21.18L14.47 19.83C15.19 18.87 16.44 18.8 17.26 19.68C19.04 21.58 20.49 20.95 20.49 18.29V7.04C20.5 3.01 19.56 2 15.78 2ZM7.78 12C7.23 12 6.78 11.55 6.78 11C6.78 10.45 7.23 10 7.78 10C8.33 10 8.78 10.45 8.78 11C8.78 11.55 8.33 12 7.78 12ZM7.78 8C7.23 8 6.78 7.55 6.78 7C6.78 6.45 7.23 6 7.78 6C8.33 6 8.78 6.45 8.78 7C8.78 7.55 8.33 8 7.78 8ZM16.23 11.75H10.73C10.32 11.75 9.98 11.41 9.98 11C9.98 10.59 10.32 10.25 10.73 10.25H16.23C16.64 10.25 16.98 10.59 16.98 11C16.98 11.41 16.64 11.75 16.23 11.75ZM16.23 7.75H10.73C10.32 7.75 9.98 7.41 9.98 7C9.98 6.59 10.32 6.25 10.73 6.25H16.23C16.64 6.25 16.98 6.59 16.98 7C16.98 7.41 16.64 7.75 16.23 7.75Z"
                    fill="currentColor" />
                </svg>
              </div>
            </x-nav-link>
          </button>
          {{-- Sidebar Content - Navlink - Dashboard - Component - Button Route ::end --}}
          {{-- Sidebar Content - Navlink - Dashboard - Component - Button Hover:Label begin:: --}}
          <span
            class="absolute top-1 left-[110%] -translate-x-[0%] z-20 origin-left scale-0 px-3 rounded-lg bg-white border border-light-gray py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out group-hover:scale-100 w-32">Point
            Of Sale
          </span>
          {{-- Sidebar Content - Navlink - Dashboard - Component - Button Hover:Label begin:: --}}
        </div>
      </li>
      {{-- Sidebar Content - Navlink - POS ::end --}}

      {{-- Sidebar Content - Navlink - List Order begin:: --}}
      <li>
        <div class="group relative w-fit">
          <button>
            <x-nav-link href="{{ route('listorder.index') }}" :active="request()->routeIs('listorder.*')">
              <div class="p-1">
                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M5.58579 4.58579C5 5.17157 5 6.11438 5 8V17C5 18.8856 5 19.8284 5.58579 20.4142C6.17157 21 7.11438 21 9 21H15C16.8856 21 17.8284 21 18.4142 20.4142C19 19.8284 19 18.8856 19 17V8C19 6.11438 19 5.17157 18.4142 4.58579C17.8284 4 16.8856 4 15 4H9C7.11438 4 6.17157 4 5.58579 4.58579ZM9 8C8.44772 8 8 8.44772 8 9C8 9.55228 8.44772 10 9 10H15C15.5523 10 16 9.55228 16 9C16 8.44772 15.5523 8 15 8H9ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H15C15.5523 14 16 13.5523 16 13C16 12.4477 15.5523 12 15 12H9ZM9 16C8.44772 16 8 16.4477 8 17C8 17.5523 8.44772 18 9 18H13C13.5523 18 14 17.5523 14 17C14 16.4477 13.5523 16 13 16H9Z" />
                </svg>
              </div>
            </x-nav-link>
          </button>
          <span
            class="absolute top-1 left-[110%] -translate-x-[0%] z-20 origin-left scale-0 px-3 rounded-lg bg-white border border-light-gray py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out group-hover:scale-100 w-26">Order
            List
          </span>
        </div>
      </li>
      {{-- Sidebar Content - Navlink - List Order ::end --}}

      {{-- Sidebar Content - Navlink - Stock begin:: --}}
      <li>
        <div class="group relative w-fit">
          <button>
            <x-nav-link href="{{ route('stock.index') }}" :active="request()->routeIs('stock.*')">
              <div class="p-1">
                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M20.2083 7.82141L12.5083 12.2814C12.1983 12.4614 11.8083 12.4614 11.4883 12.2814L3.78826 7.82141C3.23826 7.50141 3.09826 6.75141 3.51826 6.28141C3.80826 5.95141 4.13826 5.68141 4.48826 5.49141L9.90826 2.49141C11.0683 1.84141 12.9483 1.84141 14.1083 2.49141L19.5283 5.49141C19.8783 5.68141 20.2083 5.96141 20.4983 6.28141C20.8983 6.75141 20.7583 7.50141 20.2083 7.82141Z" />
                  <path
                    d="M11.4305 14.1389V20.9589C11.4305 21.7189 10.6605 22.2189 9.98047 21.8889C7.92047 20.8789 4.45047 18.9889 4.45047 18.9889C3.23047 18.2989 2.23047 16.5589 2.23047 15.1289V9.9689C2.23047 9.1789 3.06047 8.6789 3.74047 9.0689L10.9305 13.2389C11.2305 13.4289 11.4305 13.7689 11.4305 14.1389Z" />
                  <path
                    d="M12.5703 14.1389V20.9589C12.5703 21.7189 13.3403 22.2189 14.0203 21.8889C16.0803 20.8789 19.5503 18.9889 19.5503 18.9889C20.7703 18.2989 21.7703 16.5589 21.7703 15.1289V9.9689C21.7703 9.1789 20.9403 8.6789 20.2603 9.0689L13.0703 13.2389C12.7703 13.4289 12.5703 13.7689 12.5703 14.1389Z" />
                </svg>
              </div>
            </x-nav-link>
          </button>
          <span
            class="absolute top-1 left-[110%] -translate-x-[0%] z-20 origin-left scale-0 px-3 rounded-lg bg-white border border-light-gray py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out group-hover:scale-100 w-fit">Stock
          </span>
        </div>
      </li>
      {{-- Sidebar Content - Navlink - Stock ::end --}}

      {{-- Sidebar Content - Navlink - Master begin:: --}}
      <li>
        <div class="group relative w-fit">
          <button aria-controls="dropdown-master" data-collapse-toggle="dropdown-master">
            <x-nav-link :active="request()->routeIs('master.*')">
              <div class="p-1">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                  viewBox="0 0 22 21">
                  <path
                    d="M20 14.25C21.2426 14.25 22.25 13.2426 22.25 12C22.25 10.7574 21.2426 9.75 20 9.75C18.7574 9.75 17.75 10.7574 17.75 12C17.75 13.2426 18.7574 14.25 20 14.25Z" />
                  <path
                    d="M20 6.25C21.2426 6.25 22.25 5.24264 22.25 4C22.25 2.75736 21.2426 1.75 20 1.75C18.7574 1.75 17.75 2.75736 17.75 4C17.75 5.24264 18.7574 6.25 20 6.25Z" />
                  <path
                    d="M20 22.25C21.2426 22.25 22.25 21.2426 22.25 20C22.25 18.7574 21.2426 17.75 20 17.75C18.7574 17.75 17.75 18.7574 17.75 20C17.75 21.2426 18.7574 22.25 20 22.25Z" />
                  <path
                    d="M4 14.25C5.24264 14.25 6.25 13.2426 6.25 12C6.25 10.7574 5.24264 9.75 4 9.75C2.75736 9.75 1.75 10.7574 1.75 12C1.75 13.2426 2.75736 14.25 4 14.25Z" />
                  <path
                    d="M19 12.75C19.41 12.75 19.75 12.41 19.75 12C19.75 11.59 19.41 11.25 19 11.25H11.75V7C11.75 5.42 12.42 4.75 14 4.75H19C19.41 4.75 19.75 4.41 19.75 4C19.75 3.59 19.41 3.25 19 3.25H14C11.58 3.25 10.25 4.58 10.25 7V11.25H5C4.59 11.25 4.25 11.59 4.25 12C4.25 12.41 4.59 12.75 5 12.75H10.25V17C10.25 19.42 11.58 20.75 14 20.75H19C19.41 20.75 19.75 20.41 19.75 20C19.75 19.59 19.41 19.25 19 19.25H14C12.42 19.25 11.75 18.58 11.75 17V12.75H19Z" />
                </svg>
              </div>
            </x-nav-link>
          </button>
          <span
            class="absolute top-1 left-[110%] -translate-x-[0%] z-20 origin-left scale-0 px-3 rounded-lg bg-white border border-light-gray py-2 text-sm font-bold shadow-md transition-all duration-300 ease-in-out group-hover:scale-100 w-29">Master
            Data
          </span>
        </div>
        {{-- Master Dropdown items nih bro! --}}
        <ul id="dropdown-master" class="hidden py-2 space-y-2">
          <li>
            <a href="{{ route('master.tipe') }}"
              class="flex items-center w-full p-2 text-grayish-cyan transition duration-75 group hover:text-button2 dark:text-white dark:hover:bg-gray-700">Product
              Type
            </a>
          </li>
          <li>
            <a href="{{ route('dashboard.produk.index') }}"
              class="flex items-center w-full p-2 text-grayish-cyan transition duration-75 group hover:text-button2 dark:text-white dark:hover:bg-gray-700">Customer
              Type</a>
          </li>
          <li>
            <a href="{{ route('dashboard.produk.index') }}"
              class="flex items-center w-full p-2 text-grayish-cyan transition duration-75 group hover:text-button2 dark:text-white dark:hover:bg-gray-700">User
              Account</a>
          </li>
        </ul>
      </li>
      {{-- Sidebar Content - Navlink - master ::end --}}
    </ul>
    {{-- Sidebar Content - Navlink ::end --}}
  </div>
  {{-- Sidebar content ::end --}}
</aside>
{{-- Sidebar Component ::end --}}