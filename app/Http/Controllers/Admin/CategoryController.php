<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
    return view('admin.category.index');
    }
    public function create()
    {
    return view('admin.category.create');
        
    }
    public function store(CategoryFormRequest $request)
    {
     $vailddata= $request->validated();
     $category = new Category;
     $category->name = $vailddata['name'];
     $category->slug =Str::slug( $vailddata['slug']);
     $category->description = $vailddata['description'];

     if($request->hasFile('image')){
        $file=$request->file('image');
        $ext =$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;

        $file->move('uploads/category/',$filename);

     $category->image =$filename;




     }      

    
     $category->meta_title = $vailddata['meta_title'];
     $category->meta_keyword = $vailddata['meta_keyword'];
     $category->meta_description = $vailddata['meta_description'];
     $category->status = $request->status ==true ?'1':'0';

     $category->save();
     return redirect('admin/category')->with('message','cat add successfuly');
        
    }
}
