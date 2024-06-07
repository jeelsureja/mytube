<?php

namespace App\Http\Controllers;

use App\category;
use App\Crud;
use App\favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class favouritecontroller extends Controller
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
        $favourites = DB::table('favouritevideo')
            ->join('sample_data', 'favouritevideo.id', '=', 'sample_data.id')
            ->where('favouritevideo.u_id', Auth::user()->id)
            ->select('*')
            ->get();

        return view('favouritevideo', compact('data', 'categorys', 'favourites'));
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
        $form_data = [
            'id' => $request->id,
            'u_id' => $request->u_id,
        ];
        favourite::firstOrCreate($form_data);

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $favourites = favourite::findOrFail($id);
        $favourites->delete();

        return redirect('favourites');
    }
}
