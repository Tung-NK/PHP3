<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Tên</label>
                <input type="text" class="form-control" name="name" value="{{$list -> name}}">
            </div>
            

            <div class="mb-3">
                <label class="form-label">Danh muc</label>
                <select class="form-select" name="danhmuc">
                    @foreach($sp as $value)
                    <option @if($list -> category_id === $value -> id)
                                selected
                            @endif
                        value="{{$value -> id}}">{{$value -> name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Gia</label>
                <input type="text" class="form-control" name="price" value="{{$list -> price}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Luot xem</label>
                <input type="number" class="form-control" name="view" value="{{$list -> view}}">
            </div>

            <button type="submit" class="btn btn-success">Cập nhật</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>