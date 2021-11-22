<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Doa Harian</title>
</head>

<body>
    <div class="container text-center mt-5">
        <h1>Doa Harian</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                <img src="https://images.unsplash.com/photo-1517817748493-49ec54a32465?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Resgiter ICT</h5>
                        <a class="btn btn-primary" href="{{route('post')}}">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                <img src="https://images.unsplash.com/photo-1517817748493-49ec54a32465?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Kategori ICT</h5>
                        <a class="btn btn-primary" href="{{route('post-kategori')}}">Kategori</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                <img src="https://images.unsplash.com/photo-1517817748493-49ec54a32465?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wisata ICT</h5>
                        <a class="btn btn-primary" href="{{route('post-wisata')}}">Wisata</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width: 15rem;">
                <img src="https://images.unsplash.com/photo-1517817748493-49ec54a32465?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Login ICT</h5>
                        <a class="btn btn-primary" href="{{route('login')}}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Doa</th>
                    <th scope="col">Ayat</th>
                    <th scope="col">Latin</th>
                    <th scope="col">Artinya</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($respone as $respon )
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$respon['doa']}}</td>
                    <td>{{$respon['ayat']}}</td>
                    <td>{{$respon['latin']}}</td>
                    <td>{{$respon['artinya']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>