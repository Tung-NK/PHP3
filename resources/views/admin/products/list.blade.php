@extends('admin.layouts.default')

@section('title')
    @parent
    Danh sách sản phẩm
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
        @if (session('err'))
            <div class="alert alert-primary" role="alert">
                {{ session('err') }}
            </div>
        @endif
        <h4 class="text-primary mb-4">Danh sách sản phẩm</h4>
        <button class="btn btn-info"><a href="{{ route('admin.products.addPr') }}">Thêm mới</a></button>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Giá sản phẩm</th>
                    <th scope="col">Image</th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        {{-- <th scope="row">{{ $value->product_id }}</th> --}}
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->price }}</td>
                        <td><img class="w-25" src="{{ asset($value->image) }}" alt=""></td>
                        <td>
                            {{ $value->description }}
                        </td>
                        <td>
                            <a href="{{ route('admin.products.detailProduct', $value->product_id) }}"
                                class="btn btn-secondary">Chi tiết</a>
                            <a href="{{ route('admin.products.updateProduct', $value->product_id) }}"
                                class="btn btn-warning">Sửa</a>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete"
                                data-bs-id="{{ $value->product_id }}">Xóa</button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        {{ $data->links('pagination::bootstrap-5') }}
    </div>

    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModal">Stop</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post" id="formDelete">
                    @method('delete')
                    @csrf
                    <div class="modal-body">
                        <p class="text-danger">Ban co muon xoa khong</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('script')
    <script>
        const exampleModal = document.getElementById('delete')
        if (exampleModal) {
            exampleModal.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget
                const id = button.getAttribute('data-bs-id')

                let formDelete = document.getElementById('formDelete')
                formDelete.setAttribute('action', '{{ route('admin.products.deleteProduct') }}' + "?idproduct=" +
                    id)
            })
        }
    </script>
@endpush
