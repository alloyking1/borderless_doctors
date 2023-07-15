<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base text-gray-500 text-thin leading-tight">
            Hello {{ Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <div class="text-center p-4 mt-4">
                    <h2 class="text-5xl font-black text-gray-700">What would you love to do today ?</h2>
                    <div class="px-8 pt-4">
                        <p class="text-sm text-gray-400 md:px-16">kdflskdf sdkfsld fskfj sdlfksjdfl sdkfsldf ksl ;sldf sdf;sf s;dfs 
                            sfkmsdfskdfsdfskfs;dkflsjlfksjdfsd
                            fsdlfjsdlkfjlsdfsdf
                            ;ksdlf sd;klfsd; fsd;fsdf ;s s;dfs dflks dfls;df s;flsk</p>
                    </div>
                   </div>
                   {{-- <livewire:doctors-livewire-controller/> --}}
                   <div class="grid md:grid-cols-2 grid-cols-1 gap-4 py-16 px-8">
                        <a href="#" class="font-black text-2xl text-center rounded-md bg-gradient-to-r from-sky-500 to-blue-500 text-white p-6">Become a doctor</a>
                    
                        <a href="#" class="font-black text-2xl text-center bg-gradient-to-r from-blue-500 to-sky-500 text-white rounded-md p-6">Request a doctor</a>
                    
                </div>
                </div>
               
            </div>
        </div>
    </div>
</x-app-layout>
