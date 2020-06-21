<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Image;
use App\User;

class UserController extends Controller
{
    public function editProfile(){
        return view('editarPerfil', array('user' => Auth::user()) );
    }

    public function updateProfile(Request $request){
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->image = $filename;
            $user->save();
            return view('perfil', array('user' => Auth::user()));
        }
    }

    public function profile(){
        return view('perfil', array('user' => Auth::user()) );
    }

}
