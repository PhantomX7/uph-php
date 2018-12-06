<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MasterEmployee;

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
        return view('MasterEmployee')
        ->with('masteremployee',$masteremployee);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createMasterEmployee');
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
        // dd($request->all());
        $masteremployee = new MasterEmployee;

        $masteremployee->identitycard = $request->identitycard;
        $masteremployee->name = $request->name;
        $masteremployee->address = $request->address;
        $masteremployee->phoneno = $request->phoneno;
        $masteremployee->birthdate = $request->birthdate;

        $masteremployee->save();

        return redirect()->route('master.employee');
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
        $masteremployee = MasterEmployee::find($id);
        // dd($masteremployee);
        return view('updateMasterEmployee')
        ->with('masteremployee',$masteremployee);
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
        $masteremployee->identitycard = $request->identitycard;
        $masteremployee->name = $request->name;
        $masteremployee->address = $request->address;
        $masteremployee->phoneno = $request->phoneno;
        $masteremployee->birthdate = $request->birthdate;
        
        $masteremployee->save();

        return redirect()->route('master.employee');
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

        return redirect()->back();
    }
}
