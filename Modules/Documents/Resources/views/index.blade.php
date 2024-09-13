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
                    {{ __("You're logged ins!") }}
                </div>

                {{-- this for normal user  --}}
                <div class="row">
                    <div class="col-6 p-6">

                        @include('documents::user/addnewdoc')

                    </div>
                    <div class="col-6 p-6">

                        @include('documents::user/addnewcompany')

                    </div>
                </div>
                {{-- normal user end  --}}
            </div>
        </div>
    </div>


    
</x-app-layout>
