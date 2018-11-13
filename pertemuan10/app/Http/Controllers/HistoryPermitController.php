<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoryPermit;


class HistoryPermitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $historypermit = HistoryPermit::all();
        // $posts = Post::where('title','Posts Two')->get();
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::all();
        return view('historypermit.index')->with('historypermit',$historypermit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('historypermit/create');
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
        $historypermit = new HistoryPermit;
        $historypermit->master_employee_id = $request->input('master_employee_id');
        $historypermit->permit_date = $request->input('permit_date');
        $historypermit->description = $request->input('description');
        $historypermit->save();
        return redirect('/historypermit');
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
        $historypermit= HistoryPermit::find($id);
        return view('historypermit.edit')->with('historypermit',$historypermit);
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
        $historypermit = HistoryPermit::find($id);
        $historypermit->master_employee_id = $request->input('master_employee_id');
        $historypermit->permit_date = $request->input('permit_date');
        $historypermit->description = $request->input('description');
        $historypermit->save();
        return redirect('/historypermit');
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
        $historypermit = HistoryPermit::find($id);
        $historypermit->delete();
        return redirect('/historypermit');
    }
}
