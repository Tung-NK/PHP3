@extends('admin.layouts.default')

@section('title')
    @parent
    Chi tiết sản phẩm
@show

@push('style')
    <style>
        .a {
            color: red;
        }
    </style>
@endpush


@section('content')
    <div class="p-4" style="min-height: 800px;">
        <p>
            Tên sản phẩm
            <span class="font-weight-bold">{{ $product->name }}</span>
        </p>
        <p>
            Giá sản phẩm
            <span class="font-weight-bold">{{ $product->price }}</span>
        </p>
        <p>
            Ảnh sản phẩm
            <img src="{{ asset($product->image) }}" alt="" class="w-25">
        </p>
        <p>
            Chi tiết sản phẩm
            <span class="font-weight-bold">{{ $product->description }}</span>
        </p>

        <a href="{{route('admin.products.listProduct')}}" class="btn btn-success">Quay lại</a>
    </div>

@endsection
