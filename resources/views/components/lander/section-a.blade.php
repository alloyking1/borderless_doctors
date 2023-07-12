@props([
    'show_btn' => false,
])

{{-- <div class="bg-gray-600 text-white p-16">
    <div class="grid grid-cols-1">
        <div class="md:py-40">
            <div class="">
                <h1 class="text-2xl md:text-5xl font-bold">
                   {{$slot}}
                </h1>
            </div>
            @if ($show_btn)
            <div class="mt-12">
                <a href="#" class="border-4 border-red text-white p-6">Click here</a>
            </div>
            @endif
            
        </div>
    </div>
    
</div> --}}
<div class="w-full h-full relative bg-gradient-to-r from-sky-800 to-indigo-500">
    <img class="w-full h-full object-cover absolute mix-blend-overlay" src="https://images.pexels.com/photos/3376790/pexels-photo-3376790.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
    <div class="p-24 md:p-56 grid grid-cols-1 text-white">
        <p class="text-2xl">The best medical center</p>
        <h1 class="text-4xl md:text-7xl font-black">Bringing health</h1>
        <h2 class="md:text-7xl font-thin">to Life for the whole family.</h2>
        <div class="mt-12">
            <a href="#" class="border-4 border-red text-white p-6">Discover</a>
        </div>
    </div>
</div>