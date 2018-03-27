<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Blockchain\Blockchain;

class HomeController extends Controller
{
    
    public function home(){
        return view('welcome');
    }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  

        $Blockchain = new Blockchain('5d97b9ba-7cfc-490c-9201-e29d3180a9ce');
        $wallet = $Blockchain->setServiceUrl("http://localhost:3000");
        $create = $Blockchain->Create->create('gebdandi', null, null, null);
        dd($create);
    }
    
    
}
