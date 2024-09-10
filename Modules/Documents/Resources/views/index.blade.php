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

                <div class="row">
                    <div class="col-6 p-6">
                        <h3>Add a new Document</h3>

                        <section class="p-6">
                        <form class="rounded-bottom">
                            <div class="form-group">
                            <label>Select Company</label>
                            <select class="form-control" name="" id="">
                                <option>company a</option>
                                <option>company b</option>
                            </select>
                        </div>

                        <div class="form-group py-3">
                          <label>Document Name</label>
                         <input type="text" name="doc_name" id="doc_name" class="form-control" placeholder="Enter Document Name">
                        </div>
                        
                        <div class="form-group py-2">
                            <label>Upload Document (* pdf / wdx)</label>
                            <input type="file" name="doc" id="doc" class="form-control">
                        </div>

                        <div class="form-group py-2">
                            <input type="submit" class="btn btn-sm btn-primary">
                        </div>
                        </form>
                    </section>

                    </div>
                    <div class="col-6">a</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
