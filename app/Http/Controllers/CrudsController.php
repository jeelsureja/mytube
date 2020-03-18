<?php

namespace App\Http\Controllers;
use App\Crud;
use App\category;
use App\User;
use App\likes;
use App\comments;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudsController extends Controller
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
     
        
        

    //     $categorys = DB::table('category')
    //    ->join('state', 'state.state_id', '=', 'city.state_id')
    //    ->join('country', 'country.country_id', '=', 'state.country_id')
    //    ->select('country.country_name', 'state.state_name', 'city.city_name')
    //    ->get();

        return view('index', compact('data','categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = category::all();
        return view('create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'video_name'    =>  'required',
            'video_des'     =>  'required',
            'image'         =>  'required|image|max:2048'
        ]);
        
        $image = $request->file('image');
        $video =$request->file('video');


        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $new_name1= rand() . '.' . $video->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $video->move(public_path('videos'), $new_name1);
        $form_data = array(
            'video_name'       =>   $request->video_name,
            'video_des'        =>   $request->video_des,
            'u_id'             =>   $request->u_id,
            'category_id'      =>   $request->category_id,
            'image'            =>   $new_name,
            'video'            =>   $new_name1
           
        );

        Crud::create($form_data);

        return redirect('crud')->with('success', 'Data Added successfully.');
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
        $data2 = Crud::all();   
        $categorys = category::all();
        $data = Crud::findOrFail($id);
        return view('view',array('user'=>Auth::user()), compact('data','categorys','result1','query','result','favourites','data2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Crud::findOrFail($id);
        return view('edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'video_name'    =>  'required',
                'video_des'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'video_name'    =>  'required',
                'video_des'     =>  'required'
            ]);
        }

        $form_data = array(
            'video_name'    =>  $request->video_name,
            'video_des'     =>  $request->video_des,
            'image'         =>  $image_name
        );

        Crud::whereId($id)->update($form_data);
        return redirect('crud')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Crud::findOrFail($id);
        $data->delete();
        return redirect('crud')->with('success', 'Data is successfully deleted');
    }
}
