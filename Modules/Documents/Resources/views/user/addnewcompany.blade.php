<h3>Add a new Company</h3>


<section class="p-6">
    <form action="/addcompany" method="post" class="rounded-bottom" id="companyForm" name="companyForm">
        @csrf
    <div class="form-group">
        <label>Company Name</label>
        <input  type="text" name="cpny_name" id="cpny_name" class="form-control" required>
    </div>

    <div class="form-group py-3">
        <label>Company e-Mail</label>
        <input  type="email" name="cpny_email" id="cpny_email" class="form-control" required>
    </div>

    <div class="form-group py-2">
        <label>Company Contact</label>
        <input  type="number" name="cpny_contact" id="cpny_contact" class="form-control" required>
    </div>


    <div class="form-group  py-3" >
        <label>Sales Officer ( optional)</label>
        <select class="form-control" name="sales_officer" id="sales_officer">
            @foreach ($all_salesofc as $item)
                <option value="{{ $item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>

    <input class="btn btn-sm btn-primary" type="submit" id="addcpny" name="addcpny">
    
</form>

@if (session('success'))
    <b>{{ session('success') }}</b>
@endif

</section>



<script>
    document.getElementById('companyForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting immediately

        Swal.fire({
            title: "Do you want to save the changes?",
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: "Save",
            denyButtonText: `Don't save`
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form
                e.target.submit();
                Swal.fire("Saved!", "", "success");
            } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
        });
    });
</script>