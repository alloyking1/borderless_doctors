<x-guest-layout>
    <x-lander.section-a show_btn="true">
    </x-lander.section-a>
    <div class="grid md:grid-cols-2 gap-4 md:p-40 p-8">
        <div class="h-2/3">
            {{-- <div class="bg-black h-full w-full"> --}}
                <img class="rounded-sm h-full shadow-2xl" src="https://images.pexels.com/photos/6749778/pexels-photo-6749778.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
            {{-- </div> --}}
           
        </div>
        <div class="pt-24">
            <p class="text-3xl font-light py-2">Welcome To</p>
            <h2 class="text-5xl font-black">Modern Clinic</h2>
            <p class="py-8 text-gray-700">
                Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veni.
            </p>
            <div>
                <div class="mt-12">
                    <a href="#" class="rounded-md bg-gradient-to-r from-sky-500 to-blue-500 text-white px-10 p-4">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <x-lander.section-b>
       <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <h3 class="text-2xl md:text-4xl font-black">
                We provide independent, impartial medical humanitarian assistance to the people who need it most.
            </h3>
            <p class="font-thin text-xl text-gray-900 pt-4">
                Doctors Without Borders/Médecins Sans Frontières (MSF) cares for 
                people affected by conflict, disease outbreaks, natural and human-made disasters, 
                and exclusion from health care in more than 70 countries.
            </p>

            <div class="my-8">
                <a href="#" class="border-4 border-black text-black font-extrabold p-4 md:text-lg text-xs">Learn more about what we do</a>
            </div>
        </div>
        <div>
            <p class="text-xl font-extrabold mb-2">Our reach How we use funds</p>
            <div class="border-2 border-red-600">
            </div>
            {{-- <div class="mt-16 rounded-full border-top border-green-500"></div> --}}
            <div class="grid grid-cols-1">
                <div class="flex flex-row py-4">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <h1>85%</h1>
                        <p class="text-sm">
                            Programs that bring emergency medical care directly to the people who need it
                        </p>
                    </div>
                </div>
                <div class="flex flex-row py-4">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <h1>85%</h1>
                        <p class="text-sm">
                            Programs that bring emergency medical care directly to the people who need it
                        </p>
                    </div>
                </div>
                <div class="flex flex-row py-4">
                    <div class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <h1>85%</h1>
                        <p class="text-sm">
                            Programs that bring emergency medical care directly to the people who need it
                        </p>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </x-lander.section-b>
    <x-lander.section-a>
        <div class="bg-white text-black rounded-lg grid grid-cols-1 gap-2 md:grid-cols-2">
            <div class="p-2">
                <img class="" src="https://images.pexels.com/photos/4167541/pexels-photo-4167541.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
            </div>
            <div class="p-2">
                <div class="md:my-16">
                    <h3 class="text-2xl md:text-4xl font-black">
                        Book a doctor
                    </h3>
                    <p class="font-thin text-xl text-gray-900 pt-2">
                       Have a meeting with a doctor almost instantly
                    </p>
                    <div class="flex flex-row mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4.5" stroke="currentColor" class="w-4 h-4 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                          </svg>
                           <p class="text-sm ml-1">Affordable, flexible, and reliable childcare</p>
                    </div>
                    <div class="flex flex-row mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4.5" stroke="currentColor" class="w-4 h-4 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                          </svg>
                           <p class="text-sm ml-1">Affordable, flexible, and reliable childcare</p>
                    </div>
                    <div class="flex flex-row mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4.5" stroke="currentColor" class="w-4 h-4 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                          </svg>
                           <p class="text-sm ml-1">Affordable, flexible, and reliable childcare</p>
                    </div>
                    <div class="flex flex-row mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4.5" stroke="currentColor" class="w-4 h-4 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                          </svg>
                           <p class="text-sm ml-1">Affordable, flexible, and reliable childcare</p>
                    </div>
                    <div class="my-8">
                        <a href="#" class="border-4 border-black text-black font-extrabold p-4 md:text-lg text-xs">Book a doctor</a>
                    </div>
                </div>
               
                
            </div>
           
        </div>
    </x-lander.section-a>
    <x-lander.section-b>
        <div class="text-center place-content-center">
            <h1>This is the heading</h1>
            <p class="text-sm text-center mb-4">
                Doctors Without Borders/Médecins Sans Frontières (MSF) cares for 
                people affected by conflict, disease outbreaks, 
            </p>
            {{-- <div class="border-2 border-red-600 max-w-2xl"> --}}
        </div>
        <div class="grid md:grid-cols-4 grid-cols-1 gap-4">
            
            <div class="rounded-md shadow-md grid grid-cols-1">
                <div class="h-1/2">
                    <img class="rounded-t-md" src="https://images.pexels.com/photos/3951360/pexels-photo-3951360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                </div>
                <div>
                    <p class="text-sm text-center">
                        Doctors Without Borders/Médecins Sans Frontières (MSF) cares for 
                        people affected by conflict, disease outbreaks, 
                    </p>
                </div>
            </div>
            <div class="rounded-md shadow-md grid grid-cols-1">
                <div class="h-1/2">
                    <img class="rounded-t-md" src="https://images.pexels.com/photos/3951360/pexels-photo-3951360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                </div>
                <div>
                    <p class="text-sm text-center">
                        Doctors Without Borders/Médecins Sans Frontières (MSF) cares for 
                        people affected by conflict, disease outbreaks, 
                    </p>
                </div>
            </div>
            <div class="rounded-md shadow-md grid grid-cols-1">
                <div class="h-1/2">
                    <img class="rounded-t-md" src="https://images.pexels.com/photos/3951360/pexels-photo-3951360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                </div>
                <div>
                    <p class="text-sm text-center">
                        Doctors Without Borders/Médecins Sans Frontières (MSF) cares for 
                        people affected by conflict, disease outbreaks, 
                    </p>
                </div>
            </div>
            <div class="rounded-md shadow-md grid grid-cols-1">
                <div class="h-1/2">
                    <img class="rounded-t-md" src="https://images.pexels.com/photos/3951360/pexels-photo-3951360.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                </div>
                <div>
                    <p class="text-sm text-center">
                        Doctors Without Borders/Médecins Sans Frontières (MSF) cares for 
                        people affected by conflict, disease outbreaks, 
                    </p>
                </div>
            </div>
            
        </div>

        <div class="mt-16">
            <hr>
            <div class="text-center">
                footer
            </div>
        </div>
       
    </x-lander.section-b>
</x-guest-layout>
