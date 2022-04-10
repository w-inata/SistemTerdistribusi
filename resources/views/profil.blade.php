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
                <div class="card-header">Update profil - {{$user->name}} </div>

                <div class="card-body">
                    <form action="{{route('update.profil',$user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="nama">Nama </label>
                                <input type="text" name="name" class="form-control" required value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label for="no_wa">Wa </label>
                                <input type="text" name="no_wa" class="form-control" required value="{{$user->no_wa}}">
                            </div>
                        </div>
                        <button  type="submit" class="mt-2 btn btn-sm btn-success btn-block">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
