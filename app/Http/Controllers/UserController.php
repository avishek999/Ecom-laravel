<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    function login(Request $req) {
        $User = User::where('email', $req->email)->where('email', $req->email) ->first();
        
        if  ( $User && Hash::check($req->password, $User->password)) {
            $req->session()->put('user', $User);
            return redirect('/');
        } else {
            return "Username or password is not matched";
        }
    }
    
}