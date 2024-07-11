<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <a href="{{route('user.viewAdd')}}" class="btn btn-success ">Thêm mới</a>

    <table class="container table text-center">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Phòng ban</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $user)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$user -> name}}</td>
                <td>{{$user -> email}}</td>
                <td>{{$user -> tuoi}}</td>
                <td>{{$user -> ten_donvi}}</td>
                <td>
                    <a href="{{route('user.detail', $user -> id)}}" class="btn btn-warning">Chi tiết</a>
                    <a onclick="return confirm('Bạn có chắc muốn xoá không')" href="{{route('user.delete', $user -> id)}}" class="btn btn-danger">Xoá</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>