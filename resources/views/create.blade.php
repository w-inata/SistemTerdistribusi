@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-10">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">Form tambah kamera</div>

                <div class="card-body d-flex justify-content-center">

                    
                    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="">
                        <div class="form-group row">

                        <div class="col-md-12 mb-2">
                            <label for="nama_kamera" class="">{{ __('Nama kamera') }}</label>
                                <input id="nama_kamera" type="text" class="form-control @error('nama_kamera') is-invalid @enderror" name="nama_kamera" value="{{ old('nama_kamera') }}" required autocomplete="nama_kamera" autofocus>

                                @error('nama_kamera')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-md-6 mb-2">
                            <label for="harga_rental" class="">{{ __('Perhari') }}</label>

                                <input id="hari" type="number" class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ old('hari') }}" required autocomplete="hari" autofocus >

                                @error('hari')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                            <label for="harga_rental" class="">{{ __('Harga rental') }}</label>
                                <input id="harga_rental" type="text" class="form-control @error('harga_rental') is-invalid @enderror" name="harga_rental" value="{{ old('harga_rental') }}" required autocomplete="harga_rental" autofocus>

                                @error('harga_rental')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>

                            <div class="form-group row">

                            <div class="col-md-12 mb-2">
                            <label for="gambar_kamera" class="">{{ __('Gambar kamera') }}</label>
                            <input id="gambar_kamera" type="file" class="form-control @error('gambar_kamera') is-invalid @enderror" name="gambar_kamera" value="{{ old('gambar_kamera') }}" required autocomplete="gambar_kamera" autofocus>

                            @error('gambar_kamera')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            </div>
                            <div class="form-group row">

                            <div class="col-md-12 mb-2">
                            <label for="lokasi" class="">Lokasi</label>
                            <input id="lokasi" type="text" class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ old('lokasi') }}" required autocomplete="lokasi" autofocus>

                            @error('lokasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-12">
                                <button class="mb-3 btn btn-sm btn-success btn-block" type="submit">
                                    Kirim
                                </button>
                                <a href="{{route('products.index')}}" class="btn btn-sm btn-secondary btn-block">
                                    Kembali
                                </a>
                            </div>
                        </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
