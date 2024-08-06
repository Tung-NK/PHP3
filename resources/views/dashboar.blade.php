<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        .item {
            display: block;
        }
    </style>
</head>

<body>

    <div class="search mb-3 container">
        <label for="form-label">Search</label>
        <input type="text" class="form-control" id="search">

        <div id="result-search">

        </div>
    </div>
    <div class="container text-center">


        <div class="row my-3">
            @foreach ($list as $data)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset($data->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->name }}</h5>
                            <p class="card-text">{{ $data->description }}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        let search = document.querySelector('#search');
        search.addEventListener('keyup', function(event) {
            let url = "{{ route('users.searchProduct') }}"
            fetch(url, {
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                method: 'post',
                body: JSON.stringify({
                    'search': event.target.value
                })

            }).then((response) => response.json()).then((response) => {
                let UI = ""
                let resultUI = document.querySelector('#result-search')
                if (response.message == 'success' && response.data.lenght != 0) {
                    response.data.forEach(item => {
                        UI += `
                        <a href="{{ route('users.deatilProduct') }}?idProduct="${item.id} class="item">
                            ${item.name}
                        </a>
                       `
                    })
                    resultUI.innerHTML = UI
                }

            });
        })
    </script>
</body>

</html>
