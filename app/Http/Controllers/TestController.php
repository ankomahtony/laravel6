<?php


namespace App\Http\Controllers;


class TestController
{
    public function show($text){
        return view('testing',[
           'text'=>'I am testing this Controller, '.$text
        ]);
    }

}
