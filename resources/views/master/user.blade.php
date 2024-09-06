<x-app-layout>
    {{-- Header begin:: --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Account') }}
        </h2>
    </x-slot>
    {{-- Header ::end --}}

    @section('title','Master User')

    {{-- Code begin:: --}}
    <div class="py-8">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-4">
            {{-- Content begin:: --}}
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg col-span-2">
                {{-- Top Content begin:: --}}
                <div class="p-3">
                    <div class="flex flex-col justify-start items-start gap-4">
                        {{-- Label Table begin:: --}}
                        <label for="tabelDataDashboard" class="text-2xl font-semibold text-black">User Account</label>
                        {{-- Label Table ::end --}}
                        {{-- Modal add user begin:: --}}
                        <div class="flex items-center gap-2">
                            <div x-data="{ open: false }">
                                {{-- Button Trigger Modal begin:: --}}
                                <button x-data="{ open: false }"
                                    x-on:click.prevent="$dispatch('open-modal', 'tambah-user')"
                                    class="justify-center inline-flex items-center px-3 py-2 border bg-dark-lime-green border-transparent rounded-lg font-medium text-xs text-white hover:bg-lime-green transition ease-in-out duration-150"
                                    focusable>{{
                                    __('Add New User') }}
                                </button>
                                {{-- Button Trigger Modal ::end --}}

                                {{-- Modal Component begin:: --}}
                                <x-modal name="tambah-user">
                                    {{-- Modal Content begin:: --}}
                                    <div class="flex justify-center items-center p-2">
                                        <div class="p-2 w-full flex flex-col">
                                            {{-- Modal Content - Header begin:: --}}
                                            <div class="space-y-2 border-b py-4">
                                                {{-- Header Content begin:: --}}
                                                <div class="inline-flex justify-between w-full items-center">
                                                    {{-- Modal Content - Header - Title begin:: --}}
                                                    <h2 class="text-lg font-semibold text-raisin-black w  -full">
                                                        {{ __('Add New User Account') }}
                                                    </h2>
                                                    {{-- Modal Content - Header - Title ::end --}}

                                                    {{-- Modal Content - Header - Close Button begin:: --}}
                                                    <button x-on:click="show = false" type="button"
                                                        class="text-grayish-cyan hover:text-grayish-magenta text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    {{-- Modal Content - Header - Close Button ::end --}}
                                                </div>
                                                {{-- Header Content ::end --}}

                                                {{-- Header Warning begin:: --}}
                                                <p class="text-sm text-dark-gray w-full">
                                                    {{ __('Make sure your account data is correct!') }}
                                                </p>
                                                {{-- Header Warning ::end --}}
                                            </div>
                                            {{-- Modal Content - Header ::end --}}

                                            {{-- Form begin:: --}}
                                            <div class="py-4">
                                                <form id="formTambahUser" method="POST"
                                                    action="{{ route('master.user.store') }}">
                                                    @csrf
                                                    {{-- username Begin:: --}}
                                                    <div class="mb-4">
                                                        {{-- username - label begin:: --}}
                                                        <div class="flex items-center">
                                                            <x-input-label for="name" value="{{ __('Username') }}" />
                                                            @error('name')
                                                            <span class="ml-2 text-red-600 text-sm">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- username - label ::end --}}
                                                        {{-- username - input begin:: --}}
                                                        <x-text-input id="name" name="name" class="mt-1 block w-full"
                                                            placeholder="{{ __('Input Username') }}" />
                                                        {{-- username - input ::end --}}
                                                    </div>
                                                    {{-- username ::end --}}

                                                    {{-- email Begin:: --}}
                                                    <div class="mb-4">
                                                        {{-- email - label begin:: --}}
                                                        <div class="flex items-center">
                                                            <x-input-label for="email" value="{{ __('Email') }}" />
                                                            @error('email')
                                                            <span class="ml-2 text-red-600 text-sm">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- email - label ::end --}}
                                                        {{-- email - input begin:: --}}
                                                        <x-text-input id="email" name="email" class="mt-1 block w-full"
                                                            placeholder="{{ __('Input Email') }}" />
                                                        {{-- email - input ::end --}}
                                                    </div>
                                                    {{-- email ::end --}}

                                                    {{-- password Begin:: --}}
                                                    <div class="mb-4">
                                                        {{-- password - label begin:: --}}
                                                        <div class="flex items-center">
                                                            <x-input-label for="password"
                                                                value="{{ __('Password') }}" />
                                                            @error('password')
                                                            <span class="ml-2 text-red-600 text-sm">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- password - label ::end --}}
                                                        {{-- password - input begin:: --}}
                                                        <x-text-input id="password" name="password"
                                                            class="mt-1 block w-full"
                                                            placeholder="{{ __('Input Password') }}" />
                                                        {{-- password - input ::end --}}
                                                    </div>
                                                    {{-- password ::end --}}

                                                    {{-- confirm password Begin:: --}}
                                                    <div class="mb-4">
                                                        {{-- password - label begin:: --}}
                                                        <div class="flex items-center">
                                                            <x-input-label for="confirm-password"
                                                                value="{{ __('Confirm Password') }}" />
                                                            @error('confirm-password')
                                                            <span class="ml-2 text-red-600 text-sm">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- confirm password - label ::end --}}
                                                        {{-- confirm password - input begin:: --}}
                                                        <x-text-input id="confirm-password" name="confirm-password"
                                                            class="mt-1 block w-full"
                                                            placeholder="{{ __('Input Again Password') }}" />
                                                        {{-- confirm password - input ::end --}}
                                                    </div>
                                                    {{-- confirm password ::end --}}

                                                    {{-- Role Account begin::--}}
                                                    <div class="mb-4">
                                                        {{-- Role Account - label
                                                        begin::--}}
                                                        <div class="flex items-center">
                                                            <x-input-label for="role"
                                                                value="{{ __('Role Account') }}" />
                                                            @error('role')
                                                            <span class="ml-2 text-red-600 text-sm">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- Role Account - label ::end--}}
                                                        {{-- Role Account - Select Input
                                                        begin::--}}
                                                        <x-select-input id="role" name="role"
                                                            autocomplete="role-account" class="mt-1 block w-full">
                                                            {{-- @foreach ($nama_tipe as $tipe) --}}
                                                            <option></option>
                                                            {{-- @endforeach --}}
                                                        </x-select-input>
                                                        {{-- Role Account - Select Input
                                                        ::end--}}
                                                    </div>
                                                    {{-- Role Account begin::--}}

                                                    {{-- Status Account begin::--}}
                                                    <div class="mb-4">
                                                        {{-- Status Account - label
                                                        begin::--}}
                                                        <div class="flex items-center">
                                                            <x-input-label for="status"
                                                                value="{{ __('Status Account') }}" />
                                                            @error('status')
                                                            <span class="ml-2 text-red-600 text-sm">{{ $message
                                                                }}</span>
                                                            @enderror
                                                        </div>
                                                        {{-- Status Account - label ::end--}}
                                                        {{-- Status Account - Select Input
                                                        begin::--}}
                                                        <x-select-input id="status" name="status"
                                                            autocomplete="status-account" class="mt-1 block w-full">
                                                            <option>Active</option>
                                                            <option>Non Active</option>
                                                        </x-select-input>
                                                        {{-- Status Account - Select Input
                                                        ::end--}}
                                                    </div>
                                                    {{-- Status Account begin::--}}

                                                    {{-- Button Submit --}}
                                                    <div>
                                                        <x-buttons.primary-button>{{ __('Submit Data') }}
                                                        </x-buttons.primary-button>
                                                    </div>
                                                </form>
                                            </div>
                                            {{-- Form ::end --}}
                                        </div>
                                        {{-- Modal content ::end --}}
                                    </div>
                                </x-modal>
                                {{-- Modal ::end --}}
                            </div>
                        </div>
                        {{-- Modal add user ::end --}}
                    </div>
                </div>
                {{-- Top Content ::end --}}

                {{-- Table begin:: --}}
                <div class="p-1">
                    <table class="w-full font-poppins capitalize table-fixed">
                        {{-- Table Head begin:: --}}
                        <thead>
                            <tr class="text-start">
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">No</th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">User Name</th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Email
                                </th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Role Account
                                </th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Status
                                </th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Created At
                                </th>
                                <th class="border-b-2 border-gray-200 text-sm font-medium text-[#B4B4B8]">Aksi</th>
                            </tr>
                        </thead>
                        {{-- Table Head ::end --}}
                        {{-- Table Body begin:: --}}
                        <tbody>
                            @foreach ($user as $user)
                            <tr class="text-center">
                                <td class="border-b border-gray-200 p-2 text-base font-normal">{{ $loop->iteration }}
                                </td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">{{ $user->name }}</td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">{{ $user->email }}</td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">
                                    Admin</td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">
                                    Active</td>
                                <td class="border-b border-gray-200 p-2 text-base font-normal">
                                    {{ $user->created_at }}</td>
                                <td class="border-b border-gray-200">
                                    <div class="p-2 flex justify-center items-center gap-2">
                                        <div
                                            class="w-8 h-8 rounded-full bg-red-500 hover:scale-105 group flex items-center justify-center">
                                            <x-buttons.delete-button></x-buttons.delete-button>
                                        </div>
                                        <div
                                            class="w-8 h-8 rounded-full bg-button hover:scale-105 group flex items-center justify-center">
                                            <x-buttons.edit-button></x-buttons.edit-button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- Table Body ::end --}}
                    </table>
                </div>
                {{-- Table ::end --}}
            </div>
            {{-- Content ::end --}}
        </div>
    </div>
    {{-- Code ::end --}}
</x-app-layout>