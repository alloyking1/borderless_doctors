<x-app-layout>
    <x-slot name="header">
        <h2 class="text-base text-gray-500 text-thin leading-tight">
            Hello {{ Auth::user()->name}}
        </h2>
    </x-slot>

    <div class="text-center mt-8">
        <h1 class="text-4xl font-bold">All requests</h1>
    </div>
    <div class="py-12 overflow-x-auto overflow-y-auto">
        <div class="md:mx-auto mx-6 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 place-content-center p-4 overflow-x-scroll w-auto">
                    <table class="table-auto">
                        <thead class="bg-black text-white">
                        <tr>
                            <th>ID</th>
                            <th>Phone</th>
                            <th>SSN</th>
                            <th>Address</th>
                            <th>Request reason</th>
                            <th>Passport/ID</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($doctorRequest as $request )
                            <tr class="border border-b-gray-100">
                                
                                <td>{{ $request->id }}</td>
                                <td><a href="{{ route('admin.show', ['id' => $request->id] )}}">{{ $request->phone }}</a></td>
                                <td><a href="{{ route('admin.show', ['id' => $request->id] )}}">{{ $request->ssn }}</a></td>
                                <td><a href="{{ route('admin.show', ['id' => $request->id] )}}">{{ $request->address }}</a></td>
                                <td><a href="{{ route('admin.show', ['id' => $request->id] )}}">{{ $request->requestDetails }}</a></td>
                                <td class="hover:text-blue-500">
                                    <a href="{{ route('admin.show', ['id' => $request->id] )}}"> {{ $request->passport }}</a>
                                </td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
   
</x-app-layout>