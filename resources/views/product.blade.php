@extends('dashbord')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3>Product List</h3>
        <button class="btn btn-primary">+ Add Product</button>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle text-center">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Product Name</th>
            
                            <th>Price</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $key)
                         <tr>
                            <td>4</td>
                            <td>
                                <img src="{{ asset('storage/'.$key->image) }}" width="60" height="60" class="rounded" alt="Product">
                            </td>
                            <td>{{$key->pname}}</td>
                            <td>{{$key->price}}</td>
                            <td>{{$key->description}}</td>
                            
                            <td>
                                <form action="{{route('product.destroy',$key->id)}}" method="post">
                                   @method('delete')
                                   @csrf
                                   <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                                <a class="btn btn-sm btn-success" href="{{route('product.edit',$key->id)}}">Edit</a>
                            </td>
                        </tr>

                        @endforeach
                   

                     
                    </tbody>

                </table>
            </div>

        </div>
    </div>

@endsection