<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {

        $products = DB::table('products')->get();

        return view('welcome/welcome')
            ->with('products',$products);
    }
}
