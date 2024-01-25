<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function mahmoud()
    {
        return view ('news.allNews');
    }
    public function mohamed()
    {
        return view ('product.allProduct');
    }
    
}
