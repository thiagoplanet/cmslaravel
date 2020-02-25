<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; //importando o controller pq mudamos a pasta

class HomeController extends Controller
{
    public function index(){
        return view('site.home');
    }
}
