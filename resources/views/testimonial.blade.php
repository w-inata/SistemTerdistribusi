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
                    <form action="{{route('testimonial.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="row">
                            <div class="col-12">
                            <img src="{{Storage::url($product->gambar_kamera)}}" alt="" style="width: 200px;"> <br>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nama_perental">Nama kamera</label>
                                <input readonly type="text" class="form-control" required value="{{$product->nama_kamera}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nama_perental">Testimonial</label>
                                <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <button  type="submit" class="mt-2 btn btn-sm btn-success btn-block">
                            Berikan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
