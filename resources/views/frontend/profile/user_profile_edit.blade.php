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
                            <a class="btn btn-primary btn-sm btn-block" href="{{route('user.profile.edit')}}">Profile Edit</a>
                            <a class="btn btn-primary btn-sm btn-block" href="">Change Password</a>
                            <a class="btn btn-danger btn-sm btn-block" href="{{route('user.logout')}}">Log Out</a>

                        </ul>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="text-center">
                            <span class="text-danger">
                            Update your profile
                            </span>
                        </h3>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4> User Profile</h4>
                            </div>
                           </div>
                        <div class="card-body">
                            <form method="POST" action="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input name="name" id="name" type="text" class="form-control" value="{{Auth::user()->name}}" >   
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input name="email" id="email" type="email" class="form-control" value="{{Auth::user()->email}}" >   
                                </div>
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input name="phone" id="phone" type="text" class="form-control" value="{{Auth::user()->phone}}" >   
                                </div>
                                <div class="form-group">
                                    <label for="">Profile Image</label>
                                    <input name="profile_photo_path" id="profile_photo_path" type="file" class="form-control" >   
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>

                    <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>
@endsection