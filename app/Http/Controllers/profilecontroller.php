<?php

namespace App\Http\Controllers;

use App\category;
use Auth;
use Illuminate\Http\Request;
use Image;

class profilecontroller extends Controller
{
    public function index()
    {

        $categorys = category::all();

        return view('userprofile', compact('categorys'));
    }

    public function profile()
    {
        $categorys = category::all();

        return view('userprofile', ['user' => Auth::user()], compact('categorys'));
    }

    public function update_avatar(Request $request)
    {
        $categorys = category::all();
        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {

            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/profileimages/'.$filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('userprofile', ['user' => Auth::user()], compact('categorys'));
    }
}
