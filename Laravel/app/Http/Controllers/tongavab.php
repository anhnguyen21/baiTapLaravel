<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tongavab extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tinhtong($a,$b){
        return $a + $b; 
    }
    public function postTinhTong(Request $request){
        // echo $request->a;
        return $request->input('a') + $request->input('b');
    }
    public function index(){
        $title='anh';
        $description='learn pnv21b';
        return view('test')->with(['title'=>$title,'description'=>$description]);
    }
}
