<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route ('users.add')}}" method="post">
        @csrf
        <label for="">Tên</label>
        <input type="text" name="name"> <br>

        <label for="">Email</label>
        <input type="text" name="email"> <br>

        <label for="">Phòng ban</label>

        <select name="phongban" id="">
            @foreach ($phongban as $value)
            <option value="{{$value -> id}}">{{$value -> ten_donvi}}</option>
            @endforeach
        </select> <br>

        <label for="">Tuổi</label>
        <input type="number" name="tuoi"> <br>

        <button type="submit">Thêm mới</button>
    </form>
</body>

</html>