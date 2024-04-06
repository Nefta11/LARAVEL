<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserController extends Controller {

    public function shownname($name){

        return view('example',['name'=> $name]);

    }
}