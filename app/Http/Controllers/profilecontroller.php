<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\category;


class profilecontroller extends Controller
{
    public function index()
    {
        
        $categorys = category::all();
        return view('userprofile',compact('categorys'));
    }
    public function profile()
    {
      $categorys = category::all();
      return view('userprofile',array('user'=>Auth::user()),compact('categorys'));
    }

     public function update_avatar(Request $request){
      $categorys = category::all();
     // Handle the user upload of avatar
     if($request->hasFile('avatar')){
         
        $avatar = $request->file('avatar');
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)->resize(300, 300)->save( public_path('/profileimages/'.$filename));

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }

      return view('userprofile', array('user' => Auth::user()),compact('categorys') );
    }
}
