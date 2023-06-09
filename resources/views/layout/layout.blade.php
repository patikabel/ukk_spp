<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPP | UKK</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>

    {{-- awal carousel --}}
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1503252947848-7338d3f92f31?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1031&q=80" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1529101091764-c3526daf38fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1033&q=80" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1484417894907-623942c8ee29?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    {{-- akhir carousel --}}

    {{-- awal navbar --}}

    <nav class="navbar navbar-expand-lg" style="background-color: #F5EBEB">
        <div class="container">
          <a class="navbar-brand" href="/home"><b>Spp</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard">Home</a>
              </li>
              @if (auth()->User()->level == 'admin')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard/data-petugas">Petugas</a>
              </li>
              @endif

              @if(auth()->user()->level == 'admin' || auth()->User()->level == 'petugas')
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard/entry-pembayaran">Bayar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard/history-pembayaran">History</a>
              </li>
              @endif

              {{-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Siswa</a>
              </li> --}}

            @if (auth()->User()->level == 'admin')

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Data Siswa
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/dashboard/data-siswa">data siswa</a></li>
                  <li><a class="dropdown-item" href="/dashboard/data-kelas">Data kelas</a></li>
                  <li><a class="dropdown-item" href="/dashboard/data-spp">Data spp</a></li>
                </ul>
              </li>
            @endif
            </ul>
            <form class="d-flex me-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-box-arrow-right"></i>
            </button>

          </div>
        </div>
      </nav>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin ingin logout?</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a class="btn btn-outline-danger" href="/logout" role="button">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    {{-- akhir navbar --}}

    {{-- untuk kontent --}}
    <br>
    @yield('konten')
    <br><br>

    {{-- awal footer --}}
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <hr>
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2023</span>
                <hr>
            </div>
        </div>
    </footer>
    {{-- akhir footer --}}

      {{-- @stack('prepend-script')
      @include('includes.script')
      @stack('addon-script') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
