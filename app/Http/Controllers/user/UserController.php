<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }

    public function contact(){
    return view('user.contact');
    }

    public function about(){
        return view('user.about');

    }
    public function cars(){
        return view ('user.cars');
    }
}
