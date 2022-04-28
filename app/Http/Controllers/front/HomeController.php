<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $cats=Category::select('id','name')->get();
        $posts=posts::all();
        $post=posts::select('id','title','img')->first();
        return view('front.layouts.index',compact('cats','posts','post'));
    }

    public function cat($cat_id){
        $posts=posts::where('cat_id',$cat_id)->get();
        $cats=Category::select('id','name')->get();
        $pos=posts::paginate(3);
        $cat=Category::select('id','name')->first();

        return view('front.layouts.cat_desc',compact('posts','cats','cat','pos'));
    }

    public function post($id){
        $post=posts::where('id',$id)->first();
        $cats=Category::select('id','name')->get();

        //dd($post);
        return view('front.layouts.post_desc',compact('post','cats'));
    }


}
