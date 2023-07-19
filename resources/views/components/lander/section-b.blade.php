@props([
    'color' => false,
])

@if ($color)
<div {{ $attributes->merge(['class' => 'bg-white text-black p-16 bg-gradient-to-r from-sky-500 to-blue-500']) }}>
    <div class="grid grid-cols-1">
        <div class="md:py-40">
            <div class="">
                <h1 class="text-2xl md:text-5xl font-bold">
                   {{$slot}}
                </h1>
            </div>
        </div>
    </div>
    
</div>
@else
<div {{ $attributes->merge(['class' => 'bg-white text-black p-16']) }}>
    <div class="grid grid-cols-1">
        <div class="md:pt-40">
            <div class="">
                <h1 class="text-2xl md:text-5xl font-bold">
                   {{$slot}}
                </h1>
            </div>
        </div>
    </div>
    
</div>
@endif
