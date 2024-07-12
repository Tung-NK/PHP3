<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50">
        <form action="{{route('product.search')}}" method="post">
            @csrf
            <div class="mb-3 my-5">
                <input type="text" class="form-control" name="search">
            </div>

            <center>
                <button type="submit" class="btn btn-success">Tìm kiếm</button>
            </center>
        </form>
    </div>

    <div class="container">
        <a href="{{route('product.viewAdd')}}" class="btn btn-success my-5">Thêm mới</a>

        <table class=" table text-center">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listPro as $key => $pro)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$pro -> name}}</td>
                    <td>{{$pro -> tenDanhmuc}}</td>
                    <td>{{$pro -> price}}</td>
                    <td>{{$pro -> view}}</td>
                    <td>
                        <a class="btn btn-warning" href="{{route('product.viewUpdate',$pro -> id)}}">Edit</a>
                        <a onclick="return confirm('Bạn chắc chắn muốn xoá chứ')" class="btn btn-danger" href="{{route('product.delete',$pro -> id)}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>