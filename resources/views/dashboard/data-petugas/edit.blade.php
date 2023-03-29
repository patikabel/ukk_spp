@extends('layout.layout')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-10">
                <div class="card">
                    <div class="card-body">
                         <div class="card-title">Edit Petugas</div>
                         @if (session()->has('danger!'))
                         <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('danger!') }}</div>
                     @endif
                          <form method="post" action="{{ url('dashboard/data-petugas', $edit->id) }}">
                             @csrf
                             @method('put')
                             <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <label class="input-group-text">
                                Level
                             </label>
                          </div>
                          <select name="level" class="custom-select @error('level') is-invalid @enderror">
                                <option value="">Silahkan Pilih</option>
                                <option value="admin" {{ $edit->level == 'admin' ? 'selected' : '' }}>admin</option>
                                <option value="petugas" {{ $edit->level == 'petugas' ? 'selected' : '' }}>petugas</option>
                         </select>
                       </div>
                       <span class="text-danger">@error('level') {{ $message }} @enderror</span>


                             <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $edit->email}}">
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                             </div>

                             <div class="form-group">
                                <label>Username</label>
                                <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $edit->username}}" >
                                <span class="text-danger">@error('usernama') {{ $message }} @enderror</span>
                             </div>

                             <div class="form-group">
                                <label>nama Petugas</label>
                                <input type="text" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" name="nama_petugas" value="{{ $edit->nama_petugas }}">
                                <span class="text-danger">@error('nama_petugas') {{ $message }} @enderror</span>
                             </div>

                             <div class="form-group">
                                <label for="password">Password Baru (Opsional)</label>
                                <input type="password" id="password" class="form-control" name="password">
                                <span class="text-danger">@error('password_baru') {{ $message }} @enderror</span>
                             </div>

                             <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Password Baru</label>
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                                <span class="text-danger">@error('password_baru') {{ $message }} @enderror</span>
                             </div>
                             <div class="form-group">
                                <input type="hidden" id="old_pass" name="old_pass" class="form-control">
                             </div>


                             <a href="{{ url('dashboard/data-petugas') }}" class="btn btn-primary btn-rounded">
                                <i class="mdi mdi-chevron-left"></i> Kembali
                             </a>

                             <button type="submit" class="btn btn-success btn-rounded float-right">
                                   <i class="mdi mdi-check"></i> Simpan
                             </button>

                          </form>
                    </div>
                </div>              </div>
        </div>
    </div>
@endsection
