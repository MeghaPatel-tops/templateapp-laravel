@extends('dashbord')

@section('content')
   <h1>Product create</h1>
   <div class="container py-5">
    <div class="card shadow border-0">
        <div class="card-header bg-primary text-white py-3">
            <h4 class="mb-0">Add New Product</h4>
        </div>
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="card-body p-4">

            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Row 1 -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control"
                            placeholder="Enter product name" name='productname'>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Product Price (₹)</label>
                        <input type="number" class="form-control"
                            placeholder="Enter price" name='price'>
                    </div>

                    
                </div>

                <!-- Row 5 -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Product Image</label>
                        <input type="file" class="form-control"
                            accept="image/*" name='image'>
                    </div>
                      <div class="col-md-6">
                        <label class="form-label">Product Description</label>
                        <textarea class="form-control" rows="3"
                            placeholder="Enter product description" name='description'></textarea>
                    </div>
                   
                </div>

               

                <!-- Buttons -->
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary px-4">
                        Add Product
                    </button>

                  
                </div>

            </form>
        </div>
    </div>
</div>
@endsection