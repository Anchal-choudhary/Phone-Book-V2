@extends('user.base')


@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="card d-flex justify-content-center flex-column">
                    <div class="bg-primary" style="height: 80px">

                    </div>
                        <center><img src="http://picsum.photos/100/100" width="100px" height="auto" class="rounded-circle" style="margin-top:-50px" alt=""></center>
                
                    <div class="card-body">
                        <h2>{{auth()->user()->name}}</h2>
                    </div>
                
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('vcard.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Contact</label>
                                <input type="text" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-danger w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection