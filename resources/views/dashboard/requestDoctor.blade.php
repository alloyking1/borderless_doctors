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
                    <h1 class="md:text-3xl text-4xl font-black">Apply for a vacation for your loved one (Step 1)</h1>
                    <p class="text-gray-900 text-xs font-thin">We need these details for you ..</p>
                </div>

                
                @if ($message = Session::get('success'))
                    <div class="bg-green-400 text-white p-5">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
               
                <form method="POST" action="{{ route('dashboard.request-a-doctor') }}" enctype="multipart/form-data">
                    @csrf
    
                    <div class="grid grid-cols-2 gap-2 mt-4">

                        <div>
                        <x-text-input placeholder="Phone" id="phone" class="block mt-1 w-full" type="number" name="phone" :value="old('phone')" required  autocomplete="phone" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                        <x-text-input placeholder="SSN" id="ssn" class="block mt-1 w-full" type="text" name="ssn" :value="old('ssn')" required  autocomplete="ssn" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mt-4">
            
                        <div>
                            <x-text-input placeholder="Address" id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autocomplete="address" />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                    </div>

                    <div class="mt-4">
                        <textarea placeholder="Why do you need this service" :value="old('requestDetails')" name="requestDetails" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="6" cols="80" type="text"></textarea>
                        <x-input-error :messages="$errors->get('requestDetails')" class="mt-2" />
                    </div>

                    <div class="mt-4">
            
                        <div>
                            <div class="">

                                <div class="flex items-center justify-center w-full">
                                    <label for="passport" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-white hover:bg-gray-100 dark:border-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="mb-2 text-2xl text-gray-500 dark:text-gray-400"><span class="font-semibold">Drviers license</span> or Passport</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="passport" name="passport" type="file" class="hidden" />
                                    </label>
                                </div> 
                               
                            </div>
                            
                        </div>
                        <x-input-error :messages="$errors->get('passport')" class="mt-2" />
                    </div>
            
                    <div class="flex items-center justify-end mt-4">
                
            
                        <x-primary-button class="ml-3">
                            {{ __('Submit') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- <div>
        <img src="{{ asset('images/1689606275.png') }}" alt="">
    </div> --}}
</x-app-layout>
