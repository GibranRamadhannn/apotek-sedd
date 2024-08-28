<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        @section('label','Login')
        @section('switch-teks',"Didn't have an account?")
        @section('switch-link','Register')
        @section('switch-route','/register')

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" placeholder="youremail@domain.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" placeholder="*******" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block my-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-grayish-cyan text-button shadow-sm focus:ring-button2" name="remember">
                <span class="ms-2 text-sm text-grayish-cyan">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-start mt-2 mb-6">
            @if (Route::has('password.request'))
            <a class="text-sm text-grayish-cyan hover:text-button2" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>
        <x-buttons.primary-button class="w-full items-center justify-center">
            {{ __('Log in') }}
        </x-buttons.primary-button>
    </form>
</x-guest-layout>