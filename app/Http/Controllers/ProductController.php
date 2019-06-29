<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('products/index')->with('productArray',$productArray);
    }
    public function show($brand, $subCat, $slug){
        // return "$brand, $subCat, $slug";
        $slugString = join(' ', explode('-',$slug));
        return view('products/single', ['brand' => $brand, 'subCat' => $subCat, 'productName' => $slugString]);
    }
    public function newArrivals(){
        // return 'These are the new arrivals';
        $productArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        return view('products/index')->with('productArray',$productArray);
    }
    //
}
