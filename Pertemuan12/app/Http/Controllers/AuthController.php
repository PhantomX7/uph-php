<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        // dd($request);
        User::create([
            'email'=>$request->email,
            'full_name'=>$request->full_name,
            'active'=>$request->active=='on'?true:false,
            'password'=>bcrypt($request->password)
        ]);
        return redirect('/');
    }
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin');
        }else{
            return redirect('login');
        }
    }

    public function admin(){
        $users = User::all();
        return view('admin')->with('users',$users);
    }
    public function make_admin($id){
        $user = User::find($id);
        $user->admin = 1;
        $user->save();
        return redirect()->back();
    }
    public function not_admin($id){
        $user = User::find($id);
        $user->admin = 0;
        $user->save();
        return redirect()->back();
    }
    public function masterproduct(){
        return view('master-product');
    }
    public function make_mp($id){
        $user = User::find($id);
        $user->masterproduct = 1;
        $user->save();
        return redirect()->back();
    }
    public function not_mp($id){
        $user = User::find($id);
        $user->masterproduct = 0;
        $user->save();
        return redirect()->back();
    }
    public function mastertransaction(){
        return view('master-transaction');
    }
    public function make_mt($id){
        $user = User::find($id);
        $user->mastertransaction = 1;
        $user->save();
        return redirect()->back();
    }
    public function not_mt($id){
        $user = User::find($id);
        $user->mastertransaction = 0;
        $user->save();
        return redirect()->back();
    }
    public function transactiondetail(){
        return view('transaction-detail');
    }
    public function make_td($id){
        $user = User::find($id);
        $user->transactiondetail = 1;
        $user->save();
        return redirect()->back();
    }
    public function not_td($id){
        $user = User::find($id);
        $user->transactiondetail = 0;
        $user->save();
        return redirect()->back();
    }
}
