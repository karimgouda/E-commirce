<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function addProduct(){
        $products = Products::all();
        return view('admin.addproduct',['products'=>$products]);
    }

    public function add(Request $request){
       $data = $request->validate([
            "pName"=>'required|string|max:100',
            "price"=>'required',
            "quntity"=>'required',
            "image"=>'required|image|mimes:jpg,png',
            "desc"=>"string",
            "role"=>"required"
        ]);

        $data['image'] = Storage::putFile("products",$data['image']);
        // dd($data);
        Products::create($data);
        return redirect(url("addProduct"));
    }
    
    public function show(){
        $products = Products::all();
        return view('user.product',['products'=>$products]);
    }
    public function single(Request $request, $id){
        $count = $request->quantity;
        $product = Products::findOrFail($id);
        return view('user.single-product',['product'=>$product,'count'=>$count]);
    }
    public function all_product(){
         $products = Products::all();
        return view('admin.AllProduct',['products'=>$products]);
    }
  
    public function editProduct($id){
        $product = Products::findOrFail($id);
        return view('admin.edit',['product'=>$product]);
    }
    public function edit(Request $request,$id){
        $data = $request->validate([
            "pName"=>'required|string|max:100',
            "price"=>'required',
            "quntity"=>'required',
            "image"=>'required|image|mimes:jpg,png',
            "desc"=>'string'
        ]);

        $product = Products::find($id);
        if($request->has("image")){
            Storage::delete($product->image);
            $data['image'] = Storage::putFile("products",$data['image']);

        }
        $product->update($data);
        return redirect(url("/all_product"));
    }
    public function delete($id){

        $product = Products::find($id);
        $product->delete();
        Storage::delete($product->image);
        return redirect(url("/all_product"));
    }
    public function print(Request $request,$id){
        $count = $request->quantity;
        $price = $request->price;
        $data = ($count*$price);
        $user = $request->user_id;
        $invoices = Products::find($id);
        return view('user.print',['invoices'=>$invoices,'data'=>$data,'count'=>$count,'price'=>$price,'user'=>$user]);
    }

    // public function confirm($id){
    //     $data = Products::find($id);
    //     $user = Auth::user($id);
    //     return view('admin.home',['data',$data,'user'=>$user]);
    // }

    public function order(Request $request){
        
        Order::create([
            'pName'=>$request->pName,
            'price'=>$request->price,
            'quntity'=>$request->quntity,
            'user_id'=>$request->user_id
        ]);

        return back();
    }
}