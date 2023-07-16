<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base text-gray-500 text-thin leading-tight">
            Hello {{ Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl md:mx-auto mx-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow-2xl rounded-2xl md:px-40 p-8 w-auto">
                <div class="grid grid-cols-1 place-content-center py-16">
                    <h2 class="text-5xl font-black text-gray-700 text-center p-6">This service is not yet available</h2>
                    <p class="text-gray-900 text-xs font-thin text-center">We are currently working on this service. It would be back shortly</p>
                    <div class="flex justify-center my-4">
                        <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white rounded-lg py-2 px-4">Back >></a>
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    </div>
</x-app-layout>
