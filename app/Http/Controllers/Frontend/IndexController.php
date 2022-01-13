<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function userLogout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'Succeeded to Log Out User!',
            'alert-type' => 'success'
        );
        return Redirect()->route('login')->with($notification);
    }

    public function userProfileEdit()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('frontend.profile.user_profile_edit', compact('user'));
    }

    public function userProfileUpdate(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/' . $data->profile_photo_path));
            $fileName = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $fileName);
            $data['profile_photo_path'] = $fileName;
        }

        $data->save();

        $notification = array(
            'message' => 'Succeeded to Update User Profile',
            'alert-type' => 'success'
        );
        return Redirect()->route('dashboard')->with($notification);
    }

    public function userPasswordChange()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_password_change', compact('user'));
    }

    public function userPasswordUpdate(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();

            Auth::logout();

            return Redirect()->route('user.logout');
        } else {
            $notification = array(
                'message' => 'Current Password did not match to our record!',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
