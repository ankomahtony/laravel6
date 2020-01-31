<?php


namespace App\Http\Controllers;


use DB;

class BlogsController extends Controller
{
    public function show($blog){
        return view('blog');
    }

}
