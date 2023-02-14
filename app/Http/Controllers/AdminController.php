<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addUsers(){
        $users = User::all();
        return view("admin.addUsers",['users'=>$users]);
    }
    
    public function add(Request $request){
        $data = $request->validate([
            'name'=>'required|string|max:30',
            'email'=>'required|email',
            'address'=>'required|string',
            'phone'=>'required',
            'age'=>'required',
            'password'=>'required',
            'role'=>'required'
        ]);
        $data['password'] =bcrypt($request->password);
        User::create($data);
        return redirect(url("/addUsers"));
    }

    public function confirm(){
        $users = DB::table('users')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->get();
        return view('admin.confirm',['users'=>$users]);
        
    }
    public function print_invoice($id){
        $users = DB::table('users')->where('user_id','=',$id)
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->get();
    // dd($users);
        return view('admin.invoice',['users'=>$users]);
    }
    public function allUsers()
    {
        $users = User::all();
        return view('admin.all_users',['users'=>$users]);
    }
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return back();
    }
}
