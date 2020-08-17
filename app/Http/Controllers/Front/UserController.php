<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use http\Message;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showAdminName(){
        return 'Samer Zleik';
    }

    public function showIndex(){
//        echo '<script>alert("Welcome to Geeks for Geeks")</script>' ;
/*        $data['id'] = 5;
        $data['name'] = 'Samer';*/

        $obj = new \stdClass();
        $obj->name = 'Samer';
        $obj->id = 99;
        $obj->gender = 'female';

        $data = [];

        return view('welcome',compact('data'));

    }
}
