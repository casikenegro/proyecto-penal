<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function login(Request $req ){
        $user = User::where('name',$req->name)->first();
        if(!$user) return response()->json(['message'=>'user not exist'],403);
        if($user->password != $req->password) return response()->json(['message'=>'fail password'],403);
        return response()->json(['message'=>'success, si luis me dio ladill hacer los tokens'],200);

    }
}
