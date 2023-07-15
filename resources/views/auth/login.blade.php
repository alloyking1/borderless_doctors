<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-gray-50 md:p-40 p-8 w-auto">
       
        
        <div class="grid grid-cols-1 m-4 rounded-2xl p-8 md:px-40 text-black bg-white shadow-2xl">
            <div class="my-4">
                <h1 class="md:text-3xl text-4xl font-black">Log In</h1>
                <p class="text-gray-900 text-xs font-thin">You need to Log in to request the service of a doctor</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
        
                <!-- Email Address -->
                <div>
                    <x-text-input id="email" class="block mt-1 w-full" type="email" placeholder="Email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" placeholder="password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <div class="ml-2 text-gray-600 text-xs">Don't have an account? 
                            <span class="-ml-4">
                                <a href="{{ route('register') }}" class="text-blue-800 font-bold font-tighter underline rounded-sm px-4 py-2 hover:text-blue-500 hover:font-black text-lg">Register</a>
                            </span> 
                        </div>
                    </label>
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
        
                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
