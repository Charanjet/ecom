<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Users extends Controller
{
    public function login(Request $request){
        $user = User::where('email',$request->input('email'))->first();

        if (Hash::check($request->post('password'),$user->password)){
            echo "you are logged in ";
        }else{
            echo "Username or Password Do not match with our database";
        }
        dd();
    }
}
