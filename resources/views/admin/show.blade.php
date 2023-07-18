
<x-app-layout>
<x-slot name="header">
    <h2 class="text-base text-gray-500 text-thin leading-tight">
        Hello {{ Auth::user()->name}}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl md:mx-auto mx-6 sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm rounded-lg">
            <div class="p-6 text-gray-900">
               <div class="text-left p-4 mt-4">
                <h2 class="text-5xl font-black text-gray-700">What would you love to do today ?</h2>
                
               </div>
               <div class="grid grid-cols-1 gap-4 py-16 px-8">
                <div class="text-left">
                    @foreach ($item as $each )
                        <span>
                            <div>
                                <img src="{{ asset('images/'.$each->passport) }}" alt="">
                                <button class="my-2 rounded-sm border border-gray-600 text-gray-600 p-2">Download</button>
                            </div>
                           
                            <h3 class="text-base font-bold">Phone: <span class="text-gray-400"> {{ $each->phone }}</span></h3>
                            <hr>
                            <h3 class="text-base font-bold">Ssn: <span class="text-gray-400">{{ $each->ssn }}</span></h3>
                            <hr>
                            <h3 class="text-base font-bold">Address: <span class="text-gray-400"> {{ $each->address }}</span></h3>
                            <hr>
                            <h3 class="text-base font-bold">Details: <span class="text-gray-400"> {{ $each->requestDetails }} </span></h3>
                            <hr>
                            </span>
                            <hr>
                            

                    @endforeach
                    <div class="flex justify-left my-4">
                        <a href="{{ route('admin.dashboard') }}" class="bg-blue-500 text-white rounded-lg py-2 px-4">Back >></a>
                    </div>
                </div>
                </div>
                
            </div>

            
           
        </div>
    </div>
</div>
</x-app-layout>