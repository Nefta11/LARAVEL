<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UserController extends Controller {

    public function index(){
        return view('welcome');
    }

    public function showname($name){

        return view('example',['name'=> $name]);

    }
}