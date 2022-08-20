<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getDetail($id){
        $product = Products::find($id);
        return view('pr_detail')->with('product',$product);
    }
    public function search(Request $request){
        $query = $request->input('search');
        $search_result = Products::where('name','like',"%".$query."%")->get();
        return view('search')->with(['search_result'=>$search_result,'query'=>$query]);
    }
}
