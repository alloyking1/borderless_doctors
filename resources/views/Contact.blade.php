<x-guest-layout>
    <div class="w-full h-full relative bg-gradient-to-r from-teal-700 to-sky-800">
        <img class="w-full h-full object-cover absolute mix-blend-overlay" src="https://images.pexels.com/photos/239853/pexels-photo-239853.jpeg?auto=compress&cs=tinysrgb&w=800" alt="">
        <div class="p-24 md:p-56 grid grid-cols-1 text-white">
            <p class="text-2xl">Hey there!</p>
            <h1 class="text-4xl md:text-7xl font-black">Contact Us</h1>
            <div class="mt-12">
                {{-- <a href="#" class="border-4 border-red text-white p-6">Discover</a> --}}
                <p>ksdklsdjls dkfsldkfs kjldf ksdfjlsd fslkfjlsf ksd.fms.dfsdsdfdsds sdflsdf slfjsl</p>
            </div>
        </div>
    </div>
    <div class="grid md:grid-cols-2 gap-4 md:p-40 p-8">
        {{-- <html>
        <head>
            <title>Add Map</title>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

            <link rel="stylesheet" type="text/css" href="./style.css" />
            <script type="module" src="./index.js"></script>
        </head>
        <body> --}}
            <h3>My Google Maps Demo</h3>
            <!--The div element for the map -->
            <div id="map"></div>

            <!-- prettier-ignore -->
            <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
                ({key: "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg", v: "beta"});</script>
        {{-- </body>
        </html> --}}
    </div>

    <div class="bg-gray-50 md:p-40 p-8 w-auto">
        <div class="mx-4">
            <h1 class="md:text-3xl text-4xl font-black">Get in Touch</h1>
        </div>
        
        <div class="grid grid-cols-1 m-4 rounded-md p-8 md:px-40 text-black bg-white shadow-2xl">
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

    <div class="bg-gray-50 text-white">
        <div class="grid md:grid-cols-2 grid-cols-1 w-full">
            <div class="bg-gradient-to-r from-sky-500 to-blue-500 p-16">
                <p class="text-xl my-2">We are here for you</p>
                <h1 class="text-5xl">Book Appointment</h1>
                <div class="my-12">
                    <a href="#" class="border-2 border-white text-white md:text-lg text-xs md:p-4 p-2 rounded-md">Book Appointment</a>
                </div> 
            </div>

            <div class="bg-gradient-to-r from-sky-400 to-sky-500 p-16">
                <p class="text-xl my-2">Emergency Medical Care</p>
                <h1 class="text-5xl">+1-465 4545</h1>
            </div>
        </div>
    </div>

    <div class="p-16 bg-[#152538] text-white">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-4 pb-16 px-16">
            <div>
                <img src="https://preview.colorlib.com/theme/medi/img/logo.png.webp" alt="Logo">
                <div class="p-2 mt-4">
                    <p class="text-gray-400">
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore.
                    </p>
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold">Our Departments</h1>
                <div class="border-2 border-white w-8 my-4"></div>
                <div  class="text-gray-400">
                    <p class="my-2">Birth</p>
                    <p class="my-2">Pulmonary</p>
                    <p class="my-2">Cardiology</p>
                    <p class="my-2">Neurology</p>
                    <p class="my-2">Traumatology</p>
                    <p class="my-2">Dental</p>
                    <p class="my-2">Nuclearmagnetic</p>
                    
                </div>
            </div>
            <div>
                <h1 class="text-xl font-bold">We’re Available</h1>
                <div class="border-2 border-white w-8 my-4"></div>
                <div  class="text-gray-400">
                    <p class="my-2"> Monday - Friday: 8.00 - 18.00</p>
                    <p class="my-2">Saturday: 8.00 - 18.00</p>
                    <p class="my-2">Sunday: 8.00 - 13.00</p>
                </div>
            </div>
        </div>
        <div class="text-left">
            <hr class="border-gray-600">
            <p class="mt-8 text-gray-600">
                Copyright ©2023 All rights reserved | This template is made with  by Colorlib
            </p>
        </div>
    </div>
</x-guest-layout>
