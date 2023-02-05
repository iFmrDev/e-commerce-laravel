<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
Use Alert;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Response;

class ProductsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['getProduct']);
    }

    public function index(){
        // $response = Http::get('https://dummyjson.com/products');
        // $jsonData = $response->json();
        // dd($jsonData['products']);        
        // return view('products', ['products' => $jsonData['products']]);
        $products = Product::all();
        return Response()->json($products);        
    }

    public function store(){
        $product = new Product([
            'title' => 'test',
            'discription' => 'test discription',
            'price' => 267,
            'qyt' => 3
        ]);
        $product->save();
    }

    public function getProduct(){
        $products = Product::get();
        $cartCount = Cart::count();  
              
        return view('products', ['products'=> $products, 'cartCount' => $cartCount]);
    }

    public function addProductCart($product_id){
        $user_id = auth()->user()->id;
        $cart = Cart::where('product_id',$product_id)->first();
        if (is_null($cart)) {
            Cart::create(['user_id' => $user_id, 'product_id' => $product_id,'qty' => 1]);
        } else {
            Cart::where('user_id', $user_id)->where('product_id', $product_id)->increment('qty');
        }
        Alert::toast('تم اضافة المنتج لسلة مشترياتك بنجاح.', 'success');
        // Alert::success('', 'تم اضافة المنتج لسلة مشترياتك بنجاح.');
        return redirect()->back();
        
    }

    public static function getCart(){
        $cart = Cart::with('products')->get();
        return view('cart_content', compact('cart'));
    }

    public static function getCartInvoice(){
        $cart = Cart::with('products')->get();
        return view('cart_content_invoice', compact('cart'));
    }

    public function deleteItemCart($id){
        Cart::destroy($id);
        Alert::toast('تم إزالة المنتج من سلة مشترياتك بنجاح.', 'success');
        return redirect()->back();
    }

    public function checkoutProduct($id){
        
        $product = DB::table('products')->find($id);
        
        // return Response()->json($product); 
        return view('checkout',  ['product'=> $product]);
    }

    public function getInvoice(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:255',
            'address' => 'required|min:6|max:255',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->passes()) {
            return view('invoice', ['name'=> $request->name,'address'=> $request->address,'email'=> $request->email ]);
        }else{
            Alert::toast('لإتمام عملية الشراء الرجاء استكمال الحقول المطلوبة.', 'warning');
            // return redirect()->back()->with([
            //     'code' => 1,
            // ]);
            // return redirect()->back();
            
            return Response::json(['errors' => $validator->errors()]);
        }
        // print('Name: ' . $Request->Name . "<br> Address: " . $Request->Address . "<br> Email: " . $Request->Email);
    }
}

