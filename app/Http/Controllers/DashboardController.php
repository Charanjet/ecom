<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Products;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('welcome')->with('products',$products);
    }
    public function getDetail($id){
        $product = Products::find($id);
        return view('pr_detail')->with('product',$product);
    }
}
