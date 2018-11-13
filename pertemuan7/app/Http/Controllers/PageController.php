<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

      public function routine(request $request){
        $week = $request->query('week');
        $day = $request->query('day');
        return view("routine")->with('week',$week)->with('day',$day);
      }
}
