@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    @if(Auth::user()->roles == 'admin')
                    <a href="{{route('products.create')}}" class="btn btn-sm btn-success btn-sm">
                        Tambah kamera
                    </a>
                    @else
                        Silahkan pilih kamera anda
                    @endif
                    <div class="col-md-4 float-right">
                        <form action="/search" method="get">
                            <div class="input-group costum-search-from">
                                <input type="search" name="search" class="from-control" placeholder="search...">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @forelse($products as $product)
                        <div class="col-lg-4 col-sm-12 col-md-6">
                            <div class="gallery-container">
                                <div class="card" style="width: 18rem;">
                                <img src="{{Storage::url($product->gambar_kamera)}}" class="card-img-top" alt="image">
                                @if(Auth::user()->roles == 'admin')
                                <a href="{{route('delete.product',$product->id)}}" class="delete-gallery">
                                        <img src="/images/icon-delete.svg">
                                </a>
                                @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{$product->nama_kamera}}</h5>
                                        <p class="card-text">
                                            <span class="text-bold text-success">Rp {{$product->harga_rental}}</span> / {{$product->hari}}  Hari
                                        </p> 
                                        <p class="card-text">
                                            <span class="text-bold text-secondary"> Lokasi : {{$product->lokasi}}
                                        </p> 
                                        <a href="{{route('rental',$product->id)}}" class="btn btn-primary btn-sm btn-block mb-2">Rental</a>
                                        @if(Auth::user()->roles == 'admin')
                                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-warning btn-sm btn-block">Edit</a>
                                        @endif
                                        <a href="{{route('lihat-testimonial',$product->id)}}" class="btn btn-secondary btn-sm btn-block">Lihat testimonial</a>

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
