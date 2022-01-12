@extends('frontend.frontend_master')

@section('main_content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <br>
                    <img class="card-img-top" style="border-radius: 50%" src="{{(!empty($editData->profile_photo_path)) ? 
                        url('upload/admin_images/'.$editData->profile_photo_path):
                        url('upload/no_image.png')}}" height="100%" width="100%" alt="">

                        <ul class="list-group list-group-flush">
                            <br>
                            <a class="btn btn-primary btn-sm btn-block" href="{{url('/')}}">Home</a>
                            <a class="btn btn-primary btn-sm btn-block" href="">Profile Update</a>
                            <a class="btn btn-primary btn-sm btn-block" href="">Change Password</a>
                            <a class="btn btn-danger btn-sm btn-block" href="{{route('user.logout')}}">Log Out</a>
                        </ul>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center">
                            <span class="text-danger">Hi, </span> <strong> {{Auth::user() -> name}}!</strong>
                            Welcome to WarungKu!
                        </h3>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection 
