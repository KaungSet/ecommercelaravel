<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return 'user name and password not match';
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }

    }
    function register(Request $req)
    {
          $valitor = validator(request()->all(),['name'=>'required','email'=>'required',]);

      if($valitor->fails())
      {
         return back ()->withErrors($valitor);
      }

        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
