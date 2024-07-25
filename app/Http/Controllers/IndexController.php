<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController
{
    function Index()
    {
        return view("index");
    }
}
