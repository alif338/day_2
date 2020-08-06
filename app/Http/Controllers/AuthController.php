<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regist() {
        return view('sign_up');
    }

    public function done(Request $request) {
        $firstn = $request['firstn'];
        $lastn = $request['lastn'];
        return view('success',['firstn'=>$firstn, 'lastn'=>$lastn]);
    }
}
