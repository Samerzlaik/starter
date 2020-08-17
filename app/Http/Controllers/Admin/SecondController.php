<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondController extends Controller
{

    /**
     * SecondController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->except('showString2');
    }

    public function showString1(){
        return "Hi laravel1";
    }

    public function showString2(){
        return "Hi laravel2";
    }
}
