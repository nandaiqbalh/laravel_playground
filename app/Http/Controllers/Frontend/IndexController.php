<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
