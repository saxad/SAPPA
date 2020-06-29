<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TrombinoscopeController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $users = User::all();
        return view('trombinoscope', compact('users'));
    }
}
