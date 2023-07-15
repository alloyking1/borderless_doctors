
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-gray-50 md:p-40 p-8 w-auto">
        
        <div class="grid grid-cols-1 m-4 rounded-2xl p-8 md:px-40 text-black bg-white shadow-2xl">
            <div class="my-4">
                <h1 class="md:text-3xl text-4xl font-black">Register</h1>
                <p class="text-gray-900 text-xs font-thin">You need to create an account to continue</p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
        
                <!-- Name -->
                <div>
                    <x-text-input placeholder="Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
        
                <!-- Email Address -->
                <div class="mt-4">
                    <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
        
                    <x-text-input placeholder="Password" id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
        
                    <x-text-input placeholder="Confirm Password" id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
        
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <div class="ml-2 text-gray-600 text-xs">Already registered? 
                            <span class="-ml-4">
                                <a href="{{ route('login') }}" class="text-blue-800 font-bold font-tighter underline rounded-sm px-4 py-2 hover:text-blue-500 hover:font-black text-lg">Log In</a>
                            </span> 
                        </div>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
        
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

