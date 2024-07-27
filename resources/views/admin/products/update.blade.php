@extends('admin.layouts.default')

@section('title')
    @parent
    Chỉnh sửa sản phẩm
@show

@section('content')
    <div class="container w-50">
        <h4 class="text-center mt-3">Create Product</h4>
        <form action="{{ route('admin.products.updatePath', $product->product_id) }}" method="post"
            enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" class="form-control" name="nameSP" value="{{$product->name}}">
            </div>

            <div class="mb-3">
                <label for="">Price</label>
                <input type="text" class="form-control" name="priceSp" value="{{$product->price}}"> 
            </div>

            <div class="mb-3">
                <label for="">Image</label>
                <img src="{{asset($product->image)}}" class="w-25" alt="">
                <input type="file" class="form-control" name="imgSP" id="imgSP" accept="image/*">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3" >{{$product->description}}</textarea>
            </div>

            <div class="mb-3">
                <button class="btn btn-success">Chỉnh sửa</button>
            </div>


        </form>
    </div>
@endsection
