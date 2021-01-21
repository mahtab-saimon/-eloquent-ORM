<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phone;

class PhoneController extends Controller
{
      public function index(){
            $phone=phone::all();
            return view('student.index',compact('phone'));
        }
}
