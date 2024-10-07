<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Documents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
   
                    {{ __("You're logged in!") }}

                </div>

                {{-- this for normal user  --}}
                <div class="row">
                    <div class="col-12">

                        {{-- @include('documents::user/addnewdoc') --}}
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Company</th>
                                    <th>Document Name</th>
                                    <th>Category</th>
                                    <th>Sales Officer</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>


                                @foreach ($documents as $item)

                                <tr>
                                    <td>{{ $item->id}}</td>
                                    <td>{{ $item->company}}</td>
                                    <td>{{ $item -> doc_name }}</td>
                                    <td>{{ $item -> catname }}</td>
                                    <td>{{ $item -> salesofficer}}</td>
                                    <td>{{ $item -> created_at }}</td>
                                    <td>view</td>
                                </tr>       
                                    
                                @endforeach
                                                     
                            </tbody>
                        </table>

                    </div>
                </div>
                {{-- normal user end  --}}
            </div>
        </div>
    </div>


    
</x-app-layout>
