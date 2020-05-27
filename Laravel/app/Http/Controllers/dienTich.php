<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dienTich extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function dienTichTamGiac(Request $request){
        if($request->input('type')=='tamgiac'){
            return ($request->input('a') * $request->input('b'))/2; 
        }else{
            return $request->input('a') * $request->input('b');
        }
        
    }
    public function dienTichVali(Request $request){
        $request->validate([
            'a'=>'require|unique:posts|max:255'
        ],[
            'a.require' => 'khong phai la so'
        ]);
    }
}
