<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Http\Request;
use App\Http\Requests\Users\UpdateProfileRequest;
class UserInfoController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userInfo($user){
        $user = User::find($user);
       if($user->active==0){
            Auth::logout();
            return redirect()->route('login')->with('message','Your account has been banned, please contact admin.');
        }
        return view('userInfo',[
            'user' => $user
        ]);
    }

    public function update($id, Request $request){
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->back();
    }

}
