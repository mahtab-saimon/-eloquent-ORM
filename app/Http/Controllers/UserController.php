<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\phone;
class UserController extends Controller
{
    public function index(){
        $user=user::all();
        return view('student.user',compact('user'));
    }
    public function welcome(){
        return view('/index');
    }

}
