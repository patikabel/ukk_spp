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
                        @if (session()->has('gagal login'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('gagal login') }}</div>
                        @endif
                        <form action="/loginsiswa" method="POST">
                            @csrf
                            <h4 class="text-center">Siahkan Login</h4><hr>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                    id="nisn" name="nisn" placeholder="masukan NISN anda">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                 name="nis" placeholder="masukan NIS anda" id="nis">
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <input type="text" class="form-control form-control-user"
                                 name="nama" placeholder="masukan Nama anda" id="nama">
                            </div> --}}
                            <button type="submit" class="btn btn-block" style="background-color: #AEC2B6">Login</button>
                            <hr>
                        </form>
                        <div class="text-center">
                            <p>apakah anda admin/petugas<a class="small text-decoration-none" href="/login"> Kembali</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>


</html>
