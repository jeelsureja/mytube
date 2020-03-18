<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Crud;
use App\category;
use App\User;
use App\likes;
use App\comments;
use Illuminate\Support\Facades\DB;

class videoplaycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $data = Crud::all();
        $categorys = category::all();
        return view('withoutlogin.videoplay',compact('data','categorys','data3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = DB::table('likes')
        ->select(array( DB::raw('COUNT(lid) as likes')))
        ->where('id', '=', $id )
        ->get();
        $result1 = User::join('sample_data', 'users.id','=','sample_data.u_id')
        ->where('sample_data.id', '=', $id)
        ->select('users.name')
        ->first();
        $result = User::join('comments', 'users.id', '=', 'comments.u_id')
        ->where('vid', '=', $id) 
        ->select('users.name', 'users.email','users.avatar','comments.comment','comments.updated_at')
        ->get();
        $data3 = Crud::all();
        $categorys = category::all();
        $data = Crud::findOrFail($id);
        return view('withoutlogin.videoplay', compact('data','categorys','result1','query','result','data3'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
