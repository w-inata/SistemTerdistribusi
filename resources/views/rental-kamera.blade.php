@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-8">
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">Form rental kamera - {{$product->nama_kamera}} </div>

                <div class="card-body">
                    <form action="{{route('rental.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="harga_rental" value="{{$product->harga_rental}}">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nama_perental">Nama perental</label>
                                <input readonly type="text" class="form-control" required value="{{Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="wa">Nomor wa</label>
                                <input readonly type="text" class="form-control" required value="{{Auth::user()->no_wa ?? 'tidak ada wa'}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label for="">Harga rental</label>
                                <input readonly type="text" class="form-control" required value="{{$product->harga_rental}}">
                            </div>
                            <div class="col-6">
                                <label for="">Perhari</label>
                                <input readonly type="text" class="form-control" required value="{{$product->hari}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nama_perental">Lama rental / hari</label>
                                <input  type="number" class="form-control" name="lama_rental" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nama_perental">Upload ktp</label>
                                <input  type="file" class="form-control" name="gambar" required>
                            </div>
                        </div>

                        <button  type="submit" class="mt-2 btn btn-sm btn-success btn-block">
                            Rental
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
