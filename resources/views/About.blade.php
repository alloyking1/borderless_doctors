<x-guest-layout>
    <div class="w-full h-full relative bg-gradient-to-r from-teal-700 to-sky-800">
        <img class="w-full h-full object-cover absolute mix-blend-overlay" src="https://images.pexels.com/photos/7089619/pexels-photo-7089619.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
        <div class="py-24 px-12 md:p-56 grid grid-cols-1 text-white">
            <h1 class="text-4xl md:text-7xl font-black">About Us</h1>
            <div class="mt-12">
                <p>
                    We prioritize your health and well-being. With a dedicated team of medical professionals, state-of-the-art facilities, 
                    and personalized care, we are committed to providing exceptional healthcare solutions 
                    for you and your loved ones. Your health is our priority.
                </p>
            </div>
        </div>
    </div>

    <x-lander.section-b>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
         <div>
             <h3 class="text-2xl md:text-4xl font-black">
                 Leave on request
             </h3>
             <p class="font-thin text-base text-gray-900 pt-4">
                 Your well-being matters, and we respect your need for flexibility. 
                 With our 'Leave on Request' policy, taking time off for personal reasons or for your loved ones who who work with us is made easy. 
                 We understand life can be unpredictable, so we strive to accommodate your requests with efficiency and understanding. 
                 Our goal is to ensure you can attend to important matters without undue stress, returning to our supportive environment 
                 refreshed and ready to continue your journey toward health and happiness.
             </p>
 
             <div class="my-8">
                 <a href="{{ route('dashboard') }}" class="border-4 border-black text-black font-extrabold p-4 md:text-lg text-xs">Request a leave</a>
             </div>
         </div>
         <div>
             <p class="text-xl font-extrabold mb-2">Three easy steps to grant your Leave</p>
             <div class="border-2 border-red-600">
             </div>
 
             <div class="grid grid-cols-1">
                 <div class="flex flex-row py-4">
                     <div class="mr-2">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.87c1.355 0 2.697.055 4.024.165C17.155 8.51 18 9.473 18 10.608v2.513m-3-4.87v-1.5m-6 1.5v-1.5m12 9.75l-1.5.75a3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0 3.354 3.354 0 00-3 0 3.354 3.354 0 01-3 0L3 16.5m15-3.38a48.474 48.474 0 00-6-.37c-2.032 0-4.034.125-6 .37m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.17c0 .62-.504 1.124-1.125 1.124H4.125A1.125 1.125 0 013 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 016 13.12M12.265 3.11a.375.375 0 11-.53 0L12 2.845l.265.265zm-3 0a.375.375 0 11-.53 0L9 2.845l.265.265zm6 0a.375.375 0 11-.53 0L15 2.845l.265.265z" />
                           </svg>
                     </div>
                     <div class="flex flex-col">
                         <h1 class="md:text-4xl text-3xl">Application</h1>
                         <p class="text-sm">
                             Our application process is super simple and requires just providing a few details. 
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
                         <h1 class="md:text-4xl text-3xl">Await response</h1>
                         <p class="text-sm">
                             Our application process is super simple and requires just providing a few details. 
                         </p>
                     </div>
                 </div>
                 <div class="flex flex-row py-4">
                     <div class="mr-2">
                         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-12 h-12">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                           </svg>
                           
                     </div>
                     <div class="flex flex-col">
                         <h1 class="md:text-4xl text-3xl">Leave granted</h1>
                         <p class="text-sm">
                             You will be informed once your leave is granted
                         </p>
                     </div>
                 </div>
             </div>
         </div>
        </div>
     </x-lander.section-b>

    <div class="grid md:grid-cols-2 md:-mb-24 gap-4 md:p-40">
        <div class="p-4 px-8 mt-16">
                <img class="rounded-sm h-full shadow-2xl" src="https://images.pexels.com/photos/4047186/pexels-photo-4047186.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">          
        </div>
        <div class="pt-24 px-16 mb-24 lg:mt-40">
            <p class="text-3xl font-light py-2">We provide</p>
            <h2 class="text-5xl font-black">Modern Medicine</h2>
            <p class="py-8 text-gray-700">
                As a distinguished organization, we specialize in providing on-demand medical professionals tailored to your specific requirements. Our extensive pool of highly qualified and experienced medical 
                practitioners is readily available. Simply submit your request, 
                and we'll ensure prompt and professional healthcare solutions are delivered to your satisfaction.
            </p>
            <div>
                <div class="mt-12">
                    <a href="{{ route('pages.contact') }}" class="rounded-md bg-gradient-to-r from-sky-500 to-blue-500 text-white px-10 p-4">Contact</a>
                </div>
            </div>
        </div>
    </div>

    <x-lander.footer/>
</x-guest-layout>
