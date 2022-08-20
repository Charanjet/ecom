<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Products;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class ProductController extends Controller
{
    protected $user_id;
    public function __construct()
    {

        $this->user_id = session()->get('user')['id'];
    }
    public function getDetail($id){
        $product = Products::find($id);
        return view('pr_detail')->with('product',$product);
    }
    public function search(Request $request){
        $query = $request->input('search');
        $search_result = Products::where('name','like',"%".$query."%")->get();
        return view('search')->with(['search_result'=>$search_result,'query'=>$query]);
    }
    public function addToCart(Request $request){
        $product_id=$request->post('product_id');
        $user_id=$request->session()->get('user')['id'];
        if (!is_null($user_id)){
            $cart = new Cart();
            $cart->user_id = $user_id;
            $cart->product_id = $product_id;
            $cart->save();
            return redirect('/detail/'.$product_id);
        }else{
            return redirect('/login');
        }
    }
     public function cartItem(){
        return Cart::where('user_id',session()->get('user')['id'])
                        ->count();
     }

     public function getCartCollection(){
        $cart_items = Cart::join('products','products.id','=','cart.product_id')->where('user_id',$this->user_id)->select('name','price','images','cart.id')->get();
        return view('cart')->with('items',$cart_items);
     }

    public function removeItemFromCart($cart_id){
        Cart::destroy($cart_id);
        return redirect('/cart');
     }
}
