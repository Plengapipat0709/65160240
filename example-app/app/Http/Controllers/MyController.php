<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hellow World!";
    function __construct()
    {

    }
    public function index(){
        echo $this ->myvar;
    }
}
