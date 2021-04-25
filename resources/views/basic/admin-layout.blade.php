<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <script type="text/javascript" src="{{ asset('/js/style.js') }}"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row g-0">
        <div class=" col-md-3 bg-dark  pt-4">
            <nav class="nav flex-column  ms-3 mb-5">
                <a href="" class="brand-link ms-3 mt-2">
                    <img src="{{ asset('images/pramuja-white.png') }}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                </a> <hr>
                <div class="user-panel ms-3 mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="{{ asset('images/pramuja-RA.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2 mb-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a class="nav-link text-white" href="{{ url('/admin/dashboard')}}"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a class="nav-link text-white" href="{{ url('/admin/recruitment')}}"><i class="fas fa-user-alt me-2"></i>Recruitment</a>
                <a class="nav-link text-white" href="{{ url('/admin/posting')}}"><i class="fas fa-file-upload me-2"></i>Posting</a>
            </nav>
        </div>
        <div class="col-md-9 ">
            <div class="navigation ">
                <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                                </li>
                            </ul>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            <i class="fas fa-sign-out-alt ms-2 me-2"></i>
                        </div>
                    </div>
                    </nav>
            </div>
            <div class="main-menu p-5 pt-2">
                @yield('main-content')
            </div>
            
        </div>
    </div>
    
</body>
</html>