<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <h1 class="text-center fs-5 mt-3">Đây là thông tin về Tùng</h1>

    <div class="container">
        <table class="table text-center mt-4">
            <thead>
                <tr>
                    <th>Họ và tên</th>
                    <th>Năm sinh</th>
                    <th>Quê quán</th>
                    <th>Chuyên ngành</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$data['name']}}</td>
                    <td>{{$data['birthday']}}</td>
                    <td>{{$data['hometown']}}</td>
                    <td>{{$data['specialized']}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>