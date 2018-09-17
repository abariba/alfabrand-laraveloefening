<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;

class ProductsController extends Controller
{
    
    function getData()
    {
        // $data['data']= DB::table('products')->get('category');

        // if(count($data > 0 ){
        //     return view('pages.categories.dames', $data);
        // }else{
        //     return view('pages.categories.dames', $data);
        // }

        $products = Products::all();
        return view('pages.categories.dames',compact('products'));

    }

    function getproduct($id){
        $product = Products::find($id);
        //dd($product);
        return view('pages.categories.showdames',compact('product'));
    }
}
