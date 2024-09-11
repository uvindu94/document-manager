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
            <input type="text" name="doc_name" id="doc_name" class="form-control"
                placeholder="Enter Document Name">
        </div>

        <div class="form-group">
            <label>Document Category</label>
            <select class="form-control" name="" id="">
                @foreach ($all_companies as $item)
                    <option value="{{$item->id}}">{{ $item->name }}</option>
                @endforeach
            </select>
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