<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BitcoinController extends Controller
{
    public function index(){
    	return view('bitcoin.index');
    }

    public function buy(){
    	return view('bitcoin.buy');
    }
}
