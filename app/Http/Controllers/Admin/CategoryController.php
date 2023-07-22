<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::orderBy('id', 'desc')->get();
        return view('admin.category', compact('category'));
    }
    public function store(Request $request){
        $file_name = time().'_Electric.'.$request->file('category_image')->getClientOriginalExtension();
        $request->file('category_image')->storeAs('public/uploads/'.$file_name);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_image = $file_name;
        $category->status = 1;
        $category->save();
        // return back()->with('success', 'Category Inserted is Successfully!');
        return response()->json([
            'status' => 'success'
        ]);
        // return with('success', 'Category Inserted is Successfully!');
    }
    public function update(Request $request){
        if($request->category_image == ""){
            $category = Category::find($request->id);
            $category->category_name = $request->category_name;
            $category->save();
            // return back()->with('success', 'Category Updated is Successfully!');
            return response()->json([
                'status' => 'success'
            ]);
        }
        else{
            $category = Category::find($request->id);
            $name = $category->category_image;
            Storage::delete('public/uploads/' . $name);
            $file_name = time().'_Electric.'.$request->file('category_image')->getClientOriginalExtension();
            $request->file('category_image')->storeAs('public/uploads/'.$file_name);

            
            $category->category_name = $request->category_name;
            $category->category_image = $file_name;
            $category->save();
            // return back()->with('success', 'Category Updated is Successfully!');
            return response()->json([
                'status' => 'success'
            ]);
        }
    }
    public function delete(Request $request){
        $category = Category::find($request->id);
        $category->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function active(Request $request){
        $category = Category::find($request->id);
        $category->status = 2;
        $category->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function inactive(Request $request){
        $category = Category::find($request->id);
        $category->status = 1;
        $category->save();
        return response()->json([
            'status' => 'success'
        ]);
    }


    public function sub_category(){
        $sub_category = SubCategory::orderBy('id', 'desc')->get();
        $category = Category::where('status', 1)->orderBy('id', 'desc')->get();
        $up_category = Category::where('status', 1)->orderBy('id', 'desc')->get();
        return view('admin.sub_category', compact('category', 'sub_category', 'up_category'));
    }
    public function store_sub_category(Request $request){
        $sub_category = new SubCategory();
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_name = $request->sub_category_name;
        $sub_category->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function update_sub_category(Request $request){
        $sub_category = SubCategory::find($request->up_id);
        $sub_category->category_id = $request->category_id;
        $sub_category->sub_category_name = $request->sub_category_name;
        $sub_category->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function delete_sub_category(Request $request){
        $sub_category = SubCategory::find($request->id);
        $sub_category->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function active_sub_category(Request $request){
        $sub_category = SubCategory::find($request->id);
        $sub_category->status = 2;
        $sub_category->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
    public function inactive_sub_category(Request $request){
        $sub_category = SubCategory::find($request->id);
        $sub_category->status = 1;
        $sub_category->save();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
