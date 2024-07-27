@extends('admin.layouts.default')

@section('content')
    <div class="container w-50">
        <h4 class="text-center mt-3">Create Product</h4>
        <form action="{{ route('admin.products.addPostProduct') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" class="form-control" name="nameSP">
            </div>

            <div class="mb-3">
                <label for="">Price</label>
                <input type="text" class="form-control" name="priceSp">
            </div>

            <div class="mb-3">
                <label for="">Image</label>
                <input type="file" class="form-control" name="imgSP" id="imgSP" accept="image/*">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <button class="btn btn-success">Submit</button>
            </div>


        </form>
    </div>
@endsection
