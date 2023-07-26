<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base text-gray-500 text-thin leading-tight">
            Hello {{ Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl md:mx-auto mx-6 sm:px-6 lg:px-8">
            <div class="bg-white shadow-2xl rounded-2xl md:px-40 p-8 w-auto">
                {{-- <div class="my-4">
                    <h1 class="md:text-3xl text-4xl font-black">Apply for a vacation for your loved one (Step 2)</h1>
                    <p class="text-gray-900 text-xs font-thin">We need these details for you ..</p>
                </div> --}}

                
                @if ($message = Session::get('success'))
                    <div class="bg-green-400 text-white p-5">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                
                <div class="text-center py-32">
                    <h1 class="md:text-3xl text-3xl font-black">Face Verificatioin</h1>
                    <p class="text-gray-900 text-xs font-thin">We need to verify your identity to proceed</p>
                    <br>
                    <a href="https://sa.www4.irs.gov/secureaccess/ui/?TYPE=33554433&REALMOID=06-0006b18e-628e-1187-a229-7c2b0ad00000&GUID=&SMAUTHREASON=0&METHOD=GET&SMAGENTNAME=-SM-u0ktItgVFneUJDzkQ7tjvLYXyclDooCJJ7%2bjXGjg3YC5id2x9riHE98hoVgd1BBv&TARGET=-SM-https%3a%2f%2fsa%2ewww4%2eirs%2egov%2fola%2f" target="_blank" class="p-3 border border-green-600 rounded-md text-green-600 hover:bg-green-600 hover:text-white">Click here to Continue</a>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
