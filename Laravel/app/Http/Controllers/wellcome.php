<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wellcome extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getWellcome(){
        return view('demoBoostrap');
    }
}
