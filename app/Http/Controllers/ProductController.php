<?php

namespace App\Http\Controllers;

use App\Models\Img;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        $products = Product::get();
//        dd($products);
        return view('home')
            ->with("products", $products);
    }

    public function product(Request $request)
    {
        $id = $request->input("id");
        $product = Product::where("id", $id)->first();
        $imgs = Img::where("product_id", $id)->get();
        return view('product.description')
            ->with("product", $product)
            ->with("imgs", $imgs);
    }

    public function test()
    {
        $product = Product::where("id", 6)->first();
//        dd($product);
        return view('test')
            ->with("product", $product);
    }

    public function description()
    {
        $product = Product::where("id", 6)->first();
        $imgs = Img::where("product_id", 2)->get();
//        dd($imgs);
//        dd($product);
        return view('product.description')
            ->with("product", $product)
            ->with("imgs", $imgs);
    }
    public function buy()
    {
        $product = Product::where("id", 6)->first();
        $imgs = Img::where("product_id", 2)->get();
//        dd($imgs);
//        dd($product);
        return view('product.buy')
            ->with("product", $product)
            ->with("imgs", $imgs);
    }

    public function useful()
    {
        $product = Product::where("id", 6)->first();
        $imgs = Img::where("product_id", 2)->get();
//        dd($imgs);
//        dd($product);
        return view('product.useful')
            ->with("product", $product)
            ->with("imgs", $imgs);
    }
    public function coment()
    {
        $product = Product::where("id", 6)->first();
        $imgs = Img::where("product_id", 2)->get();
//        dd($imgs);
//        dd($product);
        return view('product.coment')
            ->with("product", $product)
            ->with("imgs", $imgs);
    }
    public function app_main()
    {
        $product = Product::where("id", 6)->first();
        $imgs = Img::where("product_id", 2)->get();
//        dd($imgs);
//        dd($product);
        return view('layout.app_main')
            ->with("product", $product)
            ->with("imgs", $imgs);
    }

}
