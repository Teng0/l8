<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public  function index()
    {
        $title = "This is Products Index Title";
        $description = "Created By Tengizi Alelishvili";
        $arr = [
            'product1'=>'Iphone',
            'product2'=>'Samsung',
        ];
        return view('products.index',compact('title','description','arr'));
    }
    public function aboutUs ()
    {
        return "About US page";
    }
    public function show($name)
    {
        $data = [
            'Iphone'=>'Iphone',
            'Samsung'=>'Samsung',
        ];

        return view('products.index',[
            'products'=>$data[$name] ??  'Product '.$name.' Does not Exist'
        ]);


    }
}
