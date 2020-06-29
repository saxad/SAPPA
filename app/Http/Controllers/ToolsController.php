<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools;
use App\Categories;

class ToolsController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $categories = Categories::all();
        $tools = Tools::all();
        return view('outilsacr',compact('tools','categories'));
    }
}
