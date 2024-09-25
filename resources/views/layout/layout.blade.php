<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agbe Task</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand mx-auto" href="{{ route('home') }}">Agbe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                                   

                    <li class="nav-item">
                        <a class="nav-link"  href="{{ route('dashboard') }}"> Deshboard</a>
                    </li>

              
                  
                </ul>
            </div>
            @if(!Auth::user())
            <a  type="button" class="nav-link btn btn-info text-white me-2"  href="{{ route('login') }}"> login</a>
            <a  type="button" class="nav-link btn btn-info text-white me-2"  href="{{ route('userform') }}"> Register</a>
            @else
            <a  type="button" class="nav-link btn btn-danger text-white"  href="{{ route('logout') }}"> logout</a>
         @endif
        </div>
    </nav>
</header>

<div class="container mt-4">
    @yield('content')
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-O+B54Z79T3fIC4EckcuZ3ZWozuGDbkXf2FlmkLQ2BMB1uvJ+MntFSqVJffZ9Of+1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</body>
</html>
