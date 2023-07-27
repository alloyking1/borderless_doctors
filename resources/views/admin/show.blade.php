
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
                <h2 class="text-5xl font-black text-gray-700">Details</h2>
                
               </div>
               <div class="grid grid-cols-1 gap-4 py-16 px-8">
                <div class="text-left">
                    @foreach ($user as $eachProperty )
                        <h3 class="text-base font-bold">Name: <span class="text-gray-400"> {{ $eachProperty->name }} </span></h3>
                        <hr>
                        <h3 class="text-base font-bold">Email: <span class="text-gray-400"> {{ $eachProperty->email }} </span></h3>
                        <hr>
                    @endforeach
                    <br>
                    @foreach ($item as $each )
                        <span>
                            <div class="grid md:grid-cols-2 gap-3">
                                <div class="border-4 border-gray-800">
                                    <img src="{{ asset('images/'.$each->passport) }}" class="w-1/2" alt="">
                                    <h2 class="text-4xl text-black mt-4">Front</h2>
                                </div>
                                <div class="border-4 border-gray-800">
                                    <img src="{{ asset('images/'.$each->passport_back) }}" class="w-1/2" alt="">
                                    <h2 class="text-4xl text-black mt-4">Back</h2>
                                </div>
                               
                                
                                {{-- <a href="{{ route('admin.image-download', ['img_path' => $each->passport]) }}" class="my-2 rounded-sm border border-gray-600 text-gray-600 p-2">Download</a> --}}
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