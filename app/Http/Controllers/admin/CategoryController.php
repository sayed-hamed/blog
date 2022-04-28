<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $cats=Category::all();
        return view('admin.category.index',compact('cats'));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required|string|max:100',
        ]);

        Category::create([
            'name'=>$request->name,
        ]);

        return redirect()->to(route('cat'));
    }

    public function edit($id){
        $cat=Category::findOrFail($id);
        return view('admin.category.edit',compact('cat'));
    }

    public function update(Request $request,$id){
       $data=$request->validate([
            'name'=>'required|string|max:100',
        ]);

       Category::where('id',$id)->update($data);
        return redirect()->to(route('cat'));
    }

    public function delete($id){
        $cat=Category::findOrFail($id);
        $cat->delete();
        return back();
    }


}
