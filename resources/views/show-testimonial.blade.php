@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Semua testimonial kamera - {{$product->nama_kamera}}
                </div>
                <div class="card-body">
                <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Isi</th>
                                            <th>Tanggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($product->testimonial as $t)
                                        <tr>
                                                <td>{{$t->isi}}</td>
                                                <td>{{date('d-m-y',strtotime($t->created_at))}}</td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
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
