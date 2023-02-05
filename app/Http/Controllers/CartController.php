<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getCart(){
        $products = DB::table('products')
        ->get();        
        return view('cart', ['cart'=> $products]);
    }
}
