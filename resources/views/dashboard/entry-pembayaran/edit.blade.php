@extends('layout.layout')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-lg-10">
                <div class="card">
                    <div class="card-body">
                       <div class="card-title">Edit Pembayaran</div>

                          <form method="post" action="{{ url('dashboard/entry-pembayaran', $edit->id) }}">
                             @csrf
                             @method('put')
                             @if (session()->has('Berhasil!'))
                                 <div class="alert alert-success" role="alert">{{ session('Berhasil!') }}</div>
                             @endif
                             @if (session()->has('Terjadi Kesalahan!'))
                                 <div class="alert alert-danger" role="alert">{{ session('Terjadi Kesalahan!') }}</div>
                             @endif
                             <div class="form-group">
                                <label>NISN Siswa</label>
                                <input type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ $edit->siswa->nisn }}">
                                <span class="text-danger">@error('nisn') {{ $message }} @enderror</span>
                             </div>
                             <br>
                             <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                   <label class="input-group-text">
                                      SPP Bulan
                                   </label>
                                </div>
                                <select class="form-control @error('spp_bulan') is-invalid @enderror" name="spp_bulan">
                                      <option value="">Silahkan Pilih</option>
                                         <option value="januari" {{ $edit->spp_bulan == 'januari' ? 'selected' : '' }}>Januari</option>
                                         <option value="februari" {{ $edit->spp_bulan == 'februari' ? 'selected' : '' }}>Februari</option>
                                         <option value="maret" {{ $edit->spp_bulan == 'maret' ? 'selected' : '' }}>Maret</option>
                                         <option value="april" {{ $edit->spp_bulan == 'april' ? 'selected' : '' }}>April</option>
                                         <option value="mei" {{ $edit->spp_bulan == 'mei' ? 'selected' : '' }}>Mei</option>
                                         <option value="juni" {{ $edit->spp_bulan == 'juni' ? 'selected' : '' }}>Juni</option>
                                         <option value="juli" {{ $edit->spp_bulan == 'juli' ? 'selected' : '' }}>Juli</option>
                                         <option value="agustus" {{ $edit->spp_bulan == 'agustus' ? 'selected' : '' }}>Agustus</option>
                                         <option value="september" {{ $edit->spp_bulan == 'september' ? 'selected' : '' }}>September</option>
                                         <option value="oktober" {{ $edit->spp_bulan == 'oktober' ? 'selected' : '' }}>Oktober</option>
                                         <option value="november" {{ $edit->spp_bulan == 'november' ? 'selected' : '' }}>November</option>
                                         <option value="desember" {{ $edit->spp_bulan == 'desember' ? 'selected' : '' }}>Desember</option>
                               </select>
                             </div>
                             <span class="text-danger">@error('spp_bulan') {{ $message }} @enderror</span>

                             <div class="form-group">
                               <label>Jumlah Bayar</label>
                               <input type="text" class="form-control @error('jumlah_bayar') is-invalid @enderror" name="jumlah_bayar" value="{{ $edit->jumlah_bayar }}">
                               <span class="text-danger">@error('jumlah_bayar') {{ $message }} @enderror</span>
                            </div>
                            <br>
                           <a href="{{ url('dashboard') }}" class="btn btn-primary btn-rounded">
                             <i class="mdi mdi-chevron-left"></i>Kembali
                           </a>
                           <button type="submit" class="btn btn-success btn-rounded float-right">
                             <i class="mdi mdi-check"></i> Simpan
                           </button>

                        </form>

                    </div>
                 </div>            </div>
        </div>
    </div>
@endsection
