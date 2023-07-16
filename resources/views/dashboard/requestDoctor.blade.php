<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base text-gray-500 text-thin leading-tight">
            Hello {{ Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl md:mx-auto mx-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow-2xl rounded-2xl md:px-40 p-8 w-auto">
                <div class="my-4">
                    <h1 class="md:text-3xl text-4xl font-black">Request a Doctor</h1>
                    <p class="text-gray-900 text-xs font-thin">We need these details for you ..</p>
                </div>
                
               
                <form method="POST" action="{{ route('login') }}">
                    @csrf
            
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Name')" />
                        {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" /> --}}
                        <textarea class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="80" type="email"></textarea>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
    
                    <!-- Email Address -->
                    <div class="grid grid-cols-2 gap-2 mt-4">
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        
                    </div>
            
                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />
            
                        <x-text-input id="password" class="block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />
            
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                
            
                        <x-primary-button class="ml-3">
                            {{ __('Send') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
