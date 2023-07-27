<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $recent_product = Product::where('status', 1)->orderBy('id', 'desc')->limit(20)->get();
        $home_category = Product::where('status', 1)->inRandomOrder()->get();
        $categories = SubCategory::where('status', 1)->orderBy('id', 'asc')->get();
        $category = SubCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $brand = Brand::where('status', 1)->orderBy('id', 'desc')->get();
        $electronic_category = Product::where('category_id', 16)->orderBy('id', 'desc')->get();
        return view('welcome', compact('recent_product', 'electronic_category','category', 'categories', 'brand', 'home_category'));
    }
    public function product_details($id){
        $product = Product::find($id);
        $related = Product::where('category_id', $product->category_id)->orderBy('id', 'desc')->get();
        return view('product_details', compact('product', 'related'));
    }
    public function shop(){
        $sub_category = SubCategory::where('status', 1)->orderBy('id','desc')->get();
        $products = Product::where('status', 1)->orderBy('id', 'desc')->paginate(12);
        $brand = Brand::where('status', 1)->orderBy('id','desc')->get();
        return view('shop', compact('products', 'sub_category', 'brand'));
    }
    public function brand($id){
        $sub_category = SubCategory::where('status', 1)->orderBy('id','desc')->get();
        $products = Product::where('brand_id', $id)->where('status', 1)->orderBy('id', 'desc')->paginate(12);
        $brand = Brand::where('status', 1)->orderBy('id','desc')->get();
        return view('brand', compact('products', 'sub_category', 'brand'));
    }
    public function category($id){
        $sub_category = SubCategory::where('status', 1)->orderBy('id','desc')->get();
        $products = Product::where('sub_category_id', $id)->where('status', 1)->orderBy('id', 'desc')->paginate(12);
        $brand = Brand::where('status', 1)->orderBy('id','desc')->get();
        return view('shop', compact('products', 'sub_category', 'brand'));
    }
    public function product_filter(Request $request){
        $products = Product::where('status', 1)->orderBy('id', 'desc')->paginate($request->filter_page);
        return view('filter_result', compact('products'))->render();
    }
    public function sortBy(Request $request){
        if($request->sort == 'new_item'){
            $products = Product::where('status', 1)->orderBy('id', 'desc')->paginate(50);
        }
        elseif($request->sort == 'old_item'){
            $products = Product::where('status', 1)->orderBy('id', 'asc')->paginate(50);
        }
        elseif($request->sort == 'low_price'){
            $products = Product::where('status', 1)->orderBy('price', 'asc')->paginate(50);
        }
        elseif($request->sort == 'high_price'){
            $products = Product::where('status', 1)->orderBy('price', 'desc')->paginate(50);
        }
        
        return view('filter_result', compact('products'))->render();
    }

    public function search(Request $request){
        $sub_category = SubCategory::where('status', 1)->orderBy('id','desc')->get();
        $brand = Brand::where('status', 1)->orderBy('id','desc')->get();
        $products = Product::where('name', 'LIKE', "%$request->search%")
                    ->Orwhere('description', 'LIKE', "%$request->search%")
                    ->Orwhere('short_desc', 'LIKE', "%$request->search%")
                    ->Orwhere('price', 'LIKE', "%$request->search%")
                    ->where('status', 1)->orderBy('id', 'desc')->paginate(12);
        $search = $request->search;
        
        return view('search', compact('products', 'sub_category', 'brand', 'search'));
    }
    public function home_category(Request $request){
        $home_category = Product::where('sub_category_id', $request->id)->inRandomOrder()->get();
        return view('welcome', compact('home_category'))->render();
    }
}
