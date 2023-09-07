@extends('admin.app.app')
@section('main-content')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Create Product</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                                <li class="breadcrumb-item active">Create Product</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="" onkeyup="convert_to_slug()" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="slug" class="form-label">slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            value="" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="service" class="form-label">Product Category :</label>
                                        <select id="service" name="product_category" class="form-select">

                                            <option selected="">Choose...</option>
                                            @foreach ($Categories as $service)
                                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="weight" class="form-label">weight</label>
                                        <input type="text" class="form-control" id="weight" name="weight">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nature" class="form-label">nature</label>
                                        <input type="text" class="form-control" id="nature" name="nature">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="price_range" class="form-label">price range</label>
                                        <input type="text" class="form-control" id="price_range" name="price_range">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="min_order_qty" class="form-label">minimum order quantity</label>
                                        <input type="text" class="form-control" id="min_order_qty" name="min_order_qty">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="summernote" name="description" rows="10">

                                            </textarea>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control dropify" id="image" name="image"
                                          data-default-file="{{ old('image') }}" required>
                                    </div>
                                    <div class="col-md-12">
                                        <div id="imageFields" class="row">

                                        </div>
                                        <button id="addImageBtn" class="btn btn-secondary mt-2" type="button">Add
                                            Image</button>
                                    </div>


                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container-fluid -->
    </div> <!-- page-content -->
    @push('script')
    <script>
        function convert_to_slug(){
    var str = document.getElementById("title").value;
    str = str.replace(/[^a-zA-Z0-12\s]/g,"");
    str = str.toLowerCase();
    str = str.replace(/\s/g,'-');
    document.getElementById("slug").value = str;

}
</script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize Dropify for the initial product image input
            $('.dropify').dropify();
let i = 1;
            // Add more fields when the "Add Image" button is clicked
            document.getElementById('addImageBtn').addEventListener('click', () => {
                const newField = `
                    <div class="col-md-6 mt-3">
                        <label for="image" class="form-label">Product Image ${i++}</label>
                        <input type="file" name="productphoto[]" class="dropify" data-max-file-size="2M" data-max-height="2000" />
                        <button class="btn btn-danger mt-2 removeImageBtn">Remove Image</button>
                    </div>
                `;
                document.getElementById('imageFields').insertAdjacentHTML('beforeend', newField);

                // Initialize Dropify for the new image input field
                $('.dropify').last().dropify();

                const removeBtns = document.querySelectorAll('.removeImageBtn');
            removeBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const parentField = btn.parentElement;
                    parentField.remove();
                });
            });
            });
        });
    </script> @endpush

    {{-- </div> --}}

    @endsection
