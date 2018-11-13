<?php

namespace App\Http\Controllers;
use App\MasterSalary;

use Illuminate\Http\Request;

class MasterSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mastersalary = MasterSalary::all();
        // $posts = Post::where('title','Posts Two')->get();
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::all();
        return view('mastersalary.index')->with('mastersalary',$mastersalary);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mastersalary/create');
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
        $mastersalary = new MasterSalary;
        $mastersalary->category = $request->input('category');
        $mastersalary->maximum_salary = $request->input('maximum_salary');
        $mastersalary->description = $request->input('description');
        $mastersalary->save();
        return redirect('/mastersalary');
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
        $mastersalary= MasterSalary::find($id);
        return view('mastersalary.edit')->with('master_salary',$mastersalary);
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
        $mastersalary = MasterSalary::find($id);
        $mastersalary->category = $request->input('category');
        $mastersalary->maximum_salary = $request->input('maximum_salary');
        $mastersalary->description = $request->input('description');
        $mastersalary->save();
        return redirect('/mastersalary');
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
        $mastersalary = MasterSalary::find($id);
        $mastersalary->delete();
        return redirect('/mastersalary');
    }
}
