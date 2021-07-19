<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;

class AdminUserController extends Controller
{
    //
    public function index(){
        $users = DB::table('users')->get();

        return view('admin.show_all_user', ['users' => $users]);
    }

    public function delete($id){
        DB::table('users')->where('id', $id)->delete();

        return redirect()->back()->with('message','Delete Success!');
    }
    
    public function adminChangeActive($id){
        $user = User::find($id);
        if($user->active==0){
        $user -> update(['active' => 1]);
        return redirect()->back()->with('message','Activated successfully');
        }elseif($user->active ==1){
            $user->update(['active' => 0]);
            return redirect()->back()->with('message', "Deactivated successfully");
        }else{
            return redirect()->back()->with('ErrorMessage', "Something is wrong, please try again!");
        }
    }
}
