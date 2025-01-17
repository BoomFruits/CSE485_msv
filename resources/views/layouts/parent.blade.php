<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset("/bootstrap-5.3.3-dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("/bootstrap-icons-1.11.3/font/bootstrap-icons.min.css") }}">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">  
                  <a class="nav-link" href="#">Department <span class="sr-only">current</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Dependent</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <ul class="nav">
            <li class="nav-item">
                    <a href="" class="nav-link active" aria-current="page">Trường đại học Thuỷ Lợi</a>
            </li>
        </ul>
    </footer>
</body>
</html>