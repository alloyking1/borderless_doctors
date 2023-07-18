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
        
        <div class="grid grid-cols-1 m-4 rounded-2xl p-8 md:px-40 text-black bg-white shadow-2xl">
            <div class="my-4">
                <h1 class="md:text-3xl text-4xl font-black">Get in Touch</h1>
                <p class="text-gray-900 text-xs font-thin">You need to Log in to request the service of a doctor</p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
        

                <!-- Email Address -->
                <div class="grid grid-cols-2 gap-2 mt-4">
                    <div>
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="name" :value="old('name')" required />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                    <x-text-input placeholder="email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <textarea class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="message" placeholder="Message" rows="6" cols="80" type="text"></textarea>
                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                </div>

                
        
                <div class="flex items-center justify-end mt-4">
            
        
                    <x-primary-button class="ml-3">
                        {{ __('Send') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>

    <x-lander.footer/>
</x-guest-layout>
