<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
        return 'hello';
    }

    function redirectToIndex(Request $request) 
    {
        return to_route('home.index');
    }
}
