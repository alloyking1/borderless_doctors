<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base text-gray-500 text-thin leading-tight">
            Hello {{ Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl md:mx-auto mx-6 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900">
                   <div class="text-center p-4 mt-4">
                    <h2 class="text-5xl font-black text-gray-700">Welcome back {{ Auth::user()->name }}</h2>
                    <div class="px-8 pt-4">
                        <p class="text-sm text-gray-400 md:px-16">
                            Click the button below to start your leave on request application process
                        </p>
                    </div>
                   </div>
                   {{-- <livewire:doctors-livewire-controller/> --}}
                   <div class="flex justify-center py-16 px-8">
                        {{-- <a href="{{ route('dashboard.become-a-doctor') }}" class="font-black text-2xl text-center rounded-md bg-gradient-to-r from-sky-500 to-blue-500 text-white p-6">Become a doctor</a> --}}
                    
                <a href="{{ route('dashboard.request-a-doctor') }}" class="font-black text-2xl text-center bg-gradient-to-r from-blue-500 to-sky-500 text-white rounded-md p-6">Request for emergency leave of your loved ones</a>
                    
                </div>
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
