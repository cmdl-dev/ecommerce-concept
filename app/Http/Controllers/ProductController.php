<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ProductController extends Controller
{
    public function index(){
        $productArray = Item::all();
        return view('products/index')->with('productArray',$productArray);
    }
    public function show($brand, $slug){
        // return "$brand, $subCat, $slug";
        $product = Item::where('slug',$slug)->get();
        return view('products/single', ['product' => $product[0]]);
    }
    public function newArrivals(){
        // return 'These are the new arrivals';
        $productArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('products/index')->with('productArray',$productArray);
    }
    //
}
