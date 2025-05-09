<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-8 py-6 bg-white overflow-hidden sm:rounded-lg border-t-4 border-blue-600">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="mb-12 text-center -mt-4">
            <h2 class="text-3xl font-bold text-gray-900">NPL Management Workshop</h2>
            <div class="h-1 w-20 bg-blue-600 mx-auto mt-1"></div>
            <p class="text-sm text-gray-600 mt-3"></p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-6">
                <x-input-label for="email" :value="__('Workshop Email')" class="text-sm font-medium text-gray-700" style="margin-bottom: 6px;"/>
                <x-text-input id="email" class="block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-700" style="margin-bottom: 6px;" />
                <x-text-input id="password" class="block w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"
                    type="password"
                    name="password"
                    required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 focus:ring-blue-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
                
                @if (Route::has('password.request'))
                    <!-- <a class="text-sm text-blue-600 hover:text-blue-700 font-medium" href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a> -->
                @endif
            </div>

            <div class="flex items-center justify-center">
            <x-primary-button class="w-full justify-center py-3 text-base font-medium bg-blue-600 hover:bg-blue-700">
                    {{ __('Enter Workshop') }}
                </x-primary-button>
            </div>
        </form>

        <div class="mt-6 text-center text-sm text-gray-600">
            <p>Need workshop access? Contact your administrator</p>
        </div>
    </div>
</x-guest-layout>
