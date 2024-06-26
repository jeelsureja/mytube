<?php

namespace App\Http\Controllers;

use App\category;
use App\Crud;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homepagecontroller extends Controller
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

        return view('withoutlogin.home', compact('data', 'categorys'));
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
            ->select([DB::raw('COUNT(lid) as likes')])
            ->where('id', '=', $id)
            ->get();
        $result1 = User::join('sample_data', 'users.id', '=', 'sample_data.u_id')
            ->where('sample_data.id', '=', $id)
            ->select('users.name')
            ->first();
        $result = User::join('comments', 'users.id', '=', 'comments.u_id')
            ->where('vid', '=', $id)
            ->select('users.name', 'users.email', 'comments.comment', 'comments.updated_at')
            ->get();
        $categorys = category::all();
        $data = Crud::findOrFail($id);

        return view('withoutlogin.categorypage', compact('data', 'categorys', 'result1', 'query', 'result'));
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
