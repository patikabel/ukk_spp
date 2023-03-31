@extends('layout.layout')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($pembayaran as $history)
            <div class="col-lg-3">
                <div class="card d-flex mr-5 mb-3" style="width: 18rem;">
                   <div class="card-body">
                      <span class="badge badge-success badge-rounded float-right"badge badge-success badge-rounded float-right>{{ $history->updated_at->diffforHumans() }}</span>
                      <h6 class="font-medium">{{ $history->siswa->nama }}</h6>
                      <hr>
                      <span class="m-b-15 d-block">
                         <ul class="list-group list-group-flush">
                            <li class="list-group-item">Kelas {{ $history->siswa->kelas->nama_kelas }}</li>
                            <li class="list-group-item">Nominal SPP Rp.{{ $spp = $history->siswa->spp->nominal }}</li>
                            <li class="list-group-item">Jumlah Bayar Rp.{{ $bayar = $history->jumlah_bayar }}</li>
                            <li class="list-group-item">SPP Bulan <b  class="text-capitalize text-bold">{{ $history->spp_bulan }}</b></li>
                            <li class="list-group-item" style="display:none">Nominal SPP Rp.{{ $spp = $history->siswa->spp->nominal }}</li>
                            <li class="list-group-item">Tunggakan Rp.{{ $spp - $bayar }}</li>
                       </ul>
                    </span>
                    <div class="comment-footer ">
                      <span class="text-muted float-right">{{ $history->created_at->format('M d, Y') }}</span><br>
                      <span class="action-icons active">
                              <a href="{{ url('dashboard/entry-pembayaran/'. $history->id .'/edit') }}" class="btn" role="button"><i class="bi bi-pencil-square"></i></i></a>
                          </span>
                   </div>
                   </div>
               </div>
            </div>
            @endforeach
        </div>
        @if($pembayaran->lastPage() != 1)
        <div class="btn-group float-right">
           <a href="{{ $pembayaran->previousPageUrl() }}" class="btn btn-success">
              <i class="mdi mdi-chevron-left"></i>
            </a>
            @for($i = 1; $i <= $pembayaran->lastPage(); $i++)
              <a class="btn btn-success {{ $i == $pembayaran->currentPage() ? 'active' : '' }}" href="{{ $pembayaran->url($i) }}">{{ $i }}</a>
            @endfor
             <a href="{{ $pembayaran->nextPageUrl() }}" class="btn btn-success">
              <i class="mdi mdi-chevron-right"></i>
           </a>
        </div>
     @endif
    </div>
@endsection
