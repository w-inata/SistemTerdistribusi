@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Riwayat rental saya
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @forelse($rentals as $rental)
                        <div class="col-4">
                            <div class="gallery-container">
                                <div class="card" style="width: 18rem;">
                                <img src="{{Storage::url($rental->product->gambar_kamera ?? 'foto tidak tersedia')}}" class="card-img-top" alt="image">
                              
                                    <div class="card-body">
                                        <h5 class="card-title">{{$rental->product->nama_kamera ?? 'telah dihapus'}}</h5>
                                        <p class="card-text">
                                            <span class="text-bold text-success">Total bayar : Rp {{$rental->total_biaya ?? 'telah dihapus'}}</span> 
                                        </p>
                                        <p class="card-text">
                                            <span class="text-bold text-info">Lama rental  :  {{$rental->lama_rental ?? 'telah dihapus'}}</span> 
                                        </p> 
                                        <a href="{{route('testimonial',$rental->product_id)}}" class="btn btn-primary btn-sm btn-block mb-2">Testi</a>
                                        <a href="{{route('testimonial.delete',$rental->id)}}" class="btn btn-danger btn-sm btn-block mb-2">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="row">
                            <div class="col-12">
                                Kamera tidak tersedia
                            </div>
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  .gallery-container .delete-gallery{
     display: block;
  position: absolute;
  top: -10px;
  right: 0;
  }
</style>

@endsection
