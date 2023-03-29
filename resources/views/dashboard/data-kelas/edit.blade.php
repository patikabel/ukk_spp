@extends('layout.layout')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-10">
                <div class="card">
                    <div class="card-body">
                         <div class="card-title">{{ __('Edit Kelas') }}</div>

                          <form method="post" action="{{ url('/dashboard/data-kelas', $edit->id) }}">
                             @csrf
                             @method('put')
                             <div class="form-group">
                                <label>Nama Kelas</label>
                                <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ $edit->nama_kelas }}">
                                <span class="text-danger">@error('kelas') {{ $message }} @enderror</span>
                             </div>
                             <div class="form-group">
                                <label>Kompeten Keahlian</label>
                                <input type="text" class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" value="{{ $edit->kompetensi_keahlian }}">
                                <span class="text-danger">@error('keahlian') {{ $message }} @enderror</span>
                             </div>
                             <button type="submit" class="btn btn-success btn-rounded">
                                   <i class="mdi mdi-check"></i> Simpan
                             </button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
