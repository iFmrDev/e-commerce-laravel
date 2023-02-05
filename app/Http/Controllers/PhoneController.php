<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PhoneController extends Controller
{
    public function index(){
        
        $phones =[
            ['type' => 'i phone 14','price' => 3500,'color' => 'black'],
            ['type' => 'Samsung','price' => 2500,'color' => 'blue'],
            ['type' => 'Huawi','price' => 1200,'color' => 'gold'],
        ];
        
        return view('phones', ['phones' => $phones]);
    }
}
