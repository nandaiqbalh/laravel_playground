@extends('frontend.frontend_master')

@section('main_content')
    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <br>
                    <img class="card-img-top" style="border-radius: 50%" src="{{(!empty($user->profile_photo_path)) ? 
                        url('upload/user_images/'.$user->profile_photo_path):
                        url('upload/no_image.png')}}" height="100%" width="100%" alt="">

                        <ul class="list-group list-group-flush">
                            <br>
                            <a class="btn btn-primary btn-sm btn-block" href="{{url('/')}}">Home</a>
                            <a class="btn btn-primary btn-sm btn-block" href="{{route('user.profile.edit')}}">Profile Edit</a>
                            <a class="btn btn-primary btn-sm btn-block" href="{{route('user.password.change')}}">Change Password</a>
                            <a class="btn btn-danger btn-sm btn-block" href="{{route('user.logout')}}">Log Out</a>

                        </ul>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h2 class="text-center">
                            Change your password.    
                        </h2>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4> Change Password</h4>
                            </div>
                           </div>
                        <div class="card-body">

                            <form action="">

                         <div class="form-group">
                            <label for="">Current Password<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input id="current_password" type="password" name="old_password" class="form-control" required > 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">New Password<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input id="password" type="password" name="password" class="form-control" > 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password<span class="text-danger">*</span></label>
                                <div class="controls">
                                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" > 
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">Update</button>
                            </div>
                        </form>

                </div>

                <div class="col-md-2">

                </div>

            </div>
        </div>
    </div>
@endsection