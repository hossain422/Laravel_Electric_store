<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    public function index(){
        $brand = Brand::orderBy('id', 'desc')->get();
        return view('admin.brand', compact('brand'));
    }
    public function store(Request $request){
        $brand = new Brand();
        $file_name = time().'_Electric_store.'.$request->file('brand_image')->getClientOriginalExtension();
        $request->file('brand_image')->storeAs('public/uploads/'.$file_name);
        $brand->brand_name = $request->brand_name;
        $brand->brand_image = $file_name;
        $brand->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    
    public function update(Request $request){
        $brand = Brand::find($request->up_id);

        if($request->up_brand_image == ""){
            $brand->brand_name = $request->up_brand_name;
            $brand->save();
            return response()->json([
                'status' => 'success'
            ]);
        }
        else{
            $old_image = $brand->brand_image;
            Storage::delete($old_image);

            $file_name = time().'_Electric_store.'.$request->file('up_brand_image')->getClientOriginalExtension();
            $request->file('up_brand_image')->storeAs('public/uploads/'.$file_name);
            $brand->brand_name = $request->up_brand_name;
            $brand->brand_image = $file_name;
            $brand->save();
            return response()->json([
                'status' => 'success'
            ]);
        }
        
    }
    public function delete(Request $request){
        $brand = Brand::find($request->id);
        $image = $brand->brand_image;
        Storage::delete($image);
        $brand->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function active(Request $request){
        $brand = Brand::find($request->id);
        $brand->status = 2;
        $brand->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function inactive(Request $request){
        $brand = Brand::find($request->id);
        $brand->status = 1;
        $brand->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    
}
