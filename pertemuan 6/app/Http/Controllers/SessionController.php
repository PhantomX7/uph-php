<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function accessSessionData(Request $request){
        if($request->session()->has('name'))
            echo $request->session()->get('name');
        else
            echo "No data";
    }

    public function storeSessionData(Request $request){
        $request->session()->put('name','Ken');
        echo "Data added";
    }

    public function deleteSessionData(Request $request){
        $request->session()->forget('name');
        echo "Data removed";
    }

    public function newGame(Request $request){
        $randomArr = [];
        while(sizeof($randomArr)<3){
            $rand = rand(0,8);
            if(in_array($rand, $randomArr)) continue;
            array_push($randomArr, $rand);
        }
        $request->session()->put('randomNumber', $randomArr);
        $request->session()->put('table',array_fill(0, 9, false));
        $request->session()->put('game', true);
        $request->session()->put('bomb', 3);

        
        return view('index',[
            'randomNumber' => $request->session()->get('randomNumber'),
            'table' => $request->session()->get('table'),
            'game' => $request->session()->get('game'),
        ]);
    }

    public function game(){
        return view('index',[
            'randomNumber' => $request->session()->get('randomNumber'),
            'table' => $request->session()->get('table'),
            'game' => $request->session()->get('game'),
        ]);
    }

    public function postGame(Request $request){
        $num = ($request->r - 1)*3 + ($request->c - 1);
        $table = $request->session()->get('table');
        $randomNumber = $request->session()->get('randomNumber');
        $bomb = $request->session()->get('bomb');
        if(!$table[$num]){
            if(in_array($num, $randomNumber)){
                $table[$num] = true;
                $bomb -= 1;
                $request->session()->put('bomb', $bomb);
                if($bomb == 0)
                    return view('gameover',['bomb'=>$bomb]);
            }
            else{
                return view('gameover',['bomb'=>$bomb]);
            }
        }
        $request->session()->put('table', $table);
        return view('index',[
            'randomNumber' => $request->session()->get('randomNumber'),
            'table' => $request->session()->get('table'),
            'game' => $request->session()->get('game'),
        ]);
    }
}
