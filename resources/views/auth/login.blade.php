<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAGE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body style="background-color: #94AF9F">
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="card position-absolute top-50 start-50 translate-middle" style="width: 20rem;">
                    <div class="card-body">
                        @if (session()->has('gagal'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('gagal') }}</div>
                        @endif
                        <form action="login" method="POST">
                            @csrf
                            <h4 class="text-center">Siahkan Login</h4><hr>
                            {{-- @if (session()->has('salah'))
                            <div class="alert alert-danger" role="alert">
                                username atau password yang anda masukkan salah
                            </div>
                            @endif  --}}
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    id="username" name="username" autocomplete="off"
                                    placeholder="Enter username Address...">
                            </div><br>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                    id="password" name="password" placeholder="Password">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-block mb-4" style="background-color: #AEC2B6">Login</button>
                            {{-- <a href="/auth/redirect" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Login with Google
                            </a> --}}
                            <hr>
                        </form>
                        <div class="text-center">
                           <p>apakah anda siswa <a class="small text-decoration-none" href="/"> Kembali</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>


</html>
