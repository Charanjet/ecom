<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    public function login(Request $request){
        $user = User::where('email',$request->input('email'))->first();
        if ($user && Hash::check($request->post('password'),$user->password)){
            $request->session()->put('user',$user);
            return redirect('dashboard');
        }else{
//            echo "in error message";
            session()->flash('message', 'Post was created!');
            return back()->with('error','Username or Password Do not match with our database');
        }
    }

    public function logout(Request $request){
        $request->session()->forget('user');
        $request->session()->flush();
        return  redirect('/')->with(Auth::logout());;
    }
}
