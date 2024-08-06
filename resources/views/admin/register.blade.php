<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container w-50">
        <h4 class="text-center mt-3">Register</h4>
        @if (session('err'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ session('err') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <form action="{{ route('postRegister') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="">Confirm Password</label>
                <input type="text" class="form-control" name="password_confirmation">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="mb-3">
                <button class="btn btn-success">Submit</button>
            </div>


        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
