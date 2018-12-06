<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterSalary;

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
        return view('MasterSalary')
        ->with('mastersalary',$mastersalary);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createMasterSalary');
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

        $mastersalary->category = $request->category;
        $mastersalary->maximumsalary = $request->maximumsalary;
        $mastersalary->description = $request->description;

        $mastersalary->save();

        return redirect()->route('master.salary');
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
        $mastersalary = MasterSalary::find($id);
        // dd($mastersalary);
        return view('updateMasterSalary')
        ->with('mastersalary',$mastersalary);
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
        $mastersalary->category = $request->category;
        $mastersalary->maximumsalary = $request->maximumsalary;
        $mastersalary->description = $request->description;
        $mastersalary->save();

        return redirect()->route('master.salary');
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

        return redirect()->back();
    }
}
