<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Notas</title>

</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
            <h1>Listado de notas</h1>
                @foreach ($notas as $nota)
                <div class="card my-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$nota->title}}</h5>
                        <!-- <p class="card-text">{{$nota->content}}</p> -->
                        <a href="#" class="btn btn-primary">Ver Nota</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>