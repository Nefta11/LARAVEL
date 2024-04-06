<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function index(){
        return 'Este es un controller1';
    }

    public function index1(){
        return 'Este es un controller2';
    }

    public function index2(){
        return 'Este es un controller3';
    }


}