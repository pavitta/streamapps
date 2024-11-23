<?php

namespace App\Http\Controllers;

use App\Models\Category\Category;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category = Category::all();
        $products = Product::with('category:id,name')->paginate(12);
        return view('home',compact('products','category'));
    }

    public function show($id) {
        $products = Product::with('category:id,name')->where('id',$id)->first();
        return view('detail',compact('products'));
    }
}
