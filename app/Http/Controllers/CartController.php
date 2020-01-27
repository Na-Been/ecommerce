<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;
use App\User;

class CartController extends Controller
{
    public function addToCart($id){
        if(Auth::user()){
            $check=Product::find($id);
            $user=Auth::user();
            $store=new Cart();
            $store->userId = Auth::user()->id;
            $store->productId = $id;
            $store->save();
            return redirect()->back();
        }else{
            return view('login');
        }
    }

    public function deleteCartItems($id){
        if(Auth::user()){
            $findId=Cart::where('id', $id)->first();
            if($findId){
                $findId->delete();
                return redirect()->back();
            }
        }
        else{
            return view('login');
        }
    }

    public function like($id){
        dd($id);
    }
}
