<x-guest-layout>
    <x-lander.section-a show_btn="true">
    </x-lander.section-a>
    <div class="grid md:grid-cols-2 md:-mb-24 gap-4 md:p-40">
        <div class="p-4 px-8 mt-16">
                <img class="rounded-sm h-full shadow-2xl" src="https://images.pexels.com/photos/6749778/pexels-photo-6749778.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">          
        </div>
        <div class="pt-24 px-16 mb-24 lg:mt-40">
            <p class="text-3xl font-light py-2">Welcome To</p>
            <h2 class="text-5xl font-black">Modern Clinic</h2>
            <p class="py-8 text-gray-700">
                Lorem ipsum dolor sit amet, consectetur Lorem ipsum dolor sit amet, 
                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veni.
            </p>
            <div>
                <div class="mt-12">
                    <a href="{{ route('pages.about') }}" class="rounded-md bg-gradient-to-r from-sky-500 to-blue-500 text-white px-10 p-4">About Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-50 md:p-40 p-8 w-auto">
        <div class="mx-4">
            <h1 class="md:text-5xl text-4xl font-black">Departments</h1>
            <div class="lg:mr-16">
                <p class="py-4 lg:pr-16 text-gray-700 text-thin text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
       
        </div>
        
        <div class="flex flex-row flex-wrap gap-4 mx-4 py-16">
            <div class="p-8 border border-blue-400 text-blue-400 rounded-sm bg-white">
                Dentist
            </div>
            <div class="p-8 border border-blue-400 text-blue-400 rounded-sm bg-white">
                Cardiology
            </div>
            <div class="p-8 border border-blue-400 text-blue-400 rounded-sm bg-white">
                ENT Specialist
            </div>
        </div>
        <div class="grid grid-cols-1 m-4 rounded-md lg:grid-cols-2 p-8 md:px-40 text-black bg-white shadow-2xl">
            <div><img src="https://preview.colorlib.com/theme/medi/img/department/1.jpg.webp" alt=""></div>
            <div class="md:mx-8 mt-4">
                <h2 class="text-3xl font-light py-2">
                    Dentist with surgical mask holding
                    scaler near patient
                </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <div class="mt-12">
                        <a href="#" class="border-4 border-blue-400 text-blue-400 md:p-6 p-2 text-xs md:text-base">Book Appointment</a>
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
                <a href="#" class="border-4 border-black text-black font-extrabold p-4 md:text-lg text-xs">Learn more</a>
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
    {{-- <x-lander.section-a>
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
    </x-lander.section-a> --}}
    <x-lander.section-b>
        <div class="text-center place-content-center">
            <h1 class="text-3xl md:text-5xl font-black py-2">Our Doctors</h1>
            <div class="md:px-68 text-wrap lg:pl-16 lg:pr-16 my-8 mb-4">
                <p class="text-lg font-light text-center mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                </p>
            </div>
            
        </div>
        <br>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center px-4 place-content-center mt-4">
            
            <div class="rounded-md shadow-md grid grid-cols-1">
                <div class="h-1/2">
                    <img class="rounded-t-md w-full" src="https://preview.colorlib.com/theme/medi/img/experts/1.png.webp" alt="">
                </div>
                <div class="rounded-2xl mt-4 text-center md:px-16 px-4">
                    <h1 class="text-2xl md:text-4xl p-4 font-black text-sky-500">John Smith</h1>
                    <p class="text-sm text-center text-gray-500">
                        Dentist
                    </p>
                    <div class="my-8">
                        <hr class="border border-sky-500">
                    </div>
                    <div class="text-center flex flex-row gap-4 justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                          </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                          </svg>
                    </div>
                      
                      
                </div>
            </div>
            <div class="rounded-md shadow-md grid grid-cols-1">
                <div class="h-1/2">
                    <img class="rounded-t-md w-full" src="https://preview.colorlib.com/theme/medi/img/experts/3.png.webp" alt="">
                </div>
                <div class="rounded-2xl mt-4 text-center md:px-16 px-4">
                    <h1 class="text-2xl md:text-4xl p-4 font-black text-sky-500">John Smith</h1>
                    <p class="text-sm text-center text-gray-500">
                        Dentist
                    </p>
                    <div class="my-8">
                        <hr class="border border-sky-500">
                    </div>
                    <div class="text-center flex flex-row gap-4 justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                          </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                          </svg>
                    </div>
                      
                      
                </div>
            </div>
            <div class="rounded-md shadow-md grid grid-cols-1">
                <div class="h-1/2">
                    <img class="rounded-t-md w-full" src="https://preview.colorlib.com/theme/medi/img/experts/2.png.webp" alt="">
                </div>
                <div class="rounded-2xl mt-4 text-center md:px-16 px-4">
                    <h1 class="text-2xl md:text-4xl p-4 font-black text-sky-500">John Smith</h1>
                    <p class="text-sm text-center text-gray-500">
                        Dentist
                    </p>
                    <div class="my-8">
                        <hr class="border border-sky-500">
                    </div>
                    <div class="text-center flex flex-row gap-4 justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                          </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                          </svg>
                    </div>
                      
                      
                </div>
            </div>
            
        </div>
    </x-lander.section-b>

    <x-lander.footer/>
</x-guest-layout>
