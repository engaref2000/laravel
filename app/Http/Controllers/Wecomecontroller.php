<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wecomecontroller extends Controller
{
    public function index()
    {
        $var =  (config('services.mailgun.scheme'));
        return 'hellow world from controller' . $var;
    }
}
