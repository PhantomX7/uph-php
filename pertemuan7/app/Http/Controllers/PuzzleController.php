<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class PuzzleController extends Controller
{
    //
    public function index(Request $request){
      // dd($request->session());
      if ($request->session()->has("bombs")) {
        $bombs = $request->session()->get('bombs');
        $counts = $request->session()->get('counts');
        $collection = $request->session()->get('collection');
        if($counts == 0){
          if(in_array($request->query('choose'),$bombs)){
            $counts++;
            $collection[$request->query('choose')] = "X";
            $request->session()->put('counts', $counts);
          }
        }else if($counts == 1){
          if(in_array($request->query('choose'),$bombs)){
            $counts++;
            $collection[$request->query('choose')] = "X";
            $request->session()->put('counts', $counts);
          }else{
            return view("puzzle.moment")->with('text',"Game Over");
          }
        }else if($counts == 2){
          if(in_array($request->query('choose'),$bombs)){
            $collection[$request->query('choose')] = "X";
            $counts++;
            $request->session()->put('counts', $counts);
          }else{
            return view("puzzle.moment")->with('text',"Good");
          }
        }else{}
          $request->session()->put('collection',$collection);
      } else {
        $bombs = array("1", "2", "3");
        $request->session()->put('bombs', $bombs);
        $request->session()->put('counts', 0);
        $collection = [];
        for ($i=0; $i <9 ; $i++) {
            $collection[$i]=$i;
        }
        $counts = 0;
        $request->session()->put('collection', $collection);
      }
      // $collection = [];
      return view("puzzle.index",array('collection'=>$collection))->with('counts',$counts);
    }

    public function reset(Request $request){
      $request->session()->flush();
      return view("puzzle.reset");
    }
}
