<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = DB::table('posts')->where('slug',$slug)->first();
        $post=DB::connection('mysql')->where('slug', $slug)->get();
        return view('post',[
           'post'=>$post
        ]);
    }
}
