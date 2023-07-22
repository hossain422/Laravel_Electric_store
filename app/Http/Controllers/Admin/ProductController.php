<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImage;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function index(){
        $category = Category::where('status', 1)->orderBy('id', 'desc')->get();
        $up_category = Category::where('status', 1)->orderBy('id', 'desc')->get();
        $sub_category = SubCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $up_sub_category = SubCategory::where('status', 1)->orderBy('id', 'desc')->get();
        $brand = Brand::where('status', 1)->orderBy('id', 'desc')->get();
        $up_brand = Brand::where('status', 1)->orderBy('id', 'desc')->get();
        $product = Product::orderBy('id', 'desc')->get();
        
        return view('admin.product', compact('product','category','sub_category', 'brand', 'up_category', 'up_sub_category', 'up_brand'));
    }


    public function store(Request $request)
        {
            $product = new Product();
            $image = uniqid() . '_Electric_store.' . $request->file('image')->getClientOriginalExtension();
            // $resizedImage = Image::make($image)->resize(600, 600)->encode();
            $request->file('image')->storeAs('public/uploads/' . $image);

            $product->name = $request->name;
            $product->image = $image;
            $product->category_id = $request->category_id;
            $product->sub_category_id = $request->sub_category_id;
            $product->brand_id = $request->brand_id;
            $product->price = $request->price;
            $product->short_desc = strip_tags($request->short_desc);
            $product->description = strip_tags($request->description);
            $product->qty = $request->qty;
            $product->tag = $request->tag;
           

            $multis = $request->file('thambnail');
            $array = array();
            foreach ($multis as $multi) {
                $thambnail = uniqid() . '_Electric_store.' . $multi->getClientOriginalExtension();
                // $resizedTham = Image::make($thambnail)->resize(400, 400)->encode();
                $multi->storeAs('public/uploads/' . $thambnail);
                array_push($array, $thambnail);
            }
            $product->thambnail = json_encode($array); 
            $product->save();

            return response()->json([
                'status' => 'success'
            ]);
        }
        public function update(Request $request){
            $product = Product::find($request->up_id);
            if($request->file('image') != "" && $request->file('thambnail') != ""){
                Storage::delete('public/uploads/' . $product->image);
               
                $image = uniqid() . '_Electric_store.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('public/uploads/' . $image);

                $product->name = $request->name;
                $product->image = $image;
                $product->category_id = $request->category_id;
                $product->sub_category_id = $request->sub_category_id;
                $product->brand_id = $request->brand_id;
                $product->price = $request->price;
                $product->short_desc = strip_tags($request->short_desc);
                $product->description = strip_tags($request->description);
                $product->qty = $request->qty;
                $product->tag = $request->tag;

                Storage::delete('public/uploads/' . $product->thambnail);
                $multis = $request->file('thambnail');
                $array = array();
                foreach ($multis as $multi) {
                    $thambnail = uniqid() . '_Electric_store.' . $multi->getClientOriginalExtension();
                    $multi->storeAs('public/uploads/' . $thambnail);
                    array_push($array, $thambnail);
                }
                $product->thambnail = json_encode($array); 

                $product->save();

                return response()->json([
                    'status' => 'success'
                ]);
            }
            if($request->file('image') != ""){
                Storage::delete('public/uploads/' . $product->image);
                $image = uniqid() . '_Electric_store.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->storeAs('public/uploads/' . $image);

                $product->name = $request->name;
                $product->image = $image;
                $product->category_id = $request->category_id;
                $product->sub_category_id = $request->sub_category_id;
                $product->brand_id = $request->brand_id;
                $product->price = $request->price;
                $product->short_desc = strip_tags($request->short_desc);
                $product->description = strip_tags($request->description);
                $product->qty = $request->qty;
                $product->tag = $request->tag;
                $product->save();

                return response()->json([
                    'status' => 'success'
                ]);
            }
            if($request->file('thambnail') != ""){
            
                $product->name = $request->name;
                $product->category_id = $request->category_id;
                $product->sub_category_id = $request->sub_category_id;
                $product->brand_id = $request->brand_id;
                $product->price = $request->price;
                $product->short_desc = strip_tags($request->short_desc);
                $product->description = strip_tags($request->description);
                $product->qty = $request->qty;
                $product->tag = $request->tag;
            
                Storage::delete('public/uploads/' . $product->thambnail);
                $multis = $request->file('thambnail');
                $array = array();
                foreach ($multis as $multi) {
                    $thambnail = uniqid() . '_Electric_store.' . $multi->getClientOriginalExtension();
                    $multi->storeAs('public/uploads/' . $thambnail);
                    array_push($array, $thambnail);
                }
                $product->thambnail = json_encode($array); 
                $product->save();

                return response()->json([
                    'status' => 'success'
                ]);
            }
            if($request->file('thambnail') == "" && $request->file('thambnail') == ""){
            
                $product->name = $request->name;
                $product->category_id = $request->category_id;
                $product->sub_category_id = $request->sub_category_id;
                $product->brand_id = $request->brand_id;
                $product->price = $request->price;
                $product->short_desc = strip_tags($request->short_desc);
                $product->description = strip_tags($request->description);
                $product->qty = $request->qty;
                $product->tag = $request->tag;
                $product->save();

                return response()->json([
                    'status' => 'success'
                ]);
            }
        }
        

        public function delete(Request $request){
            $product = Product::find($request->id);
            Storage::delete('public/uploads/' . $product->image);

            $thumbnails = json_decode($product->thambnail, true);
            if(isset($thumbnails) && is_array($thumbnails)){
                foreach($thumbnails as $thumbnail){
                    Storage::delete('public/uploads/' . $thumbnail);
                }
            }
                    
            $product->delete();
            
            return response()->json([
                'status' => 'success'
            ]);
        }
        public function active(Request $request){
            $product = Product::find($request->id);
            $product->status = 2;
            $product->save();
            return response()->json([
                'status' => 'success'
            ]);
        }
        public function inactive(Request $request){
            $product = Product::find($request->id);
            $product->status = 1;
            $product->save();
            return response()->json([
                'status' => 'success'
            ]);
        }
        
}
