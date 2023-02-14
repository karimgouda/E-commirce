<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
  public function redirect(){
    $role = Auth::user()->role;
    if($role == 'user'){
      $products = Products::all();
      return view('user.home',['products'=>$products]);
    }else{
   
      $users = DB::table('users')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->get();

            // dd($users);

         return view('admin.home',['users'=>$users]);
    }
  }

  public function index(){
    $products = Products::all();
    return view('user.home',['products'=>$products]);
  }

  public function logout(){

    Auth::logout();
    return redirect(url('/'));
  }
  public function logoutAdmin(){
    Auth::logout();
    return redirect('/');
  }

 

}
