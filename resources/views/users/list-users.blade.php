<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('users.addUsers')}}">Thêm mới</a>

    <table border="1">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Phòng ban</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listUsers as $key => $users)
            <tr>
                <td>{{$key +1}}</td>
                <td>{{$users -> name}}</td>
                <td>{{$users -> email}}</td>
                <td>{{$users -> tuoi}}</td>
                <td>{{$users -> ten_donvi}}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>