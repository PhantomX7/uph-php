<?php

namespace App\Http\Controllers;
use App\MasterEmployee;

use Illuminate\Http\Request;

class MasterEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $masteremployee = MasterEmployee::all();
        // $posts = Post::where('title','Posts Two')->get();
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::all();
        return view('masteremployee.index')->with('masteremployee',$masteremployee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('masteremployee/create');

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
        $masteremployee = new MasterEmployee;
        $masteremployee->name = $request->input('name');
        $masteremployee->address = $request->input('address');
        $masteremployee->phone = $request->input('phone');
        $masteremployee->birth_date = $request->input('birth_date');
        $masteremployee->identity = $request->input('identity');
        $masteremployee->save();
        return redirect('/masteremployee');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $masteremployee= MasterEmployee::find($id);
        return view('masteremployee.edit')->with('masteremployee',$masteremployee);
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
        $masteremployee = MasterEmployee::find($id);
        $masteremployee->name = $request->input('name');
        $masteremployee->address = $request->input('address');
        $masteremployee->phone = $request->input('phone');
        $masteremployee->birth_date = $request->input('birth_date');
        $masteremployee->identity = $request->input('identity');
        $masteremployee->save();
        return redirect('/masteremployee');
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
        $masteremployee = MasterEmployee::find($id);
        $masteremployee->delete();
        return redirect('/masteremployee');
        
    }
}
