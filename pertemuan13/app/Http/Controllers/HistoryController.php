<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransactionPermit;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $history = TransactionPermit::all();
        return view('history')
        ->with('history',$history);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createHistory');
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
        $history = new TransactionPermit;

        $history->masteremployeeid = $request->masteremployeeid;
        $history->permitdate = $request->permitdate;
        $history->description = $request->description;

        $history->save();

        return redirect()->route('history');
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
        $history = TransactionPermit::find($id);
        // dd($mastersalary);
        return view('updateHistory')
        ->with('history',$history);
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
        $history = TransactionPermit::find($id);
        $history->masteremployeeid = $request->masteremployeeid;
        $history->permitdate = $request->permitdate;
        $history->description = $request->description;

        $history->save();

        return redirect()->route('history');
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
        $history = TransactionPermit::find($id);
        $history->delete();

        return redirect()->back();
    }
}
