<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){
        $posts=posts::all();

        return view('admin.posts.index',compact('posts'));
    }

    public function create(){

        $cats=Category::all();
        return view('admin.posts.create',compact('cats'));
    }

    public function store(Request $request){

        $request->validate([
            'title'=>'required|string',
            'desc'=>'required|string',
            'img'=>'required|image|mimes:jpg,png,jpeg',
        ]);

            $file = $request->file('img')->getClientOriginalName();
            $ext=time().'.'.$file;
            $path=public_path('uploads');
            $new_img = $request->img->move($path,$ext);




        posts::create([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'cat_id'=>$request->cat,
            'img'=>$ext,
        ]);

        return redirect()->back();
    }


    public function edit($id){
        $post=posts::find($id);
        $cats=Category::select('id','name')->get();
        return view('admin.posts.edit',compact('post','cats'));
    }

    public function update(Request $request,$id){
        $post=posts::findOrFail($id);

        $request->validate([
            'title'=>'required|string',
            'desc'=>'required|string',
            'img'=>'required|image|mimes:jpg,png,jpeg',
        ]);

        $file = $request->file('img')->getClientOriginalName();
        $ext=time().'.'.$file;
        $path=public_path('uploads');
        $new_img = $request->img->move($path,$ext);

        $post->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'cat_id'=>$request->cat,
            'img'=>$ext,
        ]);

        return redirect(route('post'));

    }


    public function delete($id){
        $old=posts::findOrFail($id)->img;
        Storage::disk('uploads')->delete('uploads/'.$old);

        posts::findOrFail($id)->delete();

        return redirect(route('post'));

    }




}
