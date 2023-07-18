<x-guest-layout>
    <!-- Session Status -->
    <div class="bg-gray-50 md:p-40 p-8 w-auto">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="grid grid-cols-1 m-4 rounded-2xl p-8 md:px-40 text-black bg-white shadow-2xl mt-16">
        <div class="my-4">
            <h1 class="md:text-3xl text-4xl font-black">Forgot your password?</h1>
            <p class="text-gray-900 text-xs font-thin">Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-text-input placeholder="email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
    </div>
    </div>
</x-guest-layout>
