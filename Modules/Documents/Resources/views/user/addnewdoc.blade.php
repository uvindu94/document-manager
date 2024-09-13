<h3>Add a new Document</h3>

<section class="p-6">
    <form method="POST" action="{{ route('add_doc') }}" name="add_doc" id="add_doc" class="rounded-bottom" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Select Company</label>
            <select class="form-control" name="company" id="company">
                {{-- <option>company a</option>
                <option>company b</option> --}}

                @foreach ($all_companies as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>



        <div class="form-group py-3">
            <label>Document Name</label>
            <input type="text" name="doc_name" id="doc_name" class="form-control" placeholder="Enter Document Name" required>
        </div>

        <div class="form-group">
            <label>Document Category</label>
            <select class="form-control" name="doccat" id="doccat">
                @foreach ($doc_cats as $item)
                    <option value="{{ $item->id }}">{{ $item->catname }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group py-2">
            <label>Upload Document (* pdf / wdx)</label>
            <input type="file" name="doc" id="doc" class="form-control" required>
        </div>

        <div class="form-group py-2">
            <input type="submit" class="btn btn-sm btn-primary">
        </div>
    </form>
</section>
