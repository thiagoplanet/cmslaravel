<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;// importando o controller do admin

class HomeController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth'); //tem que estar logado pra acessar o admin
    }

        public function index(){
        return view('admin.home');
    }
}
