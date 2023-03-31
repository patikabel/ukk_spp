 @extends('layout.layout')

 @section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <p>
                            <h4>Haii Selamat Datang <b>{{Auth::user()->username}}</b>, saat ini kamu login sebagai <b>{{Auth::user()->level}}</b>. Silahkan melakukan aktivitasmu!!</h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @endsection
