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
